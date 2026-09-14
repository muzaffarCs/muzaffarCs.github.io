/**
 * Renders one labeled input based on a schema field's `type`.
 * 'list' fields are edited as newline-separated text and converted
 * to/from arrays at the boundary.
 */
export default function FieldInput({ field, value, onChange }) {
  const { key, label, type } = field;

  if (type === 'list') {
    const textValue = Array.isArray(value) ? value.join('\n') : '';
    return (
      <div className="admin-field">
        <label htmlFor={key}>{label}</label>
        <textarea
          id={key}
          rows={Math.min(6, Math.max(2, textValue.split('\n').length))}
          value={textValue}
          onChange={(e) => onChange(e.target.value.split('\n'))}
          onBlur={(e) => onChange(e.target.value.split('\n').map((l) => l.trim()).filter(Boolean))}
        />
      </div>
    );
  }

  if (type === 'textarea') {
    return (
      <div className="admin-field">
        <label htmlFor={key}>{label}</label>
        <textarea id={key} rows={3} value={value || ''} onChange={(e) => onChange(e.target.value)} />
      </div>
    );
  }

  return (
    <div className="admin-field">
      <label htmlFor={key}>{label}</label>
      <input id={key} type={type === 'url' ? 'url' : 'text'} value={value || ''} onChange={(e) => onChange(e.target.value)} />
    </div>
  );
}
