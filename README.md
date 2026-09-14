# Muzaffar Ali — Developer Portfolio

A modern, responsive, dark/light-mode developer portfolio built with **React + Vite**, deployed as a **fully static site on GitHub Pages**.

The portfolio includes a **Local Admin Editor** that allows personal content to be edited in the browser using `localStorage`. It is a browser-based editing convenience tool, **not a secure online CMS**.

**Live Portfolio:** https://muzaffarcs.github.io/

**GitHub Repository:** https://github.com/muzaffarCs/muzaffarCs.github.io

---

## Architecture

```text
GitHub Repository
        │
        ▼
GitHub Actions
   npm ci → npm run build
        │
        ▼
     dist/
        │
        ▼
GitHub Pages
        │
        ▼
  Static Portfolio
        │
        └──────► /admin
                    │
                    ▼
               localStorage
            (browser-specific edits)
```

There is **no backend, database, or server-side authentication** in this project.

Everything is compiled into static files and served through GitHub Pages.

The published portfolio uses:

```text
src/data/defaultData.js
```

as its source of truth.

The Local Admin Editor stores temporary editing changes in the browser's `localStorage`. Those changes do **not** automatically modify the GitHub repository or affect other visitors.

---

## Features

* Responsive developer portfolio
* Dark/Light mode
* Framer Motion animations
* Glassmorphism-inspired UI
* Terminal-style Hero section
* Typing animation
* Sticky responsive navigation
* Scroll-spy navigation
* Mobile hamburger menu
* Filterable project cards
* Git-log style Experience and Education timelines
* Certification cards with:

  * Issuer
  * Credential ID
  * Verification link
  * Skill tags
* GitHub statistics section
* GitHub public activity section
* Working downloadable resume
* Local Admin Editor at `/admin`
* Editable portfolio content
* SEO meta tags
* Reduced-motion support
* Keyboard focus states
* Semantic HTML
* GitHub Pages SPA fallback through `404.html`
* Automated deployment using GitHub Actions

---

## Project Structure

```text
portfolio/
│
├── .github/
│   └── workflows/
│       └── deploy.yml              # GitHub Pages deployment workflow
│
├── public/
│   ├── favicon.svg
│   ├── avatar-placeholder.svg
│   └── resume.pdf
│
├── src/
│   ├── components/
│   │   ├── admin/                  # Local Admin Editor
│   │   │   ├── AdminPanel
│   │   │   ├── ArrayEditor
│   │   │   ├── ObjectEditor
│   │   │   └── schemas
│   │   │
│   │   ├── layout/                # Navbar, Footer, ThemeToggle, etc.
│   │   │
│   │   ├── sections/              # Portfolio sections
│   │   │   ├── Hero
│   │   │   ├── About
│   │   │   ├── Skills
│   │   │   ├── Experience
│   │   │   ├── Projects
│   │   │   ├── GitHubStats
│   │   │   └── ...
│   │   │
│   │   └── ui/                    # Reusable UI components
│   │       ├── Section
│   │       ├── Card
│   │       ├── Button
│   │       ├── Badge
│   │       └── Timeline
│   │
│   ├── context/
│   │   ├── ThemeContext.jsx
│   │   └── DataContext.jsx         # Runtime content store
│   │
│   ├── data/
│   │   └── defaultData.js          # Published content source of truth
│   │
│   ├── utils/
│   │   └── withBase.js              # Public asset path helper
│   │
│   ├── App.jsx
│   └── main.jsx                     # "/" → App, "/admin" → AdminPanel
│
├── index.html
├── package.json
└── vite.config.js                   # Vite configuration
```

---

## Local Development

Clone the repository:

```bash
git clone https://github.com/muzaffarCs/muzaffarCs.github.io.git
cd muzaffarCs.github.io
```

Install dependencies:

```bash
npm install
```

Start the development server:

```bash
npm run dev
```

The portfolio will normally be available at:

```text
http://localhost:5173/
```

The Local Admin Editor is available at:

```text
http://localhost:5173/admin
```

### Production Build

```bash
npm run build
```

The production files are generated in:

```text
dist/
```

The build also creates:

```text
dist/404.html
```

which allows the `/admin` path to work correctly on GitHub Pages.

### Preview Production Build

```bash
npm run preview
```

---

## GitHub Pages Deployment

The portfolio is deployed automatically using **GitHub Actions** and **GitHub Pages**.

