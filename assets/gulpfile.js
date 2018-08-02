var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var sourcemaps = require('gulp-sourcemaps');
var minify = require('gulp-minify');
var concat = require('gulp-concat');
var path = require('path');

var sassPaths = [
    'bower_components/foundation-sites/scss',
    'bower_components/motion-ui/src'
];

var CONFIG = require('./config.js');
var JS_DIR = 'bower_components/foundation-sites/dist/js/plugins';

gulp.task('sass', function () {
    return gulp.src('scss/app.scss')
        .pipe($.sass({
            includePaths: sassPaths,
            outputStyle: 'compressed' // if css compressed **file size**
        })
            .on('error', $.sass.logError))
        .pipe($.autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9', 'safari >= 8']
        }))
        .pipe(gulp.dest('../css'));
});

gulp.task('sass-devel', function () {
    return gulp.src('scss/app.scss')
        .pipe(sourcemaps.init())
        .pipe($.sass({
            includePaths: sassPaths,
            outputStyle: 'compressed' // if css compressed **file size**
        })
            .on('error', $.sass.logError))
        .pipe($.autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9', 'safari >= 8']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('../css'));
});

gulp.task('javascript:foundation', function () {
    var JS_FILES = CONFIG.JS_FILES.map(function (item) {
        return path.join(JS_DIR, item)
    });
    return gulp.src(JS_FILES)
        .pipe(concat('foundation.js'))
        .pipe(gulp.dest('../js'));
});


gulp.task('compress', function () {
    var files = [
        'js/app.js'
    ];

    return gulp.src(files)
        .pipe(concat('app.js'))
        .pipe(gulp.dest('../js'))
        .pipe(minify())
        .pipe(gulp.dest('../js'));
});


gulp.task('default', ['build'], function () {
    gulp.watch(['scss/**/*.scss'], ['sass']);
    gulp.watch(['js/**/*.js'], ['compress']);
});

gulp.task('build', ['sass', 'javascript:foundation', 'compress']);
