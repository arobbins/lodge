(function($) {

  var Vendor = (function() {

    var $carousel = $('.carousel');

    var initCarousel = function() {
      $carousel.slick({
        autoplay: true,
        dots: true,
        fade: true,
        arrows: false
      });
    };

    return {
      initCarousel: initCarousel
    }

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Vendor;

})(jQuery);
