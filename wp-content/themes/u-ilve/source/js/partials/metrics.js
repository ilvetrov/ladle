const { doOnce } = require("./do-once");

function reachGoal(name) {
  try {
    ym(86836258, 'reachGoal', name);
  } catch (error) {
    console.error(error);
  }
}

function reachGoalOnce(name) {
  doOnce(`${name}-from-quiz`, () => reachGoal(name));
}

document.querySelectorAll('[data-click-goal]').forEach(el => {
  el.addEventListener('click', () => {
    reachGoal(el.getAttribute('data-click-goal') + '-click');
  });
});

const metrics = {
  reachGoal,
  reachGoalOnce
};

module.exports = metrics;