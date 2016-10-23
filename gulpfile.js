var gulp = require('gulp'),
    connect = require('gulp-connect');

gulp.task('connect', function() {
  connect.server({
    root: 'builds/development/',
    livereload: true
  });
});

gulp.task('html', function() {
  gulp.src('builds/development/*.html')
    .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch('builds/development/*.html', ['html']);
});

gulp.task('default', ['connect', 'watch']);
