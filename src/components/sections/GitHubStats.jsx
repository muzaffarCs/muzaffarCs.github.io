import { useEffect, useState } from 'react';
import { FiExternalLink } from 'react-icons/fi';

import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './GitHubStats.css';

/**
 * GitHub Activity
 * ------------------------------------------------------------------
 * This previously embedded images from github-readme-stats.vercel.app,
 * a community-run service. Those broke because they depend entirely on
 * a third party's uptime: that project is extremely popular, runs on
 * Vercel's serverless free tier, and is well known for intermittent
 * outages, cold-start failures, and rendering errors when under load —
 * none of which is something a static GitHub Pages site can detect,
 * retry, or work around, since it's just an <img src> to someone else's
 * server. There's also no reliable way to render a real contribution
 * calendar from a static site: GitHub's contribution graph is only
 * exposed through the authenticated GraphQL API, and no token can be
 * safely embedded in frontend code.
 *
 * The fix: call GitHub's own public REST API directly (no key needed
 * for public data), and render the stats ourselves in the site's own
 * design system. This removes the external rendering dependency
 * entirely — the only remaining dependency is GitHub's API itself,
 * which is far more reliable, and results degrade gracefully (a plain
 * link to the profile) rather than a broken image if it's ever
 * unavailable or rate-limited.
 */

const CACHE_KEY = 'githubStatsCache';
const CACHE_TTL_MS = 15 * 60 * 1000; // 15 minutes — keeps us well under the 60 req/hr unauthenticated limit

const LANG_COLORS = ['#e8a33d', '#5fc9d6', '#6bbf8e', '#d9736a', '#9b8cf2', '#7d8894'];

function timeAgo(dateString) {
  const seconds = Math.floor((Date.now() - new Date(dateString).getTime()) / 1000);
  const units = [
    ['year', 31536000], ['month', 2592000], ['day', 86400], ['hour', 3600], ['minute', 60],
  ];
  for (const [label, secs] of units) {
    const value = Math.floor(seconds / secs);
    if (value >= 1) return `${value}${label[0]}`;
  }
  return 'just now';
}

function describeEvent(event) {
  const repo = event.repo?.name?.split('/')[1] || event.repo?.name || 'a repository';
  switch (event.type) {
    case 'PushEvent':
      return `Pushed to ${repo}`;
    case 'CreateEvent':
      return `Created ${event.payload?.ref_type || 'a resource'} in ${repo}`;
    case 'WatchEvent':
      return `Starred ${repo}`;
    case 'ForkEvent':
      return `Forked ${repo}`;
    case 'PullRequestEvent':
      return `${event.payload?.action || 'Updated'} a pull request in ${repo}`;
    case 'IssuesEvent':
      return `${event.payload?.action || 'Updated'} an issue in ${repo}`;
    case 'IssueCommentEvent':
      return `Commented on an issue in ${repo}`;
    default:
      return `${event.type.replace('Event', '')} in ${repo}`;
  }
}

async function fetchGithubSnapshot(username) {
  const headers = { Accept: 'application/vnd.github+json' };

  const [userRes, reposRes, eventsRes] = await Promise.all([
    fetch(`https://api.github.com/users/${username}`, { headers }),
    fetch(`https://api.github.com/users/${username}/repos?per_page=100&sort=updated`, { headers }),
    fetch(`https://api.github.com/users/${username}/events/public?per_page=8`, { headers }),
  ]);

  if (!userRes.ok) {
    if (userRes.status === 403) throw new Error('rate-limited');
    throw new Error('unavailable');
  }

  const user = await userRes.json();
  const repos = reposRes.ok ? await reposRes.json() : [];
  const events = eventsRes.ok ? await eventsRes.json() : [];

  const langCounts = {};
  repos.forEach((repo) => {
    if (repo.language) langCounts[repo.language] = (langCounts[repo.language] || 0) + 1;
  });
  const totalLangs = Object.values(langCounts).reduce((a, b) => a + b, 0) || 1;
  const topLanguages = Object.entries(langCounts)
    .sort((a, b) => b[1] - a[1])
    .slice(0, 5)
    .map(([name, count]) => ({ name, percent: Math.round((count / totalLangs) * 100) }));

  const recentActivity = events.slice(0, 5).map((event) => ({
    id: event.id,
    text: describeEvent(event),
    time: timeAgo(event.created_at),
  }));

  return {
    publicRepos: user.public_repos ?? repos.length,
    followers: user.followers ?? 0,
    following: user.following ?? 0,
    topLanguages,
    recentActivity,
    fetchedAt: Date.now(),
  };
}

