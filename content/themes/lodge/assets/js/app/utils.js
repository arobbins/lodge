(function($) {

  var Utils = (function() {

    var $body = $('body');

    var test = function() {
      console.table('HELLOOOO', 'yo');
    };

    return {
      test: test
    }

  })();

  /* Exposing our functions to the rest of the application */
  module.exports = Utils;

})(jQuery);
