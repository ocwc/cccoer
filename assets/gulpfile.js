var gulp = require('gulp');
var $    = require('gulp-load-plugins')();
var sourcemaps = require('gulp-sourcemaps');
var minify = require('gulp-minify');
var concat = require('gulp-concat');

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('../css'));
});

gulp.task('sass-devel', function() {
  return gulp.src('scss/app.scss')
    .pipe(sourcemaps.init())
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('../css'));
});

gulp.task('compress', function() {
  var files = [
    'bower_components/what-input/what-input.js',
    'bower_components/foundation-sites/dist/foundation.js',
    'bower_components/macy/dist/macy.js', 'js/app.js'
  ];

  return gulp.src(files)
    .pipe(concat('app.js'))
    .pipe(gulp.dest('../js'))
    .pipe(minify())
    .pipe(gulp.dest('../js'));
});


gulp.task('default', ['sass-devel', 'compress'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
});

gulp.task('build', ['sass', 'compress']);