export default function GitHubStats() {
  const { data } = useData();
  const { personal } = data;
  const { githubUsername } = personal;

  const [snapshot, setSnapshot] = useState(null);
  const [status, setStatus] = useState('loading'); // 'loading' | 'ready' | 'error'

  useEffect(() => {
    let cancelled = false;

    async function load() {
      try {
        const cachedRaw = sessionStorage.getItem(CACHE_KEY);
        if (cachedRaw) {
          const cached = JSON.parse(cachedRaw);
          if (cached && Date.now() - cached.fetchedAt < CACHE_TTL_MS) {
            setSnapshot(cached);
            setStatus('ready');
            return;
          }
        }
      } catch {
        // Corrupted cache entry — ignore and fetch fresh.
      }

      try {
        const result = await fetchGithubSnapshot(githubUsername);
        if (cancelled) return;
        setSnapshot(result);
        setStatus('ready');
        try {
          sessionStorage.setItem(CACHE_KEY, JSON.stringify(result));
        } catch {
          /* sessionStorage unavailable — not critical, just skip caching */
        }
      } catch {
        if (!cancelled) setStatus('error');
      }
    }

    load();
    return () => {
      cancelled = true;
    };
  }, [githubUsername]);

  return (
    <Section
      id="github"
      eyebrow="07 · GitHub"
      title="GitHub Activity"
      subtitle="A live snapshot pulled directly from the GitHub API — no third-party rendering service involved."
    >
      {status === 'loading' && (
        <div className="github-stats__grid">
          <Card hoverable={false}>
            <div className="github-stats__skeleton" style={{ width: '60%' }} />
            <div className="github-stats__skeleton" style={{ width: '80%' }} />
            <div className="github-stats__skeleton" style={{ width: '40%' }} />
          </Card>
        </div>
      )}

      {status === 'error' && (
        <Card hoverable={false} className="github-stats__state">
          <p>GitHub stats are temporarily unavailable (the API may be rate-limited or unreachable right now).</p>
          <p style={{ marginTop: 10 }}>
            <a href={personal.github} target="_blank" rel="noopener noreferrer" style={{ color: 'var(--accent-cyan)' }}>
              View the profile directly on GitHub <FiExternalLink style={{ display: 'inline', verticalAlign: 'middle' }} />
            </a>
          </p>
        </Card>
      )}

      {status === 'ready' && snapshot && (
        <div className="github-stats__grid">
          <Card hoverable={false}>
            <div className="github-stats__stat-row">
              <div className="github-stats__stat">
                <div className="github-stats__stat-value">{snapshot.publicRepos}</div>
                <div className="github-stats__stat-label">Public Repos</div>
              </div>
              <div className="github-stats__stat">
                <div className="github-stats__stat-value">{snapshot.followers}</div>
                <div className="github-stats__stat-label">Followers</div>
              </div>
              <div className="github-stats__stat">
                <div className="github-stats__stat-value">{snapshot.following}</div>
                <div className="github-stats__stat-label">Following</div>
              </div>
            </div>
          </Card>

          <Card hoverable={false}>
            <h3 style={{ fontFamily: 'var(--font-display)', fontSize: '0.9rem', color: 'var(--text-primary)', marginBottom: 14 }}>
              Top Languages
            </h3>
            {snapshot.topLanguages.length === 0 ? (
              <p style={{ color: 'var(--text-muted)', fontSize: '0.88rem' }}>No public repository language data yet.</p>
            ) : (
              <>
                <div className="github-stats__lang-bar">
                  {snapshot.topLanguages.map((lang, i) => (
                    <div
                      key={lang.name}
                      className="github-stats__lang-segment"
                      style={{ width: `${lang.percent}%`, background: LANG_COLORS[i % LANG_COLORS.length] }}
                    />
                  ))}
                </div>
                <div className="github-stats__lang-legend">
                  {snapshot.topLanguages.map((lang, i) => (
                    <span key={lang.name} className="github-stats__lang-chip">
                      <span className="github-stats__lang-dot" style={{ background: LANG_COLORS[i % LANG_COLORS.length] }} />
                      {lang.name} · {lang.percent}%
                    </span>
                  ))}
                </div>
              </>
            )}
          </Card>

          <Card hoverable={false}>
            <h3 style={{ fontFamily: 'var(--font-display)', fontSize: '0.9rem', color: 'var(--text-primary)', marginBottom: 14 }}>
              Recent Public Activity
            </h3>
            {snapshot.recentActivity.length === 0 ? (
              <p style={{ color: 'var(--text-muted)', fontSize: '0.88rem' }}>No recent public activity to show.</p>
            ) : (
              <div className="github-stats__activity-list">
                {snapshot.recentActivity.map((item) => (
                  <div key={item.id} className="github-stats__activity-item">
                    <span className="github-stats__activity-time">{item.time}</span>
                    <span>{item.text}</span>
                  </div>
                ))}
              </div>
            )}
          </Card>
        </div>
      )}

      <p className="github-stats__note">
        Live data for{' '}
        <a href={personal.github} target="_blank" rel="noopener noreferrer" style={{ color: 'var(--accent-cyan)' }}>
          @{githubUsername}
        </a>
        , fetched directly from the GitHub REST API.
      </p>
    </Section>
  );
}
