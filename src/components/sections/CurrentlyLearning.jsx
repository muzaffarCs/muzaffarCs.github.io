import { motion } from 'framer-motion';
import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './CurrentlyLearning.css';

export default function CurrentlyLearning() {
  const { data } = useData();
  const { currentlyLearning } = data;

  return (
    <Section id="learning" eyebrow="08 · In Progress" title="What I'm Currently Learning" subtitle="Skills I'm actively deepening as I move toward DevOps and platform engineering.">
      <div className="learning__grid">
        {currentlyLearning.map((item, i) => (
          <motion.div key={item.title} initial={{ opacity: 0, y: 16 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true, amount: 0.4 }} transition={{ duration: 0.45, delay: i * 0.07 }}>
            <Card>
              <h3 className="learning__card-title"><span className="learning__pulse" aria-hidden="true" />{item.title}</h3>
              <p className="learning__note">{item.note}</p>
            </Card>
          </motion.div>
        ))}
      </div>
    </Section>
  );
}
