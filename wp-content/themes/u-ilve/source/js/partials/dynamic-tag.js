const { htmlStringToJs } = require("./html-string-to-js");
const { OptimizedScroll } = require("./optimized-scroll-event");
const { checkThatObjectIsInScrollArea } = require("./distance-checking");
const { replaceElement } = require("./replace-element");

const elements = document.querySelectorAll('[data-dynamic-tag]');

for (let elementIteration = 0; elementIteration < elements.length; elementIteration++) {
  const element = elements[elementIteration];
  if (element.hasAttribute('data-dynamic-tag-manual')) continue;
  const delay = Number(element.getAttribute('data-dynamic-tag-delay'));
  const whenScroll = element.hasAttribute('data-dynamic-tag-when-scroll');

  window.addEventListener('load', function() {
    if (delay) {
      setTimeout(() => {
        replaceElementWithDynamicTag(element);
      }, delay);
      return;
    }
    if (whenScroll) {
      let srcAdded = false;
      function listener() {
        if (!srcAdded && checkThatObjectIsInScrollArea(element, 700)) {
          srcAdded = true;
          replaceElementWithDynamicTag(element);
          window.removeEventListener(OptimizedScroll.defaultEventName, handler);
        }
      };
      const handler = window.addEventListener(OptimizedScroll.defaultEventName, listener);
      listener();
      return;
    }
    
    replaceElementWithDynamicTag(element);
  });

}

function replaceElementWithDynamicTag(element, whatReturn = false) {
  if (!element.getAttribute('data-dynamic-tag')?.trim()) return;
  replaceElement(element, initNewElementAsReal(htmlStringToJs(element.getAttribute('data-dynamic-tag'))));
  return whatReturn;
}

function initNewElementAsReal(virtualElement) {
  
  const newElement = document.createElement(virtualElement.tagName.toLowerCase());
  const attributes = virtualElement.attributes;
  for (let i = 0; i < attributes.length; i++) {
    const attribute = attributes[i];
    newElement.setAttribute(attribute['name'], attribute['value']);
  }
  newElement.innerHTML = virtualElement.innerHTML;
  return newElement;
}

module.exports = {
  replaceElementWithDynamicTag
}