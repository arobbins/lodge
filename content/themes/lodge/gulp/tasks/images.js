var gulp = require('gulp'),
    config = require('../config'), // Relative to this file
    svgmin = require('gulp-svgmin'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

gulp.task('images', function () {
  return gulp.src(config.paths.svgs.all)
    .pipe(svgmin())
    .pipe(gulp.dest(config.paths.imgs));
});
