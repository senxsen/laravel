const elixir = require('laravel-elixir');
// gulp
var gulp           = require('gulp'),
    gulpUglify     = require('gulp-uglify'),
    gulpSass       = require('gulp-sass'),
    gulpPlumber    = require('gulp-plumber'),
    gulpLivereload = require('gulp-livereload'),
    gulpImagemin   = require('gulp-imagemin'),
    gulpNotify     = require("gulp-notify"),
    gulpFilesize   = require('gulp-filesize'),
    gulpConcat     = require('gulp-concat'),
    gulpUtil       = require('gulp-util'),
    gulpMinifyCSS  = require('gulp-minify-css'),
    gulpRename     = require('gulp-rename'),
    gulpCleanCSS   = require('gulp-clean-css'),
    gulpCSSMin     = require('gulp-cssmin'),
    gulpCompass    = require('gulp-compass');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |gulp.task('default', function () {
 //    // elixir(function(mix) {
 //    //    mix.sass('app.scss')
 //    //        .webpack('app.js');
 //    // });
 //
 // });
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// Laravel Elixir
// 一般 : gulp
// 壓縮 : gulp --production

elixir(function(mix) {
    mix.sass('app.scss')
        .webpack('app.js');
    mix.version([
        'css/app.css',
        'js/app.js'
    ]);
});

// Gulp 方式
// css : gulp css

var sassPath = './resources/assets/sass/',
    cssPublicPath = './public/css/',
    jsPublicPath = './public/js/';

gulp.task('css', function(){
   gulp.src(sassPath + 'app.scss')
       .pipe(gulpSass())
       .pipe(gulpCSSMin())
       .pipe(gulp.dest(cssPublicPath))
       .pipe(gulpNotify('sass整合與壓縮css已完成!'));
});






