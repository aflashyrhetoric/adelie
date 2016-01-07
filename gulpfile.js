var elixir = require('laravel-elixir');

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

elixir(function(mix) {

  // SCSS
  mix.sass(
    ['app.scss'], // Source Files
    'public/css' //Destination folder
  );

  // JS
  mix.scripts(
    // Get this
    'jquery.min.js',
    // And put it here
    'public/js/jquery.js',
    // And look here for it
    'node_modules/jquery/dist/'
  ).scripts(
    // Get these files 
    [
    'foundation.js',
    '*.js'
    ],
    // Put here
    'public/js/vendor.js',
    // Look here for it
    'node_modules/foundation-sites/dist'
  ).scripts(
    ['app.js'],
    'public/js/app.js',
    'resources/assets/js' 
  );

  // IMAGES
  mix.copy(
    'resources/assets/img/**', 
    'public/img/'
  );
});

