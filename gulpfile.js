var gulp = require('gulp');

gulp.src(
    [
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js'
    ]
).pipe(gulp.dest('resources/assets/js'));

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
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass([
        'app.scss'
    ]);

    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js'
    ]);

    mix.version([
        'css/app.css',
        'js/jquery.min.js',
        'js/bootstrap.min.js'
    ]);
});