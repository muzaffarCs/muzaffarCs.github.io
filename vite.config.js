import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

/**
 * GitHub Pages base path
 * ------------------------------------------------------------------
 * No .git remote exists in this project yet, so this could NOT be
 * verified against an actual repository — it is set based on the
 * repository name you mentioned ("MAD_Lab").
 *
 * ⚠️ BEFORE DEPLOYING: confirm this matches your actual GitHub repo
 * name EXACTLY (case-sensitive), then update the line below if not.
 *
 *   - Project page  (github.com/muzaffarcs/MAD_Lab)     -> base: '/MAD_Lab/'
 *   - User/org page (repo literally named muzaffarcs.github.io) -> base: '/'
 *
 * Get this wrong and every asset (CSS, JS, resume, images) 404s on
 * the deployed site, even though `npm run dev` works fine locally.
 */
const REPO_NAME = 'MAD_Lab';

export default defineConfig({
  plugins: [react()],
  // `vite build` sets NODE_ENV=production automatically; `vite`/`vite dev` does not.
  base: process.env.NODE_ENV === 'production' ? `/${REPO_NAME}/` : '/',
  build: {
    outDir: 'dist',
    sourcemap: false,
    rollupOptions: {
      output: {
        manualChunks: {
          vendor: ['react', 'react-dom'],
          motion: ['framer-motion'],
        },
      },
    },
  },
  server: {
    port: 5173,
    open: true,
  },
});
