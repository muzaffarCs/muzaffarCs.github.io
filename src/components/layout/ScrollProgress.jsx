import { motion, useScroll, useSpring } from 'framer-motion';

export default function ScrollProgress() {
  const { scrollYProgress } = useScroll();
  const scaleX = useSpring(scrollYProgress, { stiffness: 120, damping: 24, restDelta: 0.001 });
  return (
    <motion.div
      style={{
        scaleX, position: 'fixed', top: 0, left: 0, right: 0, height: '3px',
        transformOrigin: '0%', background: 'linear-gradient(90deg, var(--accent-amber), var(--accent-cyan))', zIndex: 1100,
      }}
      aria-hidden="true"
    />
  );
}
