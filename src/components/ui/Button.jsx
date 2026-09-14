import './Button.css';

export default function Button({
  children,
  variant = 'primary',
  size = 'md',
  href,
  icon: Icon,
  iconPosition = 'left',
  className = '',
  disabled = false,
  ...rest
}) {
  const classes = `btn btn--${variant} ${size === 'sm' ? 'btn--sm' : ''} ${className}`;
  const content = (
    <>
      {Icon && iconPosition === 'left' && <Icon aria-hidden="true" />}
      <span>{children}</span>
      {Icon && iconPosition === 'right' && <Icon aria-hidden="true" />}
    </>
  );

  if (href && !disabled) {
    const isExternal = href.startsWith('http');
    return (
      <a href={href} className={classes} target={isExternal ? '_blank' : undefined} rel={isExternal ? 'noopener noreferrer' : undefined} {...rest}>
        {content}
      </a>
    );
  }

  return (
    <button type={rest.type || 'button'} className={classes} disabled={disabled} {...rest}>
      {content}
    </button>
  );
}
