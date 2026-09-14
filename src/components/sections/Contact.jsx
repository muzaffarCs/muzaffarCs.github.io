import { useState } from 'react';
import { FiMail, FiPhone, FiMapPin, FiSend, FiGithub, FiLinkedin } from 'react-icons/fi';

import Section from '../ui/Section';
import Card from '../ui/Card';
import Button from '../ui/Button';
import { useData } from '../../context/DataContext';
import './Contact.css';

export default function Contact() {
  const { data } = useData();
  const { personal } = data;
  const [form, setForm] = useState({ name: '', email: '', message: '' });
  const [submitted, setSubmitted] = useState(false);

  const handleChange = (e) => setForm((f) => ({ ...f, [e.target.name]: e.target.value }));

  const handleSubmit = (e) => {
    e.preventDefault();
    const subject = encodeURIComponent(`Portfolio contact from ${form.name}`);
    const body = encodeURIComponent(`${form.message}\n\n— ${form.name} (${form.email})`);
    window.location.href = `mailto:${personal.email}?subject=${subject}&body=${body}`;
    setSubmitted(true);
  };

  return (
    <Section id="contact" eyebrow="11 · Contact" title="Let's Talk" subtitle="Open to internships, junior roles, and collaboration on Linux/DevOps-adjacent projects.">
      <div className="contact__grid">
        <div className="contact__info">
          <Card className="contact__info-item">
            <span className="contact__info-icon"><FiMail size={17} /></span>
            <div><p className="contact__info-label">Email</p><a href={`mailto:${personal.email}`} className="contact__info-value">{personal.email}</a></div>
          </Card>
          <Card className="contact__info-item">
            <span className="contact__info-icon"><FiPhone size={17} /></span>
            <div><p className="contact__info-label">Phone</p><a href={`tel:${personal.phone.replace(/\s/g, '')}`} className="contact__info-value">{personal.phone}</a></div>
          </Card>
          <Card className="contact__info-item">
            <span className="contact__info-icon"><FiMapPin size={17} /></span>
            <div><p className="contact__info-label">Location</p><span className="contact__info-value">{personal.location}</span></div>
          </Card>
          <Card className="contact__info-item">
            <span className="contact__info-icon"><FiGithub size={17} /></span>
            <div><p className="contact__info-label">GitHub</p><a href={personal.github} target="_blank" rel="noopener noreferrer" className="contact__info-value">github.com/{personal.githubUsername}</a></div>
          </Card>
          <Card className="contact__info-item">
            <span className="contact__info-icon"><FiLinkedin size={17} /></span>
            <div><p className="contact__info-label">LinkedIn</p><a href={personal.linkedin} target="_blank" rel="noopener noreferrer" className="contact__info-value">View Profile</a></div>
          </Card>
        </div>

        <Card hoverable={false}>
          <form className="contact__form" onSubmit={handleSubmit}>
            <div className="contact__field">
              <label htmlFor="name">Name</label>
              <input id="name" name="name" type="text" required value={form.name} onChange={handleChange} placeholder="Your name" />
            </div>
            <div className="contact__field">
              <label htmlFor="email">Email</label>
              <input id="email" name="email" type="email" required value={form.email} onChange={handleChange} placeholder="you@example.com" />
            </div>
            <div className="contact__field">
              <label htmlFor="message">Message</label>
              <textarea id="message" name="message" rows={5} required value={form.message} onChange={handleChange} placeholder="What would you like to discuss?" />
            </div>
            <Button variant="primary" icon={FiSend} type="submit">Send Message</Button>
            {submitted && <p className="contact__status" role="status">Opening your email client with this message pre-filled…</p>}
          </form>
        </Card>
      </div>
    </Section>
  );
}
