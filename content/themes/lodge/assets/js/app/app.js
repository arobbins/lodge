(function($) {

  $(function() {

    var Utils = require('./utils');
    var Vendor = require('./vendor');
    var Mobile = require('./mobile');

    //
    // Vendor
    //
    Vendor.initCarousel();


    //
    // Mobile
    //
    Mobile.toggleMobileMenu();
    Mobile.animateMobileIcon();
    
  });

})(jQuery);
