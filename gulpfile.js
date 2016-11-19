var gulp = require('gulp'),
    php = require('gulp-connect-php'),
    browserify = require('gulp-browserify'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync');

gulp.task('php', function() {
  php.server({ base: 'builds/development/', port: 8010, keepalive: true})
});

gulp.task('browser-sync', ['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8010',
        port: 8030,
        open: true,
        notify: false
    });
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('sass', function() {
    gulp.src(['components/sass/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('builds/development/css'))
    .pipe(browserSync.reload({stream: true}));
})

gulp.task('js', function() {
  gulp.src('components/js/*.js')
    .pipe(concat('script.js'))
    .pipe(gulp.dest('builds/development/js'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('components/js/*.js', ['js']);
  gulp.watch('components/sass/*.scss', ['sass'])
  gulp.watch(['builds/development/*.html',
                'builds/development/css/*.css',
                'builds/development/*.php'], ['bs-reload']);
});

gulp.task('default', ['sass', 'js', 'watch']);
