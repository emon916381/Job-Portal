$(document).ready(function(){
    // Menu event
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 200) {
          $('.header_area').addClass('nav_fix');
        } else {
          $('.header_area').removeClass('nav_fix');
        }
      });

      
})(jQuery);