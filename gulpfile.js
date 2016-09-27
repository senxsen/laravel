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

// require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

gulp.task('test', function(){
   gulp.src('resources/assets/sass/app.scss')
       .pipe(gulpUglify)
       .pipe(gulp.dest('public/css/app.css'));
});

// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });


