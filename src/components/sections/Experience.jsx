import Section from '../ui/Section';
import Timeline from '../ui/Timeline';
import { useData } from '../../context/DataContext';

export default function Experience() {
  const { data } = useData();
  const entries = data.experience.map((job) => ({
    date: `${job.start} — ${job.end}`,
    title: job.role,
    org: `${job.org} · ${job.location} · ${job.type}`,
    points: job.points,
  }));

  return (
    <Section
      id="experience"
      eyebrow="03 · Experience"
      title="Work & Leadership Experience"
      subtitle="Hands-on frontend work alongside organizational leadership — both shaped how I collaborate and take ownership."
    >
      <Timeline entries={entries} />
    </Section>
  );
}
