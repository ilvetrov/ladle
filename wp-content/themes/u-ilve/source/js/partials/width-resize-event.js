const resizeWidthEventName = 'resize-width';
const widthResizeEvent = new CustomEvent(resizeWidthEventName);

let windowWidth = window.innerWidth;

function getWindowWidth() {
  return windowWidth;
}

window.addEventListener('resize', function() {
  if (window.innerWidth !== windowWidth) {
    windowWidth = window.innerWidth;
    
    window.dispatchEvent(widthResizeEvent);
  }
});

module.exports = {
  resizeWidthEventName,
  getWindowWidth,
}