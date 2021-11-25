const { lookAtMeAnimation } = require("./look-at-me");
const { smoothScrollToElement } = require("./smooth-scroll");
const { getWindowWidth } = require("./width-resize-event");

const verticalBreakpoint = 1280;
  
function verticalCheck() {
  return getWindowWidth() <= verticalBreakpoint;
}

class Quiz {
  /**
   * 
   * @param {Element} quiz
   */
  constructor(quiz) {
    this.quizElement = quiz;
    this.name = Quiz.getName(quiz);
    this.blocksElements = document.querySelectorAll(`[data-quiz-block][data-quiz-of="${this.name}"]`);
    this.blocks = QuizBlock.initAll(this.name, this.blocksElements);

    this.toButtons = document.querySelectorAll(`[data-quiz-to][data-quiz-of="${this.name}"]`);
    this.currentPosition = 0;
    this.isInSwitching = false;
    this.initToButtons(this.toButtons);

    this.actionExistsSubscribersElements = document.querySelectorAll(`[data-quiz-action-subscribe][data-quiz-of="${this.name}"]`);
    this.actionExistsSubscribers = this.initActionExistsSubscribers(this.actionExistsSubscribersElements);
    this.actionExistsButtons = document.querySelectorAll(`[data-quiz-action-exists][data-quiz-of="${this.name}"]`);
    this.initActionExistsButtons(this.actionExistsButtons);
  }

  /**
   * 
   * @param {NodeListOf<Element>} toButtons 
   */
  initToButtons(toButtons) {
    toButtons.forEach(toButton => {
      const toPosition = Number(toButton.getAttribute('data-quiz-to'));
      toButton.addEventListener('click', () => {
        if (toButton.classList.contains('blocked') && toButton.classList.contains('js-quiz-order-dot')) return;
        if (toButton.classList.contains('blocked')) {
          lookAtMeAnimation(this.blocks[this.currentPosition].contentElement);
          return;
        }
        if (this.isInSwitching) return;
        this.isInSwitching = true;
        this.currentPosition = toPosition;
        QuizBlock.hideAll(this.name, toPosition).then(() => this.isInSwitching = false);
        if (verticalCheck()) {
          smoothScrollToElement(this.quizElement, 10);
        }
      });
    });
  }

  /**
   * 
   * @param {NodeListOf<Element>} buttons 
   */
  initActionExistsButtons(buttons) {
    buttons.forEach(button => {
      button.addEventListener(Quiz.getChangingEvent(button), () => {
        const buttonActionName = button.getAttribute('data-quiz-action-exists');
        const sameButtons = Array.from(buttons).filter(testButton => testButton.getAttribute('data-quiz-action-exists') === buttonActionName);
        
        let exists = false;
        for (let i = 0; i < sameButtons.length; i++) {
          const checkingButton = sameButtons[i];
          if (Quiz.checkThatActionExists(checkingButton)) {
            exists = true;
            break;
          }
        }
        this.actionExistsSubscribers.filter(subscriber => subscriber.getAttribute('data-quiz-action-subscribe') === button.getAttribute('data-quiz-action-exists')).forEach(subscriber => exists ? subscriber.actionHandler() : subscriber.nonActionHandler());
      });
    });
  }

  /**
   * 
   * @param {NodeListOf<Element>} subscribers 
   */
  initActionExistsSubscribers(subscribers) {
    return Array.from(subscribers).map(subscriber => {
      subscriber.actionHandler = () => handlers[subscriber.getAttribute('data-quiz-action-handler')](subscriber);
      subscriber.nonActionHandler = () => handlers[subscriber.getAttribute('data-quiz-non-action-handler')](subscriber);

      return subscriber;
    });
  }

  /**
   * 
   * @param {Element} element 
   */
  static detectInsertingType(element) {
    const tagName = element.tagName;
    switch (tagName) {
      case 'INPUT':
        const inputType = element.getAttribute('type');
        switch (inputType) {
          case 'checkbox':
            return 'checkbox';
            break;
            
          case 'radio':
            return 'checkbox';
            break;

          case 'text':
            return 'text';
            
          case 'date':
            return 'date';

          default:
            break;
        }
        break;
    
      default:
        break;
    }
  }
  
