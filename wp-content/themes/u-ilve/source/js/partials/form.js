const { lookAtMeAnimation } = require("./look-at-me");
const { smoothScrollToElement } = require("./smooth-scroll");

const forms = document.getElementsByClassName('js-form');
for (let i = 0; i < forms.length; i++) {
  const form = forms[i];
  
  form.onsubmit = () => {
    return formConfirmation(form);
  }
}

function checkInputIsEmpty(input) {
  return (input.getAttribute('type') == 'checkbox' && !input.checked)
  || (input.tagName == 'INPUT'
    && input.value.trim() == ''
  )
  || (input.tagName == 'DIV'
    && (input.innerText.trim() == '' || input.innerText.trim() == 'Не выбрано')
  );
}

function doFocusOnEmptyInput(form) {
  let fields = form.querySelectorAll('input');
  for (let i = 0; i < fields.length; i++) {
    const field = fields[i],
          input = field;
    if (checkInputIsEmpty(input)) {
      if (field.classList.contains('deactivated')) {
        field.classList.remove('deactivated');
      }
      if (input.getAttribute('type') == 'checkbox') {
        if (!checkElementVisibility(field)) {
          smoothScrollToElement(field, window.innerHeight / 2);
        }
      } else {
        if (!checkElementVisibility(field, -23)) {
          smoothScrollToElement(field, window.innerHeight / 2);
        }
        input.focus();
      }
      lookAtMeAnimation(field);
      return true;
    }
  }
  return false;
}

function formConfirmation(form) {
  return !doFocusOnEmptyInput(form);
}

function checkElementVisibility(element, offset = 0) {
  let bottomScreenY = window.pageYOffset + window.innerHeight,
      yElementPositionRelativeToTheScreen = window.pageYOffset + element.getBoundingClientRect().y;
  return (yElementPositionRelativeToTheScreen < bottomScreenY) && element.getBoundingClientRect().y > offset;
}