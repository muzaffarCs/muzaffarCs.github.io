import { useEffect, useState } from 'react';

export function useTypingEffect(
  lines,
  { typingSpeed = 45, deletingSpeed = 25, pauseDuration = 1400, loop = true } = {}
) {
  const prefersReducedMotion =
    typeof window !== 'undefined' &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const [lineIndex, setLineIndex] = useState(0);
  const [text, setText] = useState(prefersReducedMotion ? lines[0] ?? '' : '');
  const [phase, setPhase] = useState('typing');

  useEffect(() => {
    if (prefersReducedMotion || !lines.length) return undefined;
    const current = lines[lineIndex];
    let timeout;

    if (phase === 'typing') {
      if (text.length < current.length) {
        timeout = setTimeout(() => setText(current.slice(0, text.length + 1)), typingSpeed);
      } else {
        timeout = setTimeout(() => setPhase('pausing'), pauseDuration);
      }
    } else if (phase === 'pausing') {
      const isLast = lineIndex === lines.length - 1;
      if (!loop && isLast) return undefined;
      timeout = setTimeout(() => setPhase('deleting'), 200);
    } else if (phase === 'deleting') {
      if (text.length > 0) {
        timeout = setTimeout(() => setText(current.slice(0, text.length - 1)), deletingSpeed);
      } else {
        setLineIndex((i) => (i + 1) % lines.length);
        setPhase('typing');
      }
    }

    return () => clearTimeout(timeout);
  }, [text, phase, lineIndex, lines, loop, typingSpeed, deletingSpeed, pauseDuration, prefersReducedMotion]);

  return { text, isDeleting: phase === 'deleting' };
}
