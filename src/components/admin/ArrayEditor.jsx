import { useEffect, useState } from 'react';
import { FiChevronDown, FiChevronUp, FiPlus, FiSave, FiTrash2 } from 'react-icons/fi';
import FieldInput from './FieldInput';
import Button from '../ui/Button';

/**
 * Renders a list of editable cards for any array-of-objects data slice
 * (certifications, projects, experience, education, achievements, etc.),
 * driven entirely by a schema — no per-section custom code needed.
 */
export default function ArrayEditor({ slice, schema, items, onSave }) {
  const [localItems, setLocalItems] = useState(items);
  const [openIndex, setOpenIndex] = useState(0);
  const [savedFlash, setSavedFlash] = useState(false);

  // Keep local editing state in sync if the underlying data changes elsewhere (e.g. after a reset)
  useEffect(() => {
    setLocalItems(items);
  }, [items]);

  const updateItem = (index, key, value) => {
    setLocalItems((prev) => prev.map((item, i) => (i === index ? { ...item, [key]: value } : item)));
  };

  const addItem = () => {
    setLocalItems((prev) => [...prev, { ...schema.blank }]);
    setOpenIndex(localItems.length);
  };

  const removeItem = (index) => {
    if (!window.confirm('Remove this entry? This cannot be undone once you save.')) return;
    setLocalItems((prev) => prev.filter((_, i) => i !== index));
  };

  const handleSave = () => {
    onSave(slice, localItems);
    setSavedFlash(true);
    setTimeout(() => setSavedFlash(false), 1800);
  };

  return (
    <div className="admin-array-editor">
      <div className="admin-array-editor__header">
        <h3>{schema.label}</h3>
        <div className="admin-array-editor__header-actions">
          <Button variant="secondary" size="sm" icon={FiPlus} onClick={addItem}>Add</Button>
          <Button variant="primary" size="sm" icon={FiSave} onClick={handleSave}>
            {savedFlash ? 'Saved ✓' : 'Save Section'}
          </Button>
        </div>
      </div>

      {localItems.length === 0 && <p className="admin-empty-note">No entries yet — click Add to create one.</p>}

      <div className="admin-array-editor__list">
        {localItems.map((item, index) => {
          const isOpen = openIndex === index;
          return (
            <div className="admin-item-card" key={index}>
              <button
                type="button"
                className="admin-item-card__toggle"
                onClick={() => setOpenIndex(isOpen ? -1 : index)}
              >
                <span>{schema.itemLabel(item)}</span>
                {isOpen ? <FiChevronUp /> : <FiChevronDown />}
              </button>

              {isOpen && (
                <div className="admin-item-card__body">
                  {schema.fields.map((field) => (
                    <FieldInput
                      key={field.key}
                      field={field}
                      value={item[field.key]}
                      onChange={(val) => updateItem(index, field.key, val)}
                    />
                  ))}
                  <Button variant="danger" size="sm" icon={FiTrash2} onClick={() => removeItem(index)}>
                    Remove
                  </Button>
                </div>
              )}
            </div>
          );
        })}
      </div>
    </div>
  );
}
