import Section from '../ui/Section';
import Timeline from '../ui/Timeline';
import { useData } from '../../context/DataContext';

export default function EducationTimeline() {
  const { data } = useData();
  const entries = data.education.map((edu) => ({
    date: `${edu.start} — ${edu.end}`,
    title: edu.degree,
    org: edu.institution,
    detail: edu.detail,
  }));

  return (
    <Section id="education" eyebrow="05 · Education" title="Education Timeline" subtitle="From matriculation to an ongoing Computer Science degree.">
      <Timeline entries={entries} />
    </Section>
  );
}
