import { useEffect, useState } from 'react';
import { FiAlertTriangle, FiDownload, FiExternalLink, FiRefreshCw, FiSave } from 'react-icons/fi';

import { useData } from '../../context/DataContext';
import { useTheme } from '../../context/ThemeContext';
import { withBase } from '../../utils/withBase';
import ThemeToggle from '../layout/ThemeToggle';
import Button from '../ui/Button';
import ArrayEditor from './ArrayEditor';
import ObjectEditor from './ObjectEditor';
import FieldInput from './FieldInput';
import { arraySchemas, personalFields } from './schemas';
import './AdminPanel.css';

const TABS = [
  { id: 'personal', label: 'Personal Info' },
  { id: 'about', label: 'About & Hero' },
  { id: 'skillCategories', label: 'Skills' },
  { id: 'experience', label: 'Experience' },
  { id: 'projects', label: 'Projects' },
  { id: 'education', label: 'Education' },
  { id: 'certifications', label: 'Certifications' },
  { id: 'achievements', label: 'Achievements' },
  { id: 'currentlyLearning', label: 'Currently Learning' },
  { id: 'languages', label: 'Languages' },
];

/** Combined editor for `about` (object) + `heroTagline` (string) since both drive the Hero/About sections. */
function AboutAndHeroEditor({ data, onSave }) {
  const [local, setLocal] = useState({ ...data.about, heroTagline: data.heroTagline });
  const [savedFlash, setSavedFlash] = useState(false);

  useEffect(() => {
    setLocal({ ...data.about, heroTagline: data.heroTagline });
  }, [data.about, data.heroTagline]);

  const handleSave = () => {
    const { heroTagline, ...aboutRest } = local;
    onSave('about', aboutRest);
    onSave('heroTagline', heroTagline);
    setSavedFlash(true);
    setTimeout(() => setSavedFlash(false), 1800);
  };

  return (
    <div className="admin-array-editor">
      <div className="admin-array-editor__header">
        <h3>About &amp; Hero</h3>
        <Button variant="primary" size="sm" icon={FiSave} onClick={handleSave}>
          {savedFlash ? 'Saved ✓' : 'Save Section'}
        </Button>
      </div>
      <div className="admin-item-card__body admin-item-card__body--static">
        <FieldInput
          field={{ key: 'heroTagline', label: 'Hero Tagline', type: 'textarea' }}
          value={local.heroTagline}
          onChange={(val) => setLocal((p) => ({ ...p, heroTagline: val }))}
        />
        <FieldInput
          field={{ key: 'summary', label: 'About Summary (one paragraph per line)', type: 'list' }}
          value={local.summary}
          onChange={(val) => setLocal((p) => ({ ...p, summary: val }))}
        />
        <FieldInput
          field={{ key: 'careerGoal', label: 'Career Goal', type: 'textarea' }}
          value={local.careerGoal}
          onChange={(val) => setLocal((p) => ({ ...p, careerGoal: val }))}
        />
      </div>
    </div>
  );
}

/**
 * Local Admin Editor.
 *
 * IMPORTANT: there is no login here on purpose. This is a static,
 * backend-less site — any password stored in the frontend bundle could be
 * read by anyone who opens dev tools, so a login screen would only create
 * a false sense of security. See the README's "Security Model" section.
 */
export default function AdminPanel() {
  const { data, updateSlice, resetToDefaults, exportAsDataFileText, hasLocalEdits, hadCorruptedData } = useData();
  const { isDark } = useTheme();
  const [activeTab, setActiveTab] = useState('personal');
  const [exportError, setExportError] = useState('');
  const [exportedFlash, setExportedFlash] = useState(false);

  const handleExport = () => {
    setExportError('');
    try {
      const text = exportAsDataFileText();
      const blob = new Blob([text], { type: 'text/javascript' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'defaultData.js';
      a.click();
      URL.revokeObjectURL(url);
      setExportedFlash(true);
      setTimeout(() => setExportedFlash(false), 2500);
    } catch (err) {
      setExportError(err.message || 'Export failed for an unknown reason.');
    }
  };

  const handleReset = () => {
    if (
      window.confirm(
        'Reset all local edits and restore the original published content? This cannot be undone once confirmed.'
      )
    ) {
      resetToDefaults();
    }
  };

  return (
    <div className="admin-page" data-theme={isDark ? 'dark' : 'light'}>
      <div className="admin-topbar">
        <div className="container admin-topbar__inner">
          <span className="admin-topbar__title">
            <span>~/</span>admin
          </span>
          <div className="admin-topbar__actions">
            <ThemeToggle />
            <Button href={withBase('')} variant="secondary" size="sm" icon={FiExternalLink}>
              View Public Site
            </Button>
          </div>
        </div>
      </div>

      <div className="container">
        <div className="admin-notice">
          <FiAlertTriangle size={18} aria-hidden="true" />
          <div>
            <strong>Local Admin Editor</strong> — changes are stored only in this browser
            (<code>localStorage</code>) and are <strong>not</strong> a secure online admin system. Anyone
            with this URL can open this page, but nothing they do here reaches the published site or any
            other visitor's browser. To publish changes, use <strong>Export Data File</strong> below and
            replace <code>src/data/defaultData.js</code> in your repository.
          </div>
        </div>

        {hadCorruptedData && (
          <div className="admin-notice admin-notice--warning">
            <FiAlertTriangle size={18} aria-hidden="true" />
            <div>
              The locally saved data in this browser was corrupted or unreadable, so it was discarded and
              you're now viewing the published defaults. This does not affect the live site for other visitors.
            </div>
          </div>
        )}

        {hasLocalEdits && (
          <div className="admin-notice admin-notice--info">
            You're currently previewing <strong>unsaved local edits</strong> made in this browser. They have
            not been published — export and redeploy to make them permanent for everyone.
          </div>
        )}

        <div className="admin-tabs">
          {TABS.map((tab) => (
            <button
              key={tab.id}
              type="button"
              className={`admin-tab ${activeTab === tab.id ? 'is-active' : ''}`}
              onClick={() => setActiveTab(tab.id)}
            >
              {tab.label}
            </button>
          ))}
        </div>

        {activeTab === 'personal' && (
          <ObjectEditor title="Personal Info" slice="personal" fields={personalFields} value={data.personal} onSave={updateSlice} />
        )}

        {activeTab === 'about' && <AboutAndHeroEditor data={data} onSave={updateSlice} />}

        {arraySchemas[activeTab] && (
          <ArrayEditor
            slice={activeTab}
            schema={arraySchemas[activeTab]}
            items={data[activeTab]}
            onSave={updateSlice}
          />
        )}

        <div className="admin-danger-zone">
          <div>
            <Button variant="secondary" icon={FiDownload} onClick={handleExport}>
              {exportedFlash ? 'Exported ✓' : 'Export Data File'}
            </Button>
            {exportError && <p className="admin-export-error">{exportError}</p>}
          </div>
          <Button variant="danger" icon={FiRefreshCw} onClick={handleReset}>
            Reset Local Changes
          </Button>
        </div>
      </div>
    </div>
  );
}
