/* eslint-disable max-len, no-param-reassign, no-unused-vars */
/**
 * Air theme JavaScript.
 */

// Import modules
import reframe from 'reframe.js';
import {
  styleExternalLinks,
  initExternalLinkLabels,
} from './modules/external-link';
import initAnchors from './modules/anchors';
import backToTop from './modules/top';
import scroll from './modules/scroll';
import initA11ySkipLink from './modules/a11y-skip-link';
import 'what-input';
import './modules/navigation';
import './modules/sticky-nav';
import './modules/jauge';
import './modules/filtres';
import './modules/tarif-mobile';
import './modules/carrousel';
import './modules/temoignage';
import './modules/accessibilite';
import './modules/devis';

// Define Javascript is active by changing the body class
document.body.classList.remove('no-js');
document.body.classList.add('js');

document.addEventListener('DOMContentLoaded', () => {
  initAnchors();
  backToTop();
  styleExternalLinks();
  initExternalLinkLabels();
  initA11ySkipLink();
  scroll();

  // Fit video embeds to container
  reframe('.wp-has-aspect-ratio iframe');
});
