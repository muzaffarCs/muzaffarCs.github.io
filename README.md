# Muzaffar Ali — Developer Portfolio

A modern, responsive, dark/light-mode developer portfolio built with **React + Vite**, deployed as a **fully static site on GitHub Pages**. It includes a **Local Admin Editor** — a browser-only content editing tool for personal use, not a secure online CMS.

---

## Architecture

```
GitHub Repository
      │
      ▼
GitHub Actions (npm install → npm run build)
      │
      ▼
GitHub Pages  ──►  Static Portfolio  (reads src/data/defaultData.js)
                          │
                          ▼
                  Local Admin Editor (/admin)
                          │
                          ▼
                    localStorage
              (this browser's edits only —
               never affects other visitors)
```

There is **no backend, no database, and no server-side authentication** anywhere in this project. Everything is static files served by GitHub Pages.

---

## Features

- Dark/Light mode toggle, Framer Motion animations, glassmorphism UI, terminal-style Hero with a typing animation
- Sticky navbar with scroll-spy + responsive hamburger menu, filterable project cards
- Git-log style timelines (Experience, Education) and rich certification cards (issuer, credential ID, verification link, skill tags)
- **GitHub Activity** section powered by live calls to the GitHub REST API (see "GitHub Activity Fix" below — this replaced a broken third-party image embed)
- A working, downloadable resume at `public/resume.pdf`
- **Local Admin Editor** (`/admin`) for editing all content from a browser UI
- SEO meta tags, reduced-motion support, visible keyboard focus, semantic HTML

---

## Project Structure

```
portfolio/
├── .github/workflows/deploy.yml   # official GitHub Pages Actions deployment
├── public/
│   ├── favicon.svg
│   ├── avatar-placeholder.svg
│   └── resume.pdf
├── src/
│   ├── components/
│   │   ├── admin/                 # Local Admin Editor (AdminPanel, ArrayEditor, ObjectEditor, schemas)
│   │   ├── layout/                # Navbar, Footer, ScrollProgress, ScrollToTop, ThemeToggle
│   │   ├── sections/               # Hero, About, Skills, Experience, Projects, GitHubStats, etc.
│   │   └── ui/                     # Section, Card, Button, Badge, Timeline
│   ├── context/
│   │   ├── ThemeContext.jsx
│   │   └── DataContext.jsx        # runtime content store — backs the admin editor, hardened against corrupted localStorage
│   ├── data/
│   │   └── defaultData.js         # SOURCE OF TRUTH for the published site
│   ├── utils/withBase.js          # resolves public asset paths under the GitHub Pages subpath
│   ├── App.jsx
│   └── main.jsx                    # routes "/" -> App, "/admin" -> AdminPanel
├── index.html
├── package.json
└── vite.config.js                  # GitHub Pages `base` path config
```

---

## Local Development

```bash
npm install
npm run dev
```

Visit `http://localhost:5173` for the site, `http://localhost:5173/admin` for the Local Admin Editor.

```bash
npm run build      # outputs to dist/, also generates dist/404.html for GitHub Pages routing
npm run preview    # preview the production build locally
```

---

## GitHub Pages Deployment

### One-time setup

1. **Confirm the base path.** Open `vite.config.js` and check the `REPO_NAME` constant:
   ```js
   const REPO_NAME = 'MAD_Lab';
   ```
   This **must exactly match your GitHub repository name** (case-sensitive). This project has no `.git` remote configured yet, so this could not be verified automatically — it's set based on the repo name you mentioned. If your repo is actually named something else, update this line before deploying, or every asset (CSS, JS, resume, images) will 404 on the live site.

   *(Exception: if your repository is literally named `muzaffarcs.github.io`, set `REPO_NAME = ''` instead — user/org pages are served from the domain root, not a subpath.)*

