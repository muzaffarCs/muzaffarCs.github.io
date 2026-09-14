import { motion } from 'framer-motion';
import './Timeline.css';

export default function Timeline({ entries }) {
  return (
    <ol className="timeline">
      {entries.map((entry, i) => (
        <motion.li
          key={`${entry.title}-${i}`}
          className="timeline__entry"
          initial={{ opacity: 0, x: -16 }}
          whileInView={{ opacity: 1, x: 0 }}
          viewport={{ once: true, amount: 0.4 }}
          transition={{ duration: 0.5, delay: i * 0.08, ease: [0.16, 1, 0.3, 1] }}
        >
          <span className="timeline__dot" aria-hidden="true" />
          <div className="timeline__meta"><span>{entry.date}</span></div>
          <h3 className="timeline__title">{entry.title}</h3>
          {entry.org && <span className="timeline__org">{entry.org}</span>}
          {entry.detail && <p className="timeline__detail">{entry.detail}</p>}
          {entry.points && (
            <ul className="timeline__points">
              {entry.points.map((point, idx) => <li key={idx}>{point}</li>)}
            </ul>
          )}
        </motion.li>
      ))}
    </ol>
  );
}
