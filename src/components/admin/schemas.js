/**
 * Field schemas describing how to render an editor for each data slice.
 * field types: 'text' | 'textarea' | 'url' | 'list' (comma-separated tags)
 */

export const arraySchemas = {
  experience: {
    label: 'Experience',
    itemLabel: (item) => item.role || 'New Role',
    fields: [
      { key: 'role', label: 'Role / Title', type: 'text' },
      { key: 'org', label: 'Organization', type: 'text' },
      { key: 'location', label: 'Location', type: 'text' },
      { key: 'start', label: 'Start Date', type: 'text' },
      { key: 'end', label: 'End Date', type: 'text' },
      { key: 'type', label: 'Type (e.g. Internship)', type: 'text' },
      { key: 'points', label: 'Highlights (one per line)', type: 'list' },
    ],
    blank: { role: '', org: '', location: '', start: '', end: '', type: '', points: [] },
  },

  projects: {
    label: 'Projects',
    itemLabel: (item) => item.title || 'New Project',
    fields: [
      { key: 'title', label: 'Title', type: 'text' },
      { key: 'description', label: 'Description', type: 'textarea' },
      { key: 'category', label: 'Category (must match a filter category)', type: 'text' },
      { key: 'tech', label: 'Tech Used (one per line)', type: 'list' },
      { key: 'features', label: 'Key Features (one per line)', type: 'list' },
      { key: 'github', label: 'GitHub URL', type: 'url' },
      { key: 'demo', label: 'Live Demo URL (leave blank if none)', type: 'url' },
    ],
    blank: { title: '', description: '', category: '', tech: [], features: [], github: '', demo: '' },
  },

  education: {
    label: 'Education',
    itemLabel: (item) => item.degree || 'New Entry',
    fields: [
      { key: 'degree', label: 'Degree / Program', type: 'text' },
      { key: 'institution', label: 'Institution', type: 'text' },
      { key: 'start', label: 'Start', type: 'text' },
      { key: 'end', label: 'End', type: 'text' },
      { key: 'detail', label: 'Detail', type: 'textarea' },
    ],
    blank: { degree: '', institution: '', start: '', end: '', detail: '' },
  },

  certifications: {
    label: 'Certifications',
    itemLabel: (item) => item.title || 'New Certification',
    fields: [
      { key: 'title', label: 'Certification Title', type: 'text' },
      { key: 'issuer', label: 'Issuer', type: 'text' },
      { key: 'platform', label: 'Platform (e.g. Coursera — optional)', type: 'text' },
      { key: 'date', label: 'Issued Date', type: 'text' },
      { key: 'credentialId', label: 'Credential ID (optional)', type: 'text' },
      { key: 'credentialUrl', label: 'Credential URL (optional)', type: 'url' },
      { key: 'skills', label: 'Skills (one per line)', type: 'list' },
      { key: 'detail', label: 'Description', type: 'textarea' },
    ],
    blank: { title: '', issuer: '', platform: '', date: '', credentialId: '', credentialUrl: '', skills: [], detail: '' },
  },

  achievements: {
    label: 'Achievements',
    itemLabel: (item) => item.title || 'New Achievement',
    fields: [
      { key: 'title', label: 'Title', type: 'text' },
      { key: 'org', label: 'Organization', type: 'text' },
      { key: 'detail', label: 'Detail', type: 'textarea' },
    ],
    blank: { title: '', org: '', detail: '' },
  },

  currentlyLearning: {
    label: 'Currently Learning',
    itemLabel: (item) => item.title || 'New Item',
    fields: [
      { key: 'title', label: 'Title', type: 'text' },
      { key: 'note', label: 'Note', type: 'textarea' },
    ],
    blank: { title: '', note: '' },
  },

  skillCategories: {
    label: 'Skills',
    itemLabel: (item) => item.category || 'New Category',
    fields: [
      { key: 'category', label: 'Category Name', type: 'text' },
      { key: 'icon', label: 'Icon key (code, layout, server, database, terminal, git-branch, box, network)', type: 'text' },
      { key: 'skills', label: 'Skills (one per line)', type: 'list' },
    ],
    blank: { category: '', icon: 'code', skills: [] },
  },

  languages: {
    label: 'Languages',
    itemLabel: (item) => item.name || 'New Language',
    fields: [
      { key: 'name', label: 'Language', type: 'text' },
      { key: 'level', label: 'Proficiency', type: 'text' },
    ],
    blank: { name: '', level: '' },
  },
};

export const personalFields = [
  { key: 'name', label: 'Full Name', type: 'text' },
  { key: 'heroTitle', label: 'Hero Title', type: 'text' },
  { key: 'location', label: 'Location', type: 'text' },
  { key: 'email', label: 'Email', type: 'text' },
  { key: 'phone', label: 'Phone', type: 'text' },
  { key: 'linkedin', label: 'LinkedIn URL', type: 'url' },
  { key: 'github', label: 'GitHub URL', type: 'url' },
  { key: 'githubUsername', label: 'GitHub Username', type: 'text' },
  { key: 'resumeUrl', label: 'Resume File Path', type: 'text' },
  { key: 'avatarUrl', label: 'Avatar Image Path', type: 'text' },
];
