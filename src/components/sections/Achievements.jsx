import { motion } from 'framer-motion';
import { FiAward } from 'react-icons/fi';
import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './Achievements.css';

export default function Achievements() {
  const { data } = useData();
  const { achievements } = data;

  return (
    <Section id="achievements" eyebrow="10 · Achievements" title="Achievements & Leadership">
      <div className="achievements__grid">
        {achievements.map((item, i) => (
          <motion.div key={item.title} initial={{ opacity: 0, y: 16 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true, amount: 0.4 }} transition={{ duration: 0.45, delay: i * 0.07 }}>
            <Card>
              <span className="achievements__icon"><FiAward size={18} /></span>
              <h3 className="achievements__title">{item.title}</h3>
              <span className="achievements__org">{item.org}</span>
              <p className="achievements__detail">{item.detail}</p>
            </Card>
          </motion.div>
        ))}
      </div>
    </Section>
  );
}
