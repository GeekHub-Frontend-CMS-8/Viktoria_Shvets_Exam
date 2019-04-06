let gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('main.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css'));
});
// // Obviously enqueue this new css file "main.css" in your functions.php


// Gulp is watching you and your coding with the command: gulp watch
gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', gulp.series('sass'));
});