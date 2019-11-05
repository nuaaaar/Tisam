// Auto Click
$("#btn").click();

var clickTimer = setInterval(time, 7000);

function time()
{
    $("#btn").click();
}

// Getting Quote Data
$(document).ready(function() {
    $("#get-another-quote-button").on("click", function() {
        $.ajax({
            method: "GET",
            url: "/greeting/random"
        }).done(function (response) {
            $("#quote").html(response.body);
            $("#receiver").html("To : " + response.to);
            $("#author").html("- " + response.from);
            clearInterval(clickTimer);
            clickTimer = setInterval(time, 7000);
    });
  });
});

// Quote Animation
var button = document.getElementById("btn");
var main_box = document.getElementById("main_box");
var animation = [
//   "slideInLeft",
//   "slideInRight",
  "bounceInDown",
//   "slideInUp",
//   "slideInDown",
 ];

button.addEventListener("click", function(quote_animation) {
  quote_animation.preventDefault;

  var random_animation = animation[Math.floor(Math.random()*animation.length)];
  console.log(random_animation);

  main_box.className = "animated container";

  void main_box.offsetWidth;

  main_box.classList.add(random_animation);
}, false);
