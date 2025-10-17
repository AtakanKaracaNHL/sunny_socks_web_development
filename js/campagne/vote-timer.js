var countDownDate = new Date("Nov 1, 2025 23:59:59").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display results
  document.getElementById("timer-days").innerHTML = days;
  document.getElementById("timer-hours").innerHTML = hours;
  document.getElementById("timer-minutes").innerHTML = minutes;
  document.getElementById("timer-seconds").innerHTML = seconds;

  // Optional: Stop timer when countdown is over
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer-days").innerHTML = "0";
    document.getElementById("timer-hours").innerHTML = "0";
    document.getElementById("timer-minutes").innerHTML = "0";
    document.getElementById("timer-seconds").innerHTML = "0";
  }
}, 1000);
