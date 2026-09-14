import { useEffect, useState } from 'react';
import { Helmet } from 'react-helmet-async';
import { AnimatePresence, motion } from 'framer-motion';

import { useData } from './context/DataContext';

// Layout
import Navbar from './components/layout/Navbar';
import Footer from './components/layout/Footer';
import ScrollProgress from './components/layout/ScrollProgress';
import ScrollToTop from './components/layout/ScrollToTop';

// Sections
import Hero from './components/sections/Hero';
import About from './components/sections/About';
import Skills from './components/sections/Skills';
import Experience from './components/sections/Experience';
import Projects from './components/sections/Projects';
import EducationTimeline from './components/sections/EducationTimeline';
import Certifications from './components/sections/Certifications';
import Achievements from './components/sections/Achievements';
import GitHubStats from './components/sections/GitHubStats';
import CurrentlyLearning from './components/sections/CurrentlyLearning';
import CareerGoals from './components/sections/CareerGoals';
import Contact from './components/sections/Contact';

function AmbientBackground() {
  return (
    <div className="ambient-bg" aria-hidden="true">
      <div className="ambient-bg__grid" />
      <div className="ambient-bg__glow ambient-bg__glow--amber" />
      <div className="ambient-bg__glow ambient-bg__glow--cyan" />
    </div>
  );
}

function LoadingScreen() {
  return (
    <motion.div
      key="loader"
      initial={{ opacity: 1 }}
      exit={{ opacity: 0 }}
      transition={{ duration: 0.5, ease: 'easeInOut' }}
      style={{
        position: 'fixed', inset: 0, zIndex: 999, display: 'flex',
        alignItems: 'center', justifyContent: 'center', background: 'var(--bg-primary)',
      }}
    >
      <span style={{ fontFamily: 'var(--font-display)', fontSize: '1rem', color: 'var(--accent-amber)' }}>
        booting_portfolio.sh
        <span className="loader-caret" />
      </span>
    </motion.div>
  );
}

export default function App() {
  const { data } = useData();
  const { personal } = data;
  const [isLoading, setIsLoading] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => setIsLoading(false), 900);
    return () => clearTimeout(timer);
  }, []);

  return (
    <>
      <Helmet>
        <title>{personal.name} — {personal.heroTitle}</title>
      </Helmet>

      <AnimatePresence>{isLoading && <LoadingScreen />}</AnimatePresence>

      <AmbientBackground />

      <a href="#main-content" className="skip-link">Skip to main content</a>

      <ScrollProgress />
      <Navbar />

      <main id="main-content">
        <Hero />
        <About />
        <Skills />
        <Experience />
        <Projects />
        <EducationTimeline />
        <Certifications />
        <GitHubStats />
        <CurrentlyLearning />
        <CareerGoals />
        <Achievements />
        <Contact />
      </main>

      <Footer />
      <ScrollToTop />
    </>
  );
}
