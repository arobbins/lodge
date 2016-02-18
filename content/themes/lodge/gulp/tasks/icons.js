var gulp = require('gulp'),
    config = require('../config'), // Relative to this file
    svgmin = require('gulp-svgmin'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

gulp.task('icons', function() {
  return gulp.src(['assets/icons/*.svg'])
    .pipe(iconfont({
      fontName: 'Lodge', // required
      prependUnicode: true, // recommended option
      formats: ['ttf', 'eot', 'woff', 'svg'], // default, 'woff2' and 'svg' are available
      timestamp: runTimestamp, // recommended to get consistent builds when watching files
    }))
    .on('glyphs', function(glyphs, options) {
      // CSS templating, e.g.
      console.log(glyphs, options);
    })
    .pipe(gulp.dest('assets/fonts'));
});
