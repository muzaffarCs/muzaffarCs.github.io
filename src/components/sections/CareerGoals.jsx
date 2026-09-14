import { motion } from 'framer-motion';
import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './CareerGoals.css';

export default function CareerGoals() {
  const { data } = useData();
  const { about } = data;

  return (
    <Section id="goals" eyebrow="09 · Direction" title="Career Goals">
      <motion.div initial={{ opacity: 0, y: 20 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true, amount: 0.4 }} transition={{ duration: 0.5 }}>
        <Card hoverable={false} className="career-goals__panel">
          <span className="career-goals__quote-mark" aria-hidden="true">&gt;_</span>
          <p className="career-goals__text">{about.careerGoal}</p>
        </Card>
      </motion.div>
    </Section>
  );
}
