(function($) {

  var Vendor = (function() {

    var $carousel = $('.carousel');

    var initCarousel = function() {
      $carousel.slick({
        autoplay: false,
        dots: true,
        fade: true,
        arrows: false,
        pauseOnDotsHover: true,
        responsive: [
          {
            breakpoint: 800,
            settings: "unslick"
          }
        ]
      });

      $carousel.on('breakpoint', function(event, slick, currentSlide, nextSlide){
        console.log('hit');
      });

    };

    return {
      initCarousel: initCarousel
    }

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Vendor;

})(jQuery);
