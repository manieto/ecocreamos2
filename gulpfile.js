var gulp = require('gulp'),
    gp_concat = require('gulp-concat'),
		gp_addsrc = require('gulp-add-src'),
    gp_rename = require('gulp-rename'),
    gp_uglify = require('gulp-uglify'),
    gp_sourcemaps = require('gulp-sourcemaps')
		del = require('del');

gulp.task('js-basic-1', ['deldist'], function(){
    return                gulp.src('assets/plugins/jquery/jquery.js')
						.pipe(gp_addsrc.append('assets/plugins/jquery/jquery-migrate.js'))
						.pipe(gp_addsrc.append('assets/plugins/bootstrap/js/bootstrap.js'))
						.pipe(gp_addsrc.append('assets/plugins/back-to-top.js'))
						.pipe(gp_addsrc.append('assets/plugins/smoothScroll.js'))
						.pipe(gp_addsrc.append('assets/plugins/fancybox/source/jquery.fancybox.pack.js'))
        .pipe(gp_concat('ecocreamos-basic-1.js'))
        .pipe(gulp.dest('dist/'));
});

gulp.task('js-basic-2', ['deldist'], function(){
    return gulp.src(['assets/js/app.js'
								   , 'assets/js/plugins/fancy-box.js'])
        .pipe(gp_sourcemaps.init())
        .pipe(gp_concat('concat-basic.js'))
        .pipe(gulp.dest('temp'))
        .pipe(gp_rename('ecocreamos-basic-2.js'))
        //.pipe(gp_uglify())
        .pipe(gp_sourcemaps.write('./'))
        .pipe(gulp.dest('dist/'));
});

gulp.task('js-slider', ['deldist'], function(){
    return gulp.src(['assets/plugins/layer-slider/layerslider/js/greensock.js'
		               , 'assets/plugins/layer-slider/layerslider/js/layerslider.transitions.js'
									 , 'assets/plugins/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js'])
        .pipe(gp_sourcemaps.init())
        .pipe(gp_concat('concat-slider.js'))
        .pipe(gulp.dest('temp'))
        .pipe(gp_rename('ecocreamos-slider.js'))
        //.pipe(gp_uglify())
        .pipe(gp_sourcemaps.write('./'))
        .pipe(gulp.dest('dist/'));
});

gulp.task('js-maps', ['deldist'], function(){
    return gulp.src(['assets/plugins/gmap/gmap.js'
		               , 'assets/js/maps.js'])
        .pipe(gp_sourcemaps.init())
        .pipe(gp_concat('concat-maps.js'))
        .pipe(gulp.dest('temp'))
        .pipe(gp_rename('ecocreamos-maps.js'))
        //.pipe(gp_uglify())
        .pipe(gp_sourcemaps.write('./'))
        .pipe(gulp.dest('dist/'));
});

gulp.task('deldist', function(){
		del('dist');
});

gulp.task('deltemp', ['js-basic-1', 'js-basic-2','js-slider', 'js-maps'], function(){
		del('temp');
});

gulp.task('default', ['deltemp'], function() {
  // place code for your default task here
});
