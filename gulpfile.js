var gulp = require('gulp'),
    connect = require('gulp-connect'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass');

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

gulp.task('sass', function() {
    gulp.src(['components/sass/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('builds/development/css'))
    .pipe(connect.reload())
})

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
  gulp.watch('components/sass/*.scss', ['sass']);
});

gulp.task('default', ['connect', 'html', 'sass', 'js', 'watch']);
