function htmlStringToJs(string) {
  const tempWrapper = document.createElement('div');
  tempWrapper.innerHTML = string.trim().replace('\n', '').replace('\t', '').replace('\r', '').replace(/\s\s+?/g, '');
  return tempWrapper.childNodes[0];
}

module.exports = {
  htmlStringToJs
};