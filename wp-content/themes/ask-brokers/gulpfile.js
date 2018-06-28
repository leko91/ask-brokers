var gulp = require('gulp'),
gutil = require('gulp-util'),
plugins = require('gulp-load-plugins')(),
settings = require('./settings'),
webpack = require('webpack');

gulp.task('styles', function () {
  return gulp.src('assets/styles/style.less')
      .pipe(plugins.plumber())
      .pipe(plugins.less())
      .on('error', function (err) {
          gutil.log(err);
          this.emit('end');
      })
      .pipe(plugins.autoprefixer({
          browsers: [
                  '> 1%',
                  'last 2 versions',
                  'firefox >= 4',
                  'safari 7',
                  'safari 8',
                  'IE 8',
                  'IE 9',
                  'IE 10',
                  'IE 11'
              ],
          cascade: false
      }))
      .pipe(plugins.cssmin())
      .pipe(gulp.dest('public/styles')).on('error', gutil.log);
});

gulp.task('scripts', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task('watch', function() {
  gulp.watch(settings.themeLocation + 'assets/**/*.less', gulp.parallel('styles'));
  gulp.watch(settings.themeLocation + 'assets/**/*.js', gulp.parallel('scripts'));
});
