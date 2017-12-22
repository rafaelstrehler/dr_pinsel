////////////////////////////////////////////////////////
// main prerequisite
////////////////////////////////////////////////////////

const gulp = require('gulp');

////////////////////////////////////////////////////////
// other prerequisites

const sass = require('gulp-sass'),
    ugly = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber'),
    minify = require('gulp-clean-css'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

////////////////////////////////////////////////////////
// define tasks
////////////////////////////////////////////////////////


////////////////////////////////////
// watched tasks
////////////////////////////////////

gulp.task( 'sass', function() {
    gulp.src('assets/scss/**/*.scss')
        .pipe(plumber())
        .pipe(sass()
            .on('error', sass.logError))
        .pipe(concat('main.css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minify({compatibility: 'ie11'}))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream: true}));

});

gulp.task('js', function() {
    return gulp.src('assets/scripts/**/*.js')
        .pipe(plumber())
        .pipe(concat('js.js'))
        .pipe(ugly())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('assets/js/'))
        .pipe(reload({stream: true}));

});

gulp.task('php', function() {
    return gulp.src('./**/*.php')
        .pipe(reload({stream: true}));
});


////////////////////////////////////
// installation tasks
////////////////////////////////////

gulp.task('jquery', function() {
    return gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(plumber())
        .pipe(gulp.dest('assets/js/'))
});

gulp.task('lightbox:images', function() {
    return gulp.src('node_modules/lightbox2/dist/images/*')
        .pipe(plumber())
        .pipe(gulp.dest('assets/images/'))
});

gulp.task('lightbox:css', function() {
    return gulp.src('node_modules/lightbox2/dist/css/lightbox.css')
        .pipe(plumber())
        .pipe(rename("lightbox.scss"))
        .pipe(gulp.dest('assets/scss/lightbox/'))
});

gulp.task('lightbox:js', function() {
    return gulp.src('node_modules/lightbox2/dist/js/lightbox.js')
        .pipe(plumber())
        .pipe(gulp.dest('assets/scripts/'))
});

gulp.task('slick:js', function() {
    return gulp.src('node_modules/slick-carousel/slick/slick.js')
        .pipe(plumber())
        .pipe(gulp.dest('assets/scripts/'))
});

gulp.task('slick:scss', function() {
    return gulp.src('node_modules/slick-carousel/slick/*.scss')
        .pipe(plumber())
        .pipe(concat("_slick_all.scss"))
        .pipe(gulp.dest('assets/scss/slick/'))
});

gulp.task('bootstrap:scss', function(){
    return gulp.src("node_modules/bootstrap-sass/assets/stylesheets/**")
        .pipe(plumber())
        .pipe(gulp.dest("assets/scss/btstrp/"))
});

gulp.task('bootstrap:fonts', function(){
    return gulp.src("node_modules/bootstrap-sass/assets/fonts/bootstrap/**")
        .pipe(plumber())
        .pipe(gulp.dest("assets/fonts/bootstrap/"))
});

gulp.task('bootstrap:js', function(){
    return gulp.src("node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js")
        .pipe(plumber())
        .pipe(gulp.dest("assets/js/"))
});


////////////////////////////////////////////////////////
// browser task
////////////////////////////////////////////////////////

gulp.task('browser-sync', function(){
    browserSync.init({
        proxy: 'bwabend.dev', // enter vhost here - eg. 'www.deep.dev'  can be found in config.yaml --> apache settings
        port: 3000,
        open: true,
        notify: true
    });
});

////////////////////////////////////////////////////////
// watch task
////////////////////////////////////////////////////////

gulp.task('watch', function(){

    // watch and compile scss/css
    gulp.watch('assets/scss/**/*.scss', ['sass']);

    // watch and compile js
    gulp.watch('assets/scripts/**/*.js', ['js']);

    // watch php/html
    gulp.watch('./**/*.php', ['php']);

});

// set default task
gulp.task('default', ['sass', 'js', 'php', 'watch', 'browser-sync']);

gulp.task('install', [ 'jquery', 'lightbox:images', 'lightbox:css', 'lightbox:js', 'slick:js', 'slick:scss', 'bootstrap:scss', 'bootstrap:js', 'bootstrap:fonts']);