  /**
   * 
   * @param {Element} element 
   */
  static checkThatActionExists(element) {
    const type = Quiz.detectInsertingType(element);
    switch (type) {
      case 'checkbox':
        return element.checked;
        break;

      case 'text':
        return element.value.trim() !== '';
        break;

      case 'date':
        return element.value !== '';
        break;
    
      default:
        break;
    }
  }
  
  /**
   * 
   * @param {Element} element 
   */
  static getChangingEvent(element) {
    const type = Quiz.detectInsertingType(element);
    switch (type) {
      case 'checkbox':
        return 'input';
        break;
    
      case 'text':
        return 'input';
        break;
    
      case 'date':
        return 'input';
        break;
    
      default:
        break;
    }
  }

  /**
   * 
   * @param {Element} quiz
   */
  static getName = quiz => quiz.getAttribute('data-quiz');

  /**
   * @type {Object.<string, Quiz>}
   */
  static all = {};
  static initAll() {
    const quizzes = document.querySelectorAll('[data-quiz]');
    quizzes.forEach(quiz => {
      Quiz.all[Quiz.getName(quiz)] = new Quiz(quiz);
    });
  }
}

class QuizBlock {
  /**
   * 
   * @param {Element} blockElement 
   * @param {Element} contentElement 
   */
  constructor(blockElement) {
    this.blockElement = blockElement;
    this.contentElement = (blockElement.getElementsByClassName('quiz__content') || [])[0];
    this.order = Number(blockElement.getAttribute('data-quiz-block'));
    this.isObedient = blockElement.classList.contains('obedient');
  }

  static trasitionForHidden = 200;

  hide(toRight = false) {
    this.blockElement.classList.add('hidden-' + (toRight ? 'right' : 'left'));
    this.blockElement.classList.remove('hidden-' + (!toRight ? 'right' : 'left'));
    
    if (verticalCheck()) {
      setTimeout(() => {
        this.blockElement.classList.add('obedient');
      }, QuizBlock.trasitionForHidden);
    }
  }

  show() {
    if (verticalCheck()) {
      this.blockElement.classList.remove('obedient');
    }
    this.blockElement.classList.remove('hidden-right');
    this.blockElement.classList.remove('hidden-left');
  }


  /**
   * 
   * @param {string} name 
   * @param {QuizBlock|number} exception
   */
  static hideAll(name, exception) {
    const blocks = this.all[name];
    /**
     * @type {number}
     */
    const exceptionOrder = typeof exception === 'number' ? exception : exception.order;
    for (const order in blocks) {
      if (Object.hasOwnProperty.call(blocks, order)) {
        const block = blocks[order];
        if (exceptionOrder === block.order) {
          setTimeout(() => {
            block.show();
          }, this.trasitionForHidden);
        } else {
          block.hide(exceptionOrder < block.order);
        }
      }
    }
    return new Promise((resolve, reject) => setTimeout(() => {
      resolve();
    }, this.trasitionForHidden));
  }
  
  /**
   * @type {Object.<string, Object.<number, QuizBlock>>}
   */
  static all = {};
  /**
   * 
   * @param {NodeListOf<Element>} blocksElements 
   */
  static initAll(name, blocksElements) {
    blocksElements.forEach(blockElement => {
      if (!QuizBlock.all[name]) {
        QuizBlock.all[name] = {};
      }
      QuizBlock.all[name][Number(blockElement.getAttribute('data-quiz-block'))] = new QuizBlock(blockElement);
    });
    return QuizBlock.all[name];
  }
}

const handlers = {
  /**
   * @param {Element} nextButton
   */
  activateNextButton: (nextButton) => {
    nextButton.classList.remove('blocked');
    nextButton.classList.contains('mini-button') && nextButton.classList.add('mini-button_accent');
    (nextButton.getElementsByClassName('flare') || [])[0]?.classList.add('activated');
  },
  /**
   * @param {Element} nextButton
   */
  deactivateNextButton: (nextButton) => {
    nextButton.classList.add('blocked');
    nextButton.classList.contains('mini-button') && nextButton.classList.remove('mini-button_accent');
    (nextButton.getElementsByClassName('flare') || [])[0]?.classList.remove('activated');
  },
}

module.exports = {
  Quiz
}