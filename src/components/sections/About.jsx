import Section from '../ui/Section';
import Card from '../ui/Card';
import { useData } from '../../context/DataContext';
import './About.css';

export default function About() {
  const { data } = useData();
  const { about, education, languages } = data;
  const currentEducation = education[0];

  return (
    <Section id="about" eyebrow="01 · About" title="About Me">
      <div className="about__grid">
        <div className="about__text">
          {about.summary.map((paragraph, i) => <p key={i}>{paragraph}</p>)}
        </div>

        <Card className="about__facts" hoverable={false}>
          <div>
            <p className="about__fact-label">Currently Studying</p>
            <p className="about__fact-value">{currentEducation.degree}</p>
          </div>
          <div>
            <p className="about__fact-label">University</p>
            <p className="about__fact-value">{currentEducation.institution}</p>
          </div>
          <div>
            <p className="about__fact-label">CGPA</p>
            <p className="about__fact-value">3.2 / 4.00</p>
          </div>
          <div>
            <p className="about__fact-label">Languages</p>
            <p className="about__fact-value">{languages.map((l) => l.name).join(', ')}</p>
          </div>
        </Card>
      </div>
    </Section>
  );
}
