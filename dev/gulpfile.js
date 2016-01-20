var gulp = require('gulp');
	gutil = require('gulp-util'),
	notify = require('gulp-notify'),
	less = require('gulp-less'),
	minifyCSS = require('gulp-minify-css'),
	livereload = require('gulp-livereload');

// Where do you store your LESS files?
var lessDir = '../less';

// Which directory should LESS compile to?
var targetCSSDir = '../css';

// Compile Less
// and save to target CSS directory
gulp.task('css', function () {
    return gulp.src(lessDir + '/*.less')
        .pipe(less({ style: 'compressed' }).on('error', gutil.log))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(livereload({start : true}))
        .pipe(notify('LESS compiled'))
});

// Keep an eye on files for changes...
gulp.task('watch', function () {
	livereload.listen();
    gulp.watch(lessDir + '/*.less', ['css']);
});

// What tasks does running gulp trigger?
gulp.task('default', ['css', 'watch']);