var gulp = require('gulp'),
    favicons = require("gulp-favicons"),
    config = require('../config'); // Relative to this file

// Pre and post processing our CSS
gulp.task('favicons', function() {
  gulp.src(config.paths.favicon.entry).pipe(favicons({
      appName: "The Lodge Sasquatch Kitchen",
      appDescription: "The Lodge Sasquatch Kitchen",
      developerName: "The Lodge Sasquatch Kitchen",
      developerURL: "http://thelodgetempe.com",
      background: "#fff",
      path: config.paths.favicon.all,
      url: "http://thelodgetempe.com",
      display: "standalone",
      orientation: "portrait",
      version: 1.0,
      logging: false,
      online: false,
      html: "index.html",
      replace: true,
      icons: {
        android: true,
        appleIcon: true,
        appleStartup: true,
        coast: true,
        favicons: true,
        firefox: true,
        opengraph: true,
        twitter: true,
        windows: true,
        yandex: true
      }
  })).pipe(gulp.dest(config.paths.favicon.dest));
});