### Repository

```text
https://github.com/muzaffarCs/muzaffarCs.github.io
```

Because this is a GitHub **user site repository**, the Vite configuration uses:

```js
base: '/'
```

The site is therefore served from the domain root:

```text
https://muzaffarcs.github.io/
```

It does **not** use a repository subpath such as:

```text
https://muzaffarcs.github.io/MAD_Lab/
```

### GitHub Pages Settings

In the repository:

```text
Settings
   → Pages
   → Build and deployment
   → Source
   → GitHub Actions
```

The repository is already configured to use GitHub Actions for deployment.

### Deployment Workflow

The workflow is located at:

```text
.github/workflows/deploy.yml
```

When code is pushed to `main`, GitHub Actions:

1. Checks out the repository
2. Sets up Node.js
3. Installs dependencies using `npm ci`
4. Runs `npm run build`
5. Uploads the generated `dist/` directory
6. Deploys the artifact to GitHub Pages

The deployment uses GitHub's official Pages Actions:

```text
actions/configure-pages
actions/upload-pages-artifact
actions/deploy-pages
```

No third-party deployment action is required.

### Normal Deployment

After making changes:

```bash
git add .
git commit -m "Update portfolio"
git push
```

Pushing to `main` automatically triggers the deployment workflow.

Deployment progress can be monitored from:

```text
GitHub Repository
→ Actions
→ Deploy to GitHub Pages
```

---

## Admin Editor

The portfolio includes a browser-based Local Admin Editor at:

```text
/admin
```

For example:

```text
https://muzaffarcs.github.io/admin
```

The editor is intended for personal use and allows portfolio content to be edited through a graphical interface.

### How It Works

1. Open `/admin`.
2. Edit portfolio information.
3. Click **Save Section**.
4. Changes are stored in the browser's `localStorage`.
5. Use **View Public Site** to preview the changes in the same browser.
6. When satisfied, use **Export Data File**.
7. Replace:

```text
src/data/defaultData.js
```

with the exported file.
8. Review the changes.
9. Commit and push the updated data file.

For example:

```bash
git diff src/data/defaultData.js
```

Then:

```bash
git add src/data/defaultData.js
git commit -m "Update portfolio content"
git push
```

GitHub Actions will automatically rebuild and redeploy the portfolio.

### Important

Changes made directly inside `/admin` are **not automatically published**.

The repository version of:

```text
src/data/defaultData.js
```

is the actual source of truth for the published portfolio.

---

## Security Model

### Public Website

The public website is:

* Fully static
* Publicly accessible
* Hosted on GitHub Pages
* Without a backend
* Without a database
* Without server-side authentication
* Without server-side secrets

### Admin Editor

The Admin Editor is intentionally **not a secure CMS**.

It:

* Runs entirely in the browser
* Uses `localStorage`
* Has no server-side authentication
* Does not protect data using encryption
* Does not modify the GitHub repository automatically

Anyone who knows the `/admin` URL can open the editor.

However, changes made by another visitor only affect **that visitor's browser**. They do not change the published portfolio or another visitor's browser.

### No Password Gate

There is intentionally no password system protecting `/admin`.

A password embedded in a static frontend application would not provide meaningful security because the password would ultimately be present in code delivered to the browser.

The project therefore treats `/admin` honestly as a **local editing convenience tool**, rather than pretending it is a secure administration system.

---

## Using the Admin Editor Safely

The following rules should be followed when using `/admin`:

* Prefer using it on your own computer.
* Do not use it on public or shared computers.
* Never enter passwords, API keys, access tokens, or other secrets into portfolio fields.
* Do not store private information in portfolio content.
* Remember that `localStorage` is not encrypted or secure storage.
* Review the exported `defaultData.js` before committing it.
* Run `git diff` before pushing changes.
* Never commit a real `.env` file or credential file.
* Keep your GitHub account protected with a strong password and 2FA.
* Review `.github/workflows/` carefully before accepting workflow changes from collaborators.

If the GitHub repository is public, its files and commit history are publicly accessible. Never place real secrets in the repository.

---

## GitHub Integration

The GitHub section uses the **GitHub REST API** to display public GitHub information.

The portfolio retrieves public information such as:

* Public repository count
* Followers
* Following
* Top programming languages used across repositories
* Recent public GitHub activity

The GitHub API is accessed directly from the browser for public data and does not require a personal GitHub access token.

