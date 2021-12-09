const { initStyles } = require("./dynamic-styles-core");

initStyles('dys-hello-tractor', '--right', {
  1786: () => undefined,
  871: (windowWidth) => {
    return `-${Math.round(200 + (1785 - windowWidth) / 2)}px`;
  },
  761: (windowWidth) => {
    return `-${Math.round(200 + (1785 - windowWidth) / 2 * 1.05)}px`;
  },
  0: () => undefined
});