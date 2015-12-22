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

    mix.sass(
      ['vendor.scss', 'settings.scss', 'app.scss', 
      'home_sections/**'], // Source Files
      'public/css' //Destination folder
    );

    mix.scripts(
      'jquery.min.js',
      'public/js/jquery.js',
      'node_modules/jquery/dist/'
    ).scripts(
      [
      'foundation.core.js',
      '*.js'
      ],
      'public/js/vendor.js',
      'node_modules/foundation-sites/js/'
    ).scripts(
      ['app.js'],
      'public/js/app.js',
      'resources/assets/js' 
    );
});
