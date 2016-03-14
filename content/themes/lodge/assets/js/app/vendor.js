(function($) {

  var Vendor = (function() {

    var $carousel = $('.carousel');

    var initCarousel = function() {
      $carousel.slick({
        autoplay: true,
        dots: true,
        fade: true,
        arrows: false,
        autoplaySpeed: 5000,
        pauseOnDotsHover: true
      });

      $carousel.on('breakpoint', function(event, slick, currentSlide, nextSlide){
        // console.log('hit');
      });

    };

    return {
      initCarousel: initCarousel
    };

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Vendor;

})(jQuery);
