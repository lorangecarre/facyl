export default function getLocalization(stringKey) {
  if (typeof window.facyl_screenReaderText === 'undefined' || typeof window.facyl_screenReaderText[stringKey] === 'undefined') {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`);
    return '';
  }
  return window.facyl_screenReaderText[stringKey];
}
