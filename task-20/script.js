// Use the switch statement to display “today is (whatever day
// it is)” according to the current day.

const date = new Date();
let currentday = date.getDay();

switch (currentday) {
  case 0:
    console.log("Today is Sunday");
    break;
  case 1:
    console.log("Today is Monday");
    break;
  case 2:
    console.log("Today is tuesday");
    break;
  case 3:
    console.log("Today is wednesday");
    break;
  case 4:
    console.log("Today is thursday");
    break;
  case 5:
    console.log("Today is friday");
    break;
  case 6:
    console.log("Today is saturday");
    break;
}