2. **Push the code to GitHub:**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/muzaffarcs/MAD_Lab.git
   git push -u origin main
   ```

3. **Enable GitHub Pages via Actions:**
   - Go to your repo on GitHub → **Settings → Pages**
   - Under "Build and deployment" → **Source**, select **"GitHub Actions"**

That's it — the included workflow (`.github/workflows/deploy.yml`) handles the rest automatically.

### Ongoing deployment

```bash
git add .
git commit -m "Update portfolio"
git push
```

Pushing to `main` triggers `.github/workflows/deploy.yml`, which runs `npm ci` → `npm run build` → uploads `dist/` → deploys to GitHub Pages, using GitHub's own official Pages Actions (`actions/upload-pages-artifact`, `actions/deploy-pages`) — no third-party deployment action involved. Watch progress under your repo's **Actions** tab.

Your site will be live at:
```
https://muzaffarcs.github.io/MAD_Lab/
```

---

## Admin Editor — How It Works

> **The Local Admin Editor is a personal editing convenience tool, not a secure online administration system.** There is intentionally no login. Read the Security Model section before using it.

1. Open `/admin` on your local dev server or your deployed site.
2. Edit personal info, skills, experience, projects, education, certifications, achievements, currently-learning items, or languages.
3. Click **Save Section** — changes save to this browser's `localStorage` and apply immediately.
4. Click **View Public Site** to preview how your edits look on the actual portfolio pages, in this same browser.
5. When you're happy with the changes, click **Export Data File** — this downloads an updated `defaultData.js`.
6. Replace `src/data/defaultData.js` in your project with the downloaded file.
7. Review the diff (`git diff`) to make sure it looks right.
8. Commit and push:
   ```bash
   git add src/data/defaultData.js
   git commit -m "Update portfolio content"
   git push
   ```
9. GitHub Actions rebuilds and redeploys automatically — your changes are now public.

Local edits made in `/admin` **never automatically become public**. `src/data/defaultData.js` in the repository is always the actual source of truth for what every visitor sees — a browser's `localStorage` only affects that one browser's own view.

---

## Security Model

**Public website:**
- Fully public, fully static
- No backend, no database, no server-side authentication, no secrets

**Admin editor (`/admin`):**
- A local convenience tool for editing content in your own browser
- Uses `localStorage` — **not** encrypted, **not** private, **not** authenticated
- Anyone who knows the URL can open `/admin`, but nothing they change there reaches the published site or any other visitor — it only affects their own browser's local view
- This is **not** a secure CMS and is never described as one anywhere in this project

**Source of truth:**
- The Git repository — specifically `src/data/defaultData.js`

**Publishing changes:**
- Manually: export from `/admin` → replace `defaultData.js` → commit → push → GitHub Pages deploys

There used to be a password gate on `/admin` in an earlier version of this project. **It was removed on purpose.** A password baked into a static frontend bundle is visible to anyone who opens browser dev tools — it would have implied a security guarantee this architecture cannot actually provide. Removing it and being upfront about it is the safer, more honest choice.

---

## Using the Admin Editor Safely

- Only use `/admin` on your own computer — treat it like any other browser tab with unsaved personal notes in it.
- Don't use it on public or shared computers.
- **Never type passwords, API keys, tokens, or other secrets into any portfolio field.** Everything you type here can end up in the exported file and, eventually, on the public website.
- Don't treat `localStorage` as secure or encrypted storage — it isn't.
- Don't put private information into portfolio content in general, since exported data is meant to become public.
- Always review the exported `defaultData.js` before committing it.
- Run `git diff` before every push so you know exactly what's changing.
- Never commit a real `.env` file or any credential file (see `.gitignore`).
- Keep your GitHub account itself secured with a strong password and 2FA — that account is the actual thing protecting your repository and deployment.
- If you ever add collaborators, review changes to `.github/workflows/` before merging them, since workflow files can run arbitrary CI commands.

**Important limitation:** if your GitHub repository is public, its entire contents — including all commit history — are public. Never put a real secret into this project's source code, even one intended "just for the admin panel." There is no way to make frontend code truly private.

---

## GitHub Activity Fix

The GitHub Activity section previously embedded two images from `github-readme-stats.vercel.app` (a community-run, Vercel-hosted service) plus a third-party contribution-graph image. Both were showing as broken images.

**Root cause:** these were plain `<img>` tags pointing at someone else's server. That specific project is extremely popular, runs on Vercel's serverless free tier, and is well documented to suffer intermittent outages, cold-start failures, and rendering errors under load — none of which our site can detect or retry, since a failed image request just renders as a broken-image icon with no fallback. Separately, a real GitHub *contribution calendar* isn't obtainable from a static site at all: it's only exposed via the authenticated GraphQL API, and no token can be safely embedded in a public frontend bundle (see the Security Model above).

**Fix:** the section now calls **GitHub's own official REST API** directly from the browser (`api.github.com/users/{username}`, `.../repos`, `.../events/public`) — no API key required for public data — and renders the results using the site's own design system instead of an external image. This means:
- No dependency on a third party's rendering uptime
- Real, live stats (public repo count, followers/following, aggregated top languages, recent public activity) computed from GitHub's actual data
- Graceful degradation: if the API is briefly rate-limited or unreachable, the section shows a clear message and a direct link to the GitHub profile instead of a broken image
- Results are cached in `sessionStorage` for 15 minutes to stay comfortably under GitHub's 60-requests/hour unauthenticated rate limit

---

## GitHub Pages Routing (`/admin`)

GitHub Pages is static hosting with no server-side rewrites, so a direct visit to `/admin` (or a refresh while on it) would normally 404. This project handles that with the standard static-hosting fallback pattern:

- `npm run build` automatically copies `dist/index.html` to `dist/404.html` (see the `postbuild` script in `package.json`)
- GitHub Pages serves that same app for any unrecognized path
- `src/main.jsx` reads the actual browser URL and renders the Admin Editor when the path ends in `/admin`, or the portfolio otherwise

No routing library is needed for two routes, and no server configuration is required beyond what's already in this repo.

---

## Editing Content Directly (without the admin editor)

Everything in `src/data/defaultData.js` maps 1:1 to a section on the site — editing that file directly works too.

- **Profile picture:** replace `public/avatar-placeholder.svg`, then update `personal.avatarUrl`.
- **Resume:** replace `public/resume.pdf` with a newer export — the Hero/Navbar buttons already point to it via `withBase()` so it resolves correctly under the GitHub Pages subpath.
- **Contact form:** it currently opens the visitor's email client via `mailto:` since a static site can't send email directly. To make it submit without an email client, wire it up to a free tier of Formspree or EmailJS in `src/components/sections/Contact.jsx`.

---

## Robustness Notes

- **Corrupted localStorage:** if the saved admin data is ever unreadable (manual tampering, browser bug, etc.), it's detected, discarded, and the site falls back to `defaultData.js` automatically — the public portfolio never crashes because of bad local state. A one-time notice appears in `/admin` if this happens.
- **localStorage unavailable** (private browsing, disabled storage, storage quota exceeded): the site and the editor both keep working using in-memory state for that session; edits just won't persist across a refresh.
- **Delete/Reset actions** in `/admin` always ask for confirmation first.

---

## Tech Stack

| Layer | Tools |
|---|---|
| Framework | React 18 + Vite 5 |
| Animation | Framer Motion |
| Icons | react-icons (Feather set) |
| SEO | react-helmet-async |
| Content storage | React Context + `localStorage` (admin editor), static JS module (published defaults) |
| GitHub data | GitHub REST API, called directly client-side |
| Deployment | GitHub Actions + GitHub Pages (official `actions/deploy-pages`) |

---

## Known Limitations

- The GitHub Activity section is subject to GitHub's unauthenticated REST API rate limit (60 requests/hour per visitor IP address). This is very unlikely to matter for normal portfolio traffic, and the section degrades gracefully (a link to the profile) if it's ever hit.
- There is no true GitHub contribution-calendar heatmap, because that data requires GitHub's authenticated GraphQL API, which cannot be safely accessed from a public static site without exposing a token. "Recent Public Activity" is shown instead.
- The admin editor provides no real access control by design — see the Security Model section. It is meant to be used only by you, on your own machine.
- The base path in `vite.config.js` was set from the repository name you mentioned, not verified against an actual `git remote` (none existed in this project yet). Confirm it matches your real repository name before deploying.

---

## License

Free to use and modify as your personal portfolio.
