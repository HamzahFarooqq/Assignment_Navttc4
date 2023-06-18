// Use If...else statement of JavaScript to write a code to
// Display “Good Morning” or “Good Afternoon” according to
// current Time

const date = new Date();
const hour = date.getHours();

if (hour > 6 && hour < 12) {
  console.log("Good Morning");
} else if (hour >= 12 && hour < 18) {
  console.log("Good Afternoon");
} else {
  console.log("Good Night");
}
