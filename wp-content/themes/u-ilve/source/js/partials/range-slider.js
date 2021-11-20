const rangeSliders = document.querySelectorAll('[data-range-slider]');
if (rangeSliders.length) {
  const noUiSlider = require('nouislider');

  for (let i = 0; i < rangeSliders.length; i++) {
    const rangeSlider = rangeSliders[i];
    const options = JSON.parse(rangeSlider.getAttribute('data-options'));
    noUiSlider.create(rangeSlider, {
      start: options.start,
      step: options.step,
      behaviour: 'snap',
      range: {
        min: options.min,
        max: options.max
      }
    });
    const inputName = rangeSlider.getAttribute('data-range-slider');
    const inputElement = document.getElementById(inputName);
    rangeSlider.noUiSlider.on('update', values => {
      const days = Number(values[0]);
      inputElement.value = days;
    });
    const centerOfSlider = (options.max + 1 - options.min) / 2;
    if (Number.isInteger(centerOfSlider)) {
      const noUiOrigin = rangeSlider.getElementsByClassName('noUi-origin')[0];
      rangeSlider.noUiSlider.on('update', values => {
        if (Number(values[0]) === centerOfSlider) {
          noUiOrigin.style.transform = 'translate(-50%, 0px)';
        }
      });
    }
    inputElement.addEventListener('input', () => {
      const days = Number(inputElement.value);
      rangeSlider.noUiSlider.set([days]);
    });
  }
}

module.exports = {}