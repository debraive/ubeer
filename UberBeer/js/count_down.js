// Set the date we're counting down to
var countDownDate = new Date("Nov 17, 2017 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
var days_dom = document.querySelector('#days');
var hours_dom = document.querySelector('#hours');
var minutes_dom = document.querySelector('#minutes');
var seconds_dom = document.querySelector('#seconds');
days_dom.innerHTML = days;
hours_dom.innerHTML= hours;
minutes_dom.innerHTML= minutes;
seconds_dom.innerHTML = seconds;

document.createElement('em');
var text_second=document.createElement('em');
text_second.innerHTML='seconds';
seconds_dom.appendChild(text_second);

var text_minutes=document.createElement('em');
text_minutes.innerHTML='minutes';
minutes_dom.appendChild(text_minutes);

var text_hours=document.createElement('em');
text_hours.innerHTML='hours';
hours_dom.appendChild(text_hours);

var text_days=document.createElement('em');
text_days.innerHTML='days';
days_dom.appendChild(text_days);




  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
