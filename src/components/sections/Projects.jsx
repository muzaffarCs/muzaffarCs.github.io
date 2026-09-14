import { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { FiGithub, FiExternalLink } from 'react-icons/fi';

import Section from '../ui/Section';
import Card from '../ui/Card';
import Badge from '../ui/Badge';
import Button from '../ui/Button';
import { useData } from '../../context/DataContext';
import './Projects.css';

export default function Projects() {
  const { data } = useData();
  const { projects, projectCategories } = data;
  const [activeFilter, setActiveFilter] = useState('All');

  const visibleProjects = activeFilter === 'All' ? projects : projects.filter((p) => p.category === activeFilter);

  return (
    <Section id="projects" eyebrow="04 · Projects" title="Featured Projects" subtitle="A mix of full-stack, desktop, and applied machine learning work.">
      <div className="projects__filters" role="tablist" aria-label="Filter projects by category">
        {projectCategories.map((cat) => (
          <button
            key={cat}
            type="button"
            role="tab"
            aria-selected={activeFilter === cat}
            className={`projects__filter-btn ${activeFilter === cat ? 'is-active' : ''}`}
            onClick={() => setActiveFilter(cat)}
          >
            {cat}
          </button>
        ))}
      </div>

      <div className="projects__grid">
        <AnimatePresence mode="popLayout">
          {visibleProjects.map((project) => (
            <motion.div key={project.title} layout initial={{ opacity: 0, y: 18 }} animate={{ opacity: 1, y: 0 }} exit={{ opacity: 0, y: -12 }} transition={{ duration: 0.35, ease: [0.16, 1, 0.3, 1] }}>
              <Card className="project-card">
                <Badge className="project-card__category">{project.category}</Badge>
                <h3 className="project-card__title">{project.title}</h3>
                <p className="project-card__desc">{project.description}</p>
                <ul className="project-card__features">
                  {project.features.map((feature) => <li key={feature}>{feature}</li>)}
                </ul>
                <div className="project-card__tags">
                  {project.tech.map((t) => <Badge key={t}>{t}</Badge>)}
                </div>
                <div className="project-card__actions">
                  <Button href={project.github} variant="secondary" size="sm" icon={FiGithub}>Code</Button>
                  <Button href={project.demo || '#'} variant="ghost" size="sm" icon={FiExternalLink} title={project.demo ? 'View live demo' : 'Live demo coming soon'}>
                    {project.demo ? 'Live Demo' : 'Demo Soon'}
                  </Button>
                </div>
              </Card>
            </motion.div>
          ))}
        </AnimatePresence>
      </div>
    </Section>
  );
}