The portfolio does not store or expose a GitHub API token.

### Graceful Failure

If GitHub's API is temporarily unavailable, unreachable, or rate-limited, the GitHub section is designed to fail gracefully rather than displaying a broken external image.

Visitors can still use the direct GitHub profile link:

```text
https://github.com/muzaffarCs
```

### API Rate Limits

Unauthenticated GitHub REST API requests are subject to GitHub's rate limits.

The portfolio only requests public information needed for the GitHub section and does not require authenticated API access.

---

## GitHub Pages Routing

GitHub Pages provides static hosting and does not perform server-side SPA rewrites.

The project therefore uses a simple static fallback.

During the production build:

```text
dist/index.html
```

is copied to:

```text
dist/404.html
```

GitHub Pages can then serve the application for an unrecognized path.

The application checks the browser URL in:

```text
src/main.jsx
```

and renders:

```text
/       → Portfolio
/admin  → Local Admin Editor
```

This allows `/admin` to work without adding a routing library.

---

## Editing Content Directly

Portfolio content can also be edited directly without using the Admin Editor.

The main content source is:

```text
src/data/defaultData.js
```

### Profile Picture

Replace:

```text
public/avatar-placeholder.svg
```

and update the corresponding avatar value in:

```text
src/data/defaultData.js
```

### Resume

Replace:

```text
public/resume.pdf
```

with the updated resume.

The portfolio already handles the public asset path through `withBase()`.

### Contact Form

The contact section currently uses `mailto:`.

This means clicking the contact action opens the visitor's configured email client.

A backend or external form service would be required if the portfolio needs to submit messages directly without opening an email client.

---

## Robustness

### Corrupted localStorage

If saved admin data becomes unreadable, the application detects the problem and falls back to:

```text
src/data/defaultData.js
```

This prevents corrupted browser data from breaking the portfolio.

### localStorage Unavailable

If browser storage is unavailable because of:

* Private browsing restrictions
* Disabled storage
* Storage quota limitations
* Browser-specific restrictions

the application can continue using in-memory state for the current session.

Changes may not survive a page refresh in that situation.

### Admin Delete/Reset Actions

Destructive actions in the Admin Editor require confirmation before proceeding.

---

## Tech Stack

| Layer              | Technology                    |
| ------------------ | ----------------------------- |
| Framework          | React 18                      |
| Build Tool         | Vite 5                        |
| Animation          | Framer Motion                 |
| Icons              | react-icons                   |
| SEO                | react-helmet-async            |
| Content Management | React Context + localStorage  |
| Published Content  | Static JavaScript data        |
| GitHub Integration | GitHub REST API               |
| Hosting            | GitHub Pages                  |
| CI/CD              | GitHub Actions                |
| Deployment         | Official GitHub Pages Actions |
| Styling            | CSS                           |

---

## Known Limitations

### Static Architecture

The portfolio does not have:

* A backend
* A database
* Server-side authentication
* Server-side sessions
* A traditional CMS

The project is intentionally designed as a static portfolio.

### Local Admin Editor

The `/admin` page is not a secure CMS.

Anyone who knows the URL can open it, and browser `localStorage` should never be considered secure storage.

### GitHub API

The GitHub section depends on GitHub's public REST API.

If GitHub's API is unavailable or rate-limited, live GitHub information may temporarily fail to load.

### Contact Form

The contact functionality currently relies on the visitor's email client through `mailto:` rather than a server-side form-processing service.

### Public Repository

Because the repository is public, its source code and commit history are publicly accessible.

No passwords, API keys, tokens, or other secrets should ever be committed to the repository.

---

## Development Workflow

A typical workflow for making portfolio changes is:

```bash
# 1. Make changes

# 2. Check the project locally
npm run dev

# 3. Build the production version
npm run build

# 4. Preview the production build if needed
npm run preview

# 5. Check changed files
git status

# 6. Review the actual changes
git diff

# 7. Commit
git add .
git commit -m "Update portfolio"

# 8. Push
git push
```

GitHub Actions then automatically deploys the new version to GitHub Pages.

---

## Live Links

**Portfolio**

https://muzaffarcs.github.io/

**GitHub**

https://github.com/muzaffarCs

**Repository**

https://github.com/muzaffarCs/muzaffarCs.github.io

---

## License

Free to use and modify as a personal portfolio project.
