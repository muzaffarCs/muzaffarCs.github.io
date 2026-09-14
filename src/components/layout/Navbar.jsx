import { useState } from 'react';
import { AnimatePresence, motion } from 'framer-motion';
import { FiMenu, FiX } from 'react-icons/fi';

import { useData } from '../../context/DataContext';
import { useScrollSpy } from '../../hooks/useScrollSpy';
import { withBase } from '../../utils/withBase';
import ThemeToggle from './ThemeToggle';
import Button from '../ui/Button';
import './Navbar.css';

/** Sticky top navigation with scroll-spy active states and a mobile hamburger menu. */
export default function Navbar() {
  const { data } = useData();
  const { navLinks, personal } = data;
  const [menuOpen, setMenuOpen] = useState(false);
  const sectionIds = navLinks.map((link) => link.href.replace('#', ''));
  const activeId = useScrollSpy(sectionIds);

  const closeMenu = () => setMenuOpen(false);

  return (
    <header className="navbar">
      <div className="container navbar__inner">
        <a href="#hero" className="navbar__logo" aria-label={`${personal.name} — home`}>
          <span>~/</span>muzaffar-ali
        </a>

        <nav className="navbar__links" aria-label="Primary">
          {navLinks.map((link) => (
            <a
              key={link.href}
              href={link.href}
              className={`navbar__link ${activeId === link.href.replace('#', '') ? 'is-active' : ''}`}
            >
              {link.label}
            </a>
          ))}
        </nav>

        <div className="navbar__actions">
          <ThemeToggle />
          <Button href={withBase(personal.resumeUrl)} variant="primary" size="sm" download>
            Resume
          </Button>
          <button
            type="button"
            className="navbar__burger"
            onClick={() => setMenuOpen((o) => !o)}
            aria-label={menuOpen ? 'Close menu' : 'Open menu'}
            aria-expanded={menuOpen}
          >
            {menuOpen ? <FiX size={18} /> : <FiMenu size={18} />}
          </button>
        </div>
      </div>

      <AnimatePresence>
        {menuOpen && (
          <motion.nav
            className="navbar__mobile-menu"
            aria-label="Mobile"
            initial={{ opacity: 0, y: -12 }}
            animate={{ opacity: 1, y: 0 }}
            exit={{ opacity: 0, y: -12 }}
            transition={{ duration: 0.22 }}
          >
            {navLinks.map((link) => (
              <a
                key={link.href}
                href={link.href}
                onClick={closeMenu}
                className={`navbar__mobile-link ${activeId === link.href.replace('#', '') ? 'is-active' : ''}`}
              >
                {link.label}
              </a>
            ))}
          </motion.nav>
        )}
      </AnimatePresence>
    </header>
  );
}
