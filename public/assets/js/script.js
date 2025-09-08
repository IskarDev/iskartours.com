$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 1) { 
              $('.navbar').addClass('navbar-dark bg-dark');
          } else {
              $('.navbar').removeClass('navbar-dark bg-dark');
          }
        });
});