$(document).ready(function() {
  screenHandler();

  $(window).on("orientationchange",function(){
    screenHandler();
  });

  $(window).resize(function() {
    screenHandler();
  });
});

function screenHandler() {
  var navbarHeight = $('nav').height();
  var width = $(window).width();

  if (width < 601) { // Handle phone sizes

    var height = ($(window).height());
    var bgh = "100% " + (height) + "px";

    $(".Banner").css("background-size", bgh);
    $(".Banner").css("height", height + "px");

    height -= navbarHeight;

    bgh = "100% " + (height) + "px";

    $("#WelcomeBanner").css("background-size", bgh);
    $("#WelcomeBanner").css("height", height + "px");

  } else if (width > 600) { // Handle larger sizes

    var height = $(window).height() - navbarHeight;
    var bgh = "100% " + (height) + "px";

    $(".Banner").css("background-size", bgh);
    $(".Banner").css("height", height + "px");

  }
}