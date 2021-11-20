const { getTodayRFC } = require("./get-date");

const datesWithToday = document.getElementsByClassName('js-set-today');
const today = getTodayRFC();
for (let i = 0; i < datesWithToday.length; i++) {
  const dateWithToday = datesWithToday[i];
  dateWithToday.value = today;
}