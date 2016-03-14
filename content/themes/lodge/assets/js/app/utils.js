(function($) {

  var Utils = (function() {

    var $body = $('body');

    var test = function() {

    };

    return {
      test: test
    };

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Utils;

})(jQuery);
