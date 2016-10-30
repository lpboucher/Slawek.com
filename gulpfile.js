var gulp = require('gulp'),
    connect = require('gulp-connect'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat');

gulp.task('connect', function() {
  connect.server({
    root: 'builds/development/',
    livereload: true
  });
});

gulp.task('html', function() {
  gulp.src(['builds/development/*.html',
            'builds/development/css/*.css'])
    .pipe(connect.reload())
});

gulp.task('js', function() {
  gulp.src('components/js/*.js')
    .pipe(concat('script.js'))
    .pipe(gulp.dest('builds/development/js'))
    .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch(['builds/development/*.html',
                'builds/development/css/*.css'], ['html']);
  gulp.watch('components/js/*.js', ['js']);
});

gulp.task('default', ['connect', 'html', 'js', 'watch']);
