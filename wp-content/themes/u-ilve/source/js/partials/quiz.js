const { lookAtMeAnimation } = require("./look-at-me");

class Quiz {
  /**
   * 
   * @param {Element} quiz
   */
  constructor(quiz) {
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
        if (toButton.classList.contains('blocked')) {
          lookAtMeAnimation(this.blocks[this.currentPosition].contentElement);
          return;
        }
        if (this.isInSwitching) return;
        this.isInSwitching = true;
        this.currentPosition = toPosition;
        QuizBlock.hideAll(this.name, toPosition).then(() => this.isInSwitching = false);
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
        
        let exists = false;
        for (let i = 0; i < buttons.length; i++) {
          const checkingButton = buttons[i];
          if (Quiz.checkThatActionExists(checkingButton)) {
            exists = true;
            break;
          }
        }
        if (exists) {
          this.actionExistsSubscribers.forEach(subscriber => subscriber.actionHandler());
        } else {
          this.actionExistsSubscribers.forEach(subscriber => subscriber.nonActionHandler());
        }

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

    // setTimeout(() => {
    //   this.blockElement.classList.add('disabled');
    // }, QuizBlock.trasitionForHidden + 50);
  }

  show() {
    // this.blockElement.classList.remove('disabled');
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
     * @type {number[]}
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
    nextButton.classList.add('mini-button_accent');
    (nextButton.getElementsByClassName('flare') || [])[0]?.classList.add('activated');
  },
  /**
   * @param {Element} nextButton
   */
  deactivateNextButton: (nextButton) => {
    nextButton.classList.add('blocked');
    nextButton.classList.remove('mini-button_accent');
    (nextButton.getElementsByClassName('flare') || [])[0]?.classList.remove('activated');
  },
}

module.exports = {
  Quiz
}