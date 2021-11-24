let windowWidth = window.innerWidth;

function checkMobile() {
  return checkMobileResolution() || checkMobileAgent();
}

function checkMobileResolution() {
  return windowWidth < 1024;
}

function checkMobileAgent() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function checkMobileView() {
  return document.body.classList.contains('mobile-view');
}

window.addEventListener('resize-width', function() {
  windowWidth = window.innerWidth;
});

module.exports = {
  checkMobile,
  checkMobileResolution,
  checkMobileAgent,
  checkMobileView
}