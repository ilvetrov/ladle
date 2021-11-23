require('./partials/object-extended');
require('./partials/width-resize-event');

require('./partials/async-img');
require('./partials/quiz').Quiz.initAll();
require('./partials/range-slider');
require('./partials/date-picker');

window.replaceElementWithDynamicTag = require('./partials/dynamic-tag').replaceElementWithDynamicTag;