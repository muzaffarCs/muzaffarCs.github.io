import { useEffect, useState } from 'react';
import { FiSave } from 'react-icons/fi';
import FieldInput from './FieldInput';
import Button from '../ui/Button';

/** Renders a flat form for a single object data slice, e.g. `personal`. */
export default function ObjectEditor({ title, slice, fields, value, onSave }) {
  const [local, setLocal] = useState(value);
  const [savedFlash, setSavedFlash] = useState(false);

  useEffect(() => setLocal(value), [value]);

  const updateField = (key, val) => setLocal((prev) => ({ ...prev, [key]: val }));

  const handleSave = () => {
    onSave(slice, local);
    setSavedFlash(true);
    setTimeout(() => setSavedFlash(false), 1800);
  };

  return (
    <div className="admin-array-editor">
      <div className="admin-array-editor__header">
        <h3>{title}</h3>
        <Button variant="primary" size="sm" icon={FiSave} onClick={handleSave}>
          {savedFlash ? 'Saved ✓' : 'Save Section'}
        </Button>
      </div>
      <div className="admin-item-card__body admin-item-card__body--static">
        {fields.map((field) => (
          <FieldInput key={field.key} field={field} value={local[field.key]} onChange={(val) => updateField(field.key, val)} />
        ))}
      </div>
    </div>
  );
}
