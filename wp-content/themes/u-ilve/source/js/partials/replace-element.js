function replaceElement(element, newElement) {
  element.parentNode.appendChild(newElement);
  element.remove();
}

module.exports = {
  replaceElement
}