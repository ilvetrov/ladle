function htmlStringToJs(string) {
  const tempWrapper = document.createElement('div');
  tempWrapper.innerHTML = string;
  return tempWrapper.childNodes[0];
}

module.exports = {
  htmlStringToJs
};