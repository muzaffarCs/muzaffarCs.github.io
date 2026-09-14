/**
 * withBase(path)
 * ------------------------------------------------------------------
 * GitHub Pages project sites are served from a subpath
 * (e.g. https://muzaffarcs.github.io/MAD_Lab/), not the domain root.
 * Vite's `base` config (see vite.config.js) handles this automatically
 * for anything imported as a module, but files referenced at runtime
 * from `public/` (resume.pdf, favicon.svg, etc.) are NOT rewritten
 * automatically — they must be prefixed with `import.meta.env.BASE_URL`
 * manually. This helper does that consistently everywhere.
 *
 * Usage: withBase('resume.pdf')  ->  '/resume.pdf' in dev,
 *                                     '/MAD_Lab/resume.pdf' in prod build.
 *
 * Pass paths WITHOUT a leading slash.
 * ------------------------------------------------------------------
 */
export function withBase(path) {
  const base = import.meta.env.BASE_URL || '/';
  const cleanPath = path.replace(/^\/+/, '');
  return `${base}${cleanPath}`;
}
