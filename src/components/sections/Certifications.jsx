import { motion } from 'framer-motion';
import { FiExternalLink } from 'react-icons/fi';
import Section from '../ui/Section';
import Card from '../ui/Card';
import Badge from '../ui/Badge';
import { useData } from '../../context/DataContext';
import './Certifications.css';

/** Certifications, shown as cards so richer Coursera-style metadata (credential ID, skills, verification link) has room to display. */
export default function Certifications() {
  const { data } = useData();
  const { certifications } = data;

  return (
    <Section
      id="certifications"
      eyebrow="06 · Certifications"
      title="Certifications"
      subtitle="Practical courses completed alongside formal education, including recent Coursera coursework."
    >
      <div className="certs__grid">
        {certifications.map((cert, i) => (
          <motion.div key={cert.title} initial={{ opacity: 0, y: 16 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true, amount: 0.3 }} transition={{ duration: 0.45, delay: i * 0.06 }}>
            <Card>
              <div className="cert-card__top">
                <div>
                  <h3 className="cert-card__title">{cert.title}</h3>
                  <span className="cert-card__issuer">
                    {cert.issuer}{cert.platform ? ` · ${cert.platform}` : ''}
                  </span>
                </div>
                <span className="cert-card__date">{cert.date}</span>
              </div>

              {cert.detail && <p className="cert-card__detail">{cert.detail}</p>}

              {cert.skills && cert.skills.length > 0 && (
                <div className="cert-card__skills">
                  {cert.skills.map((skill) => <Badge key={skill}>{skill}</Badge>)}
                </div>
              )}

              <div className="cert-card__footer">
                {cert.credentialId && (
                  <span className="cert-card__credential-id">Credential ID: {cert.credentialId}</span>
                )}
                {cert.credentialUrl && (
                  <a href={cert.credentialUrl} target="_blank" rel="noopener noreferrer" className="cert-card__link">
                    Show credential <FiExternalLink size={13} />
                  </a>
                )}
              </div>
            </Card>
          </motion.div>
        ))}
      </div>
    </Section>
  );
}
