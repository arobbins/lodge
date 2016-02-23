(function($) {

  var Mobile = (function() {

    var $mobileMenuIcon = $('.header-mobile-icon'),
        $mobileMenu = $('.menu-primary-wrapper-mobile');

    var toggleMobileMenu = function() {
      $mobileMenuIcon.click(function() {
        $mobileMenu.slideToggle('fast');
      });
    };

    var animateMobileIcon = function() {
      $mobileMenuIcon.click(function() {
        $(this).toggleClass('is-open');
      });
    };

    return {
      toggleMobileMenu: toggleMobileMenu,
      animateMobileIcon: animateMobileIcon
    }

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Mobile;

})(jQuery);
