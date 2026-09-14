import { motion } from 'framer-motion';

export default function Section({ id, eyebrow, title, subtitle, children, className = '' }) {
  return (
    <section id={id} className={`section ${className}`} aria-labelledby={`${id}-title`}>
      <div className="container">
        {(eyebrow || title || subtitle) && (
          <motion.div
            className="section-header"
            initial={{ opacity: 0, y: 24 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, amount: 0.3 }}
            transition={{ duration: 0.6, ease: [0.16, 1, 0.3, 1] }}
          >
            {eyebrow && <span className="section-eyebrow">{eyebrow}</span>}
            {title && <h2 id={`${id}-title`} className="section-title">{title}</h2>}
            {subtitle && <p className="section-subtitle">{subtitle}</p>}
          </motion.div>
        )}
        <div>{children}</div>
      </div>
    </section>
  );
}
