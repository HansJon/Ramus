$(function() {
  var navbarHeight = 65;
  var width = $(window).width();

  if (width < 601) {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);

          return false;
        }
      }
    });
  } else if (width > 600) {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
          $('html,body').animate({
            scrollTop: (target.offset().top) - navbarHeight
          }, 1000);

          return false;
        }
      }
    });
  }
});

/*
$(function() {
  var navbarHeight = 65;
  var width = $(window).width();

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {
        if (width < 601) { // Handle phone sizes
          $('html,body').animate({
            scrollTop: (target.offset().top)
          }, 1000);
        } else if (width > 600) { // Handle larger devices
          $('html,body').animate({
            scrollTop: (target.offset().top) - navbarHeight
          }, 1000);
        }
      }

        return false;
      }
    }
  });
});
*/