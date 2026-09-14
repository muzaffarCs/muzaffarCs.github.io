import React from 'react';
import ReactDOM from 'react-dom/client';
import { HelmetProvider } from 'react-helmet-async';

import App from './App.jsx';
import AdminPanel from './components/admin/AdminPanel.jsx';
import { ThemeProvider } from './context/ThemeContext.jsx';
import { DataProvider } from './context/DataContext.jsx';

import './styles/variables.css';
import './styles/globals.css';
import './styles/animations.css';

/**
 * Minimal pathname-based routing — no router dependency needed for two routes.
 *
 * GitHub Pages is static hosting with no server-side rewrites, so a direct
 * visit to /admin (or /MAD_Lab/admin under a project subpath) would normally
 * 404. The build's postbuild step copies dist/index.html to dist/404.html,
 * so GitHub Pages serves this same app for any unknown path — we just need
 * to read the *actual* browser URL here and pick the right view.
 *
 * We check with endsWith() rather than an exact match so this works whether
 * the site is served from the domain root ("/admin") or a GitHub Pages
 * project subpath ("/MAD_Lab/admin").
 */
const currentPath = window.location.pathname.replace(/\/+$/, '');
const isAdminRoute = currentPath.endsWith('/admin');

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <HelmetProvider>
      <DataProvider>
        <ThemeProvider>{isAdminRoute ? <AdminPanel /> : <App />}</ThemeProvider>
      </DataProvider>
    </HelmetProvider>
  </React.StrictMode>
);
