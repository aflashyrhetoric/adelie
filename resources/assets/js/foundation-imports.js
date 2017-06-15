// foundation-imports

// Core
require('foundation-sites/js/foundation.core');

// General utility libs
require('foundation-sites/js/foundation.util.mediaQuery');
require('foundation-sites/js/foundation.util.triggers');
require('foundation-sites/js/foundation.util.motion');

// Responsive Navigation
require('foundation-sites/js/foundation.responsiveToggle');

// Sticky Navigation
require('foundation-sites/js/foundation.sticky');

// Accordion Menu
require('foundation-sites/js/foundation.accordionMenu.js');
require('foundation-sites/js/foundation.util.keyboard.js');
require('foundation-sites/js/foundation.util.motion.js');
require('foundation-sites/js/foundation.util.nest.js');

// // Initialize Foundation JS components
$(document).ready(() => {
  $(document).foundation();
})
