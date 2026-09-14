import { motion } from 'framer-motion';
import { FiCode, FiLayout, FiServer, FiDatabase, FiTerminal, FiGitBranch, FiBox, FiWifi } from 'react-icons/fi';

import Section from '../ui/Section';
import Card from '../ui/Card';
import Badge from '../ui/Badge';
import { useData } from '../../context/DataContext';
import './Skills.css';

const ICON_MAP = {
  code: FiCode, layout: FiLayout, server: FiServer, database: FiDatabase,
  terminal: FiTerminal, 'git-branch': FiGitBranch, box: FiBox, network: FiWifi,
};

export default function Skills() {
  const { data } = useData();
  const { skillCategories } = data;

  return (
    <Section
      id="skills"
      eyebrow="02 · Skills"
      title="Technical Skills"
      subtitle="A stack spanning core programming fundamentals, full-stack web development, and the Linux/DevOps tooling I'm actively building on."
    >
      <div className="skills__grid">
        {skillCategories.map((cat, i) => {
          const Icon = ICON_MAP[cat.icon] ?? FiCode;
          return (
            <motion.div key={cat.category} initial={{ opacity: 0, y: 20 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true, amount: 0.3 }} transition={{ duration: 0.5, delay: (i % 4) * 0.06 }}>
              <Card>
                <div className="skills__card-header">
                  <span className="skills__icon"><Icon size={19} /></span>
                  <h3 className="skills__category-title">{cat.category}</h3>
                </div>
                <div className="skills__tags">
                  {cat.skills.map((skill) => <Badge key={skill}>{skill}</Badge>)}
                </div>
              </Card>
            </motion.div>
          );
        })}
      </div>
    </Section>
  );
}
