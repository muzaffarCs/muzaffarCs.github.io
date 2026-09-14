import { motion } from 'framer-motion';
import { FiArrowRight, FiDownload } from 'react-icons/fi';

import { useData } from '../../context/DataContext';
import { useTypingEffect } from '../../hooks/useTypingEffect';
import { withBase } from '../../utils/withBase';
import Button from '../ui/Button';
import './Hero.css';

const TYPED_LINES = ['whoami', 'cat interests.txt', 'echo $CAREER_GOAL'];

/** Hero section: terminal-window signature element with a typing animation. */
export default function Hero() {
  const { data } = useData();
  const { personal, heroTagline } = data;
  const { text } = useTypingEffect(TYPED_LINES, { pauseDuration: 1600 });

  return (
    <section id="hero" className="hero">
      <div className="container hero__grid">
        <div>
          <motion.div className="hero__eyebrow" initial={{ opacity: 0, y: 10 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.5 }}>
            <span className="hero__eyebrow-dot" aria-hidden="true" />
            Available for internships &amp; junior roles
          </motion.div>

          <motion.h1 className="hero__name" initial={{ opacity: 0, y: 16 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.1 }}>
            {personal.name}
          </motion.h1>

          <motion.p className="hero__title" initial={{ opacity: 0, y: 16 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.2 }}>
            {personal.heroTitle}
          </motion.p>

          <motion.p className="hero__tagline" initial={{ opacity: 0, y: 16 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.3 }}>
            {heroTagline}
          </motion.p>

          <motion.div className="hero__actions" initial={{ opacity: 0, y: 16 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.4 }}>
            <Button href={withBase(personal.resumeUrl)} variant="primary" icon={FiDownload} download>
              Download Resume
            </Button>
            <Button href="#contact" variant="secondary" icon={FiArrowRight} iconPosition="right">
              Get in Touch
            </Button>
          </motion.div>
        </div>

        <motion.div
          className="hero__terminal"
          initial={{ opacity: 0, scale: 0.96, y: 20 }}
          animate={{ opacity: 1, scale: 1, y: 0 }}
          transition={{ duration: 0.7, delay: 0.3, ease: [0.16, 1, 0.3, 1] }}
          aria-hidden="true"
        >
          <div className="hero__terminal-bar">
            <span className="hero__terminal-dot hero__terminal-dot--red" />
            <span className="hero__terminal-dot hero__terminal-dot--yellow" />
            <span className="hero__terminal-dot hero__terminal-dot--green" />
            <span className="hero__terminal-title">muzaffar@portfolio: ~</span>
          </div>
          <div className="hero__terminal-body">
            <div className="hero__terminal-line"><span className="hero__terminal-prompt">$</span><span>whoami</span></div>
            <p className="hero__terminal-output">muzaffar_ali — CS student, Islamabad</p>

            <div className="hero__terminal-line"><span className="hero__terminal-prompt">$</span><span>cat interests.txt</span></div>
            <p className="hero__terminal-output">Linux · DevOps · Cloud · Open Source</p>

            <div className="hero__terminal-line">
              <span className="hero__terminal-prompt">$</span>
              <span className="hero__terminal-typing">{text}<span className="loader-caret" /></span>
            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
}
