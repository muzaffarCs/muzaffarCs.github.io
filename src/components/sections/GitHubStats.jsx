import { useEffect, useState } from 'react';
import { FiExternalLink } from 'react-icons/fi';
import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './GitHubStats.css';

const CACHE_KEY = 'portfolio_github_snapshot';
const CACHE_TTL_MS = 15 * 60 * 1000;

const LANG_COLORS = {
  JavaScript: '#f1e05a',
  TypeScript: '#3178c6',
  Python: '#3572A5',
  C: '#555555',
  'C++': '#f34b7d',
  Java: '#b07219',
  HTML: '#e34c26',
  CSS: '#563d7c',
  PHP: '#4F5D95',
  Dart: '#00B4AB',
  Shell: '#89e051',
  Other: '#8b949e',
};

async function fetchGithubSnapshot(username) {
  const [userRes, reposRes] = await Promise.all([
    fetch(`https://api.github.com/users/${username}`),
    fetch(
      `https://api.github.com/users/${username}/repos?per_page=100&sort=updated`
    ),
  ]);

  if (!userRes.ok || !reposRes.ok) {
    throw new Error('Unable to fetch GitHub data.');
  }

  const user = await userRes.json();
  const repos = await reposRes.json();

  const publicRepos = user.public_repos ?? 0;
  const followers = user.followers ?? 0;
  const following = user.following ?? 0;

  const languageCounts = {};

  repos.forEach((repo) => {
    if (repo.language) {
      languageCounts[repo.language] =
        (languageCounts[repo.language] || 0) + 1;
    }
  });

  const totalLanguages = Object.values(languageCounts).reduce(
    (sum, count) => sum + count,
    0
  );

  const languages = Object.entries(languageCounts)
    .sort((a, b) => b[1] - a[1])
    .slice(0, 5)
    .map(([name, count]) => ({
      name,
      percentage:
        totalLanguages > 0
          ? Math.round((count / totalLanguages) * 100)
          : 0,
      color: LANG_COLORS[name] || LANG_COLORS.Other,
    }));

  return {
    publicRepos,
    followers,
    following,
    languages,
  };
}

export default function GitHubStats() {
  const { data } = useData();
  const personal = data.personal;
  const { githubUsername } = personal;

  const [snapshot, setSnapshot] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(false);

  useEffect(() => {
    let cancelled = false;

    async function loadGithubData() {
      try {
        const cached = sessionStorage.getItem(CACHE_KEY);

        if (cached) {
          const parsed = JSON.parse(cached);

          if (
            parsed.timestamp &&
            Date.now() - parsed.timestamp < CACHE_TTL_MS
          ) {
            if (!cancelled) {
              setSnapshot(parsed.data);
              setLoading(false);
            }

            return;
          }
        }

        const githubData = await fetchGithubSnapshot(githubUsername);

        sessionStorage.setItem(
          CACHE_KEY,
          JSON.stringify({
            timestamp: Date.now(),
            data: githubData,
          })
        );

        if (!cancelled) {
          setSnapshot(githubData);
        }
      } catch (err) {
        console.error('GitHub Stats Error:', err);

        if (!cancelled) {
          setError(true);
        }
      } finally {
        if (!cancelled) {
          setLoading(false);
        }
      }
    }

    loadGithubData();

    return () => {
      cancelled = true;
    };
  }, [githubUsername]);

  return (
    <Section
      id="github"
      eyebrow="07 · GitHub"
      title="GitHub Activity"
      subtitle="A live snapshot of my open-source activity and contribution history."
    >
      {loading ? (
        <Card hoverable={false}>
          <div className="github-stats__state">
            <div className="github-stats__skeleton" />
            <div className="github-stats__skeleton" />
            <div className="github-stats__skeleton" />
          </div>
        </Card>
      ) : error || !snapshot ? (
        <Card hoverable={false}>
          <div className="github-stats__state">
            Unable to load GitHub statistics right now.
            <br />

            <a
              href={personal.github}
              target="_blank"
              rel="noopener noreferrer"
              style={{ color: 'var(--accent-cyan)' }}
            >
              View GitHub Profile
            </a>
          </div>
        </Card>
      ) : (
        <>
          <div className="github-stats__grid">
            {/* GitHub statistics */}
            <Card hoverable={false}>
              <div className="github-stats__stat-row">
                <div className="github-stats__stat">
                  <div className="github-stats__stat-value">
                    {snapshot.publicRepos}
                  </div>

                  <div className="github-stats__stat-label">
                    Public Repos
                  </div>
                </div>

                <div className="github-stats__stat">
                  <div className="github-stats__stat-value">
                    {snapshot.followers}
                  </div>

                  <div className="github-stats__stat-label">
                    Followers
                  </div>
                </div>

                <div className="github-stats__stat">
                  <div className="github-stats__stat-value">
                    {snapshot.following}
                  </div>

                  <div className="github-stats__stat-label">
                    Following
                  </div>
                </div>
              </div>
            </Card>

            {/* Top languages */}
            <Card hoverable={false}>
              <div className="github-stats__stat-label">
                Top Languages
              </div>

              <div className="github-stats__lang-bar">
                {snapshot.languages.map((lang) => (
                  <div
                    key={lang.name}
                    className="github-stats__lang-segment"
                    style={{
                      width: `${lang.percentage}%`,
                      background: lang.color,
                    }}
                    title={`${lang.name}: ${lang.percentage}%`}
                  />
                ))}
              </div>

              <div className="github-stats__lang-legend">
                {snapshot.languages.map((lang) => (
                  <div
                    key={lang.name}
                    className="github-stats__lang-chip"
                  >
                    <span
                      className="github-stats__lang-dot"
                      style={{ background: lang.color }}
                    />

                    <span>
                      {lang.name} {lang.percentage}%
                    </span>
                  </div>
                ))}
              </div>
            </Card>

            {/* GitHub contribution graph */}
            <Card
              hoverable={false}
              className="github-stats__img-wrap"
            >
              <div className="github-stats__contribution-header">
                <div className="github-stats__stat-label">
                  Contribution History
                </div>

                <a
                  href={personal.github}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="github-stats__profile-link"
                >
                  @{githubUsername}
                  <FiExternalLink size={13} />
                </a>
              </div>

              <div className="github-calendar-wrapper">
                <img
                  className="github-calendar-image"
                  src={`https://ghchart.rshah.org/e8a33d/${githubUsername}`}
                  alt={`${personal.name}'s GitHub contribution graph`}
                  loading="lazy"
                />
              </div>
            </Card>
          </div>

          <p className="github-stats__note">
            Stats update automatically and reflect live GitHub activity for{' '}
            <a
              href={personal.github}
              target="_blank"
              rel="noopener noreferrer"
              style={{ color: 'var(--accent-cyan)' }}
            >
              @{githubUsername}
            </a>
            .
          </p>
        </>
      )}
    </Section>
  );
}
