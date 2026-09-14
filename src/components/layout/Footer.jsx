import { FiGithub, FiLinkedin, FiMail } from 'react-icons/fi';
import { useData } from '../../context/DataContext';
import { withBase } from '../../utils/withBase';
import './Footer.css';

/** Site footer with social links, a "built with" credit, and a discreet admin-panel link. */
export default function Footer() {
  const { data } = useData();
  const { personal } = data;
  const year = new Date().getFullYear();

  return (
    <footer className="footer">
      <div className="container footer__inner">
        <div>
          <p className="footer__meta">
            © {year} {personal.name}. Built with <span>React</span> &amp; <span>Vite</span>.
          </p>
          <a href={withBase('admin')} className="footer__admin-link" title="Local Admin Editor — not a public login">
            Admin
          </a>
        </div>

        <div className="footer__socials">
          <a href={personal.github} target="_blank" rel="noopener noreferrer" className="footer__social-link" aria-label="GitHub profile">
            <FiGithub size={17} />
          </a>
          <a href={personal.linkedin} target="_blank" rel="noopener noreferrer" className="footer__social-link" aria-label="LinkedIn profile">
            <FiLinkedin size={17} />
          </a>
          <a href={`mailto:${personal.email}`} className="footer__social-link" aria-label="Send an email">
            <FiMail size={17} />
          </a>
        </div>
      </div>
    </footer>
  );
}
