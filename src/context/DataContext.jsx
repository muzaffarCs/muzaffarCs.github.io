import { createContext, useCallback, useContext, useMemo, useState } from 'react';
import defaultData from '../data/defaultData';

const DataContext = createContext(undefined);

/**
 * localStorage key for locally-edited content (see the Local Admin Editor).
 * This key holds ONLY portfolio content (jobs, projects, certifications, etc.)
 * — never credentials, tokens, or anything secret.
 */
const STORAGE_KEY = 'portfolioAdminData';

/** JSON.parse that never throws — returns null on any failure instead. */
function safeParse(raw) {
  try {
    return JSON.parse(raw);
  } catch {
    return null;
  }
}

/** JSON.stringify that never throws — returns null on any failure instead. */
function safeStringify(value) {
  try {
    return JSON.stringify(value);
  } catch {
    return null;
  }
}

/**
 * Loads saved edits from localStorage and merges them on top of the shipped
 * defaults, one top-level key at a time. If localStorage is unavailable
 * (e.g. private browsing, disabled storage) or the saved data is corrupted,
 * this always falls back to `defaultData` — the public portfolio must keep
 * working no matter what's in this browser's storage.
 */
function loadInitialData() {
  if (typeof window === 'undefined' || !window.localStorage) {
    return { data: defaultData, hadCorruptedData: false };
  }

  let raw;
  try {
    raw = window.localStorage.getItem(STORAGE_KEY);
  } catch {
    return { data: defaultData, hadCorruptedData: false };
  }

  if (!raw) return { data: defaultData, hadCorruptedData: false };

  const overrides = safeParse(raw);
  if (overrides === null || typeof overrides !== 'object') {
    try {
      window.localStorage.removeItem(STORAGE_KEY);
    } catch {
      /* ignore */
    }
    return { data: defaultData, hadCorruptedData: true };
  }

  return { data: { ...defaultData, ...overrides }, hadCorruptedData: false };
}

export function DataProvider({ children }) {
  const initial = useMemo(loadInitialData, []);
  const [data, setData] = useState(initial.data);
  const [hadCorruptedData] = useState(initial.hadCorruptedData);

  const persist = useCallback((nextData) => {
    const serialized = safeStringify(nextData);
    if (serialized === null) {
      console.error('Could not save portfolio data — it may contain a value that cannot be serialized.');
      return false;
    }
    try {
      window.localStorage.setItem(STORAGE_KEY, serialized);
      return true;
    } catch (err) {
      console.error('Failed to save portfolio data to localStorage', err);
      return false;
    }
  }, []);

  const updateSlice = useCallback(
    (key, value) => {
      setData((prev) => {
        const next = { ...prev, [key]: value };
        persist(next);
        return next;
      });
    },
    [persist]
  );

  const replaceAll = useCallback(
    (nextData) => {
      setData(nextData);
      persist(nextData);
    },
    [persist]
  );

  /** Wipe local edits and revert to the shipped defaults (the "Reset Local Changes" action). */
  const resetToDefaults = useCallback(() => {
    try {
      window.localStorage.removeItem(STORAGE_KEY);
    } catch {
      /* ignore */
    }
    setData(defaultData);
  }, []);

  const hasLocalEdits = useMemo(() => {
    try {
      return !!window.localStorage.getItem(STORAGE_KEY);
    } catch {
      return false;
    }
  }, [data]);

  /**
   * Produces the text of a ready-to-commit defaultData.js file reflecting
   * current in-memory state. Validated to contain only plain portfolio
   * content before it's offered for download.
   */
  const exportAsDataFileText = useCallback(() => {
    const REQUIRED_KEYS = [
      'personal', 'heroTagline', 'about', 'skillCategories', 'currentlyLearning',
      'experience', 'projects', 'projectCategories', 'education', 'certifications',
      'achievements', 'languages', 'navLinks',
    ];
    const missing = REQUIRED_KEYS.filter((k) => !(k in data));
    if (missing.length > 0) {
      throw new Error(`Export failed — missing required data section(s): ${missing.join(', ')}`);
    }

    const body = safeStringify(data);
    if (body === null) {
      throw new Error('Export failed — the current data could not be serialized to JSON.');
    }

    return `/**\n * defaultData.js\n * Exported from the Local Admin Editor on ${new Date().toISOString()}.\n * This file contains ONLY portfolio content — no credentials or secrets.\n *\n * Replace src/data/defaultData.js with this file's contents (keep the\n * default export), then commit and push to publish these changes on\n * GitHub Pages.\n */\n\nconst defaultData = ${body};\n\nexport default defaultData;\n`;
  }, [data]);

  const value = useMemo(
    () => ({ data, updateSlice, replaceAll, resetToDefaults, exportAsDataFileText, hasLocalEdits, hadCorruptedData }),
    [data, updateSlice, replaceAll, resetToDefaults, exportAsDataFileText, hasLocalEdits, hadCorruptedData]
  );

  return <DataContext.Provider value={value}>{children}</DataContext.Provider>;
}

/** Access the live portfolio data + mutators from any component. */
export function useData() {
  const ctx = useContext(DataContext);
  if (!ctx) throw new Error('useData must be used within a DataProvider');
  return ctx;
}
