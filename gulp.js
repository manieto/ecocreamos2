var gulp = require('gulp'),
    gp_concat = require('gulp-concat'),
    gp_rename = require('gulp-rename'),
    gp_uglify = require('gulp-uglify'),
    gp_sourcemaps = require('gulp-sourcemaps');

gulp.task('js-fef', function(){
    return gulp.src(['file1.js', 'file2.js', 'file3.js'])
        .pipe(gp_sourcemaps.init())
        .pipe(gp_concat('concat.js'))
        .pipe(gulp.dest('dist'))
        .pipe(gp_rename('uglify.js'))
        .pipe(gp_uglify())
        .pipe(gp_sourcemaps.write('./'))
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['js-fef'], function() {
  // place code for your default task here
});