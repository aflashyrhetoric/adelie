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
      'app.scss', // Source Files
      'public/css', //Destination folder
      {includePaths: ['components/foundation/scss/']}
    );

    // mix.scripts(
    //   ['node_modules/foundation-sites/js'],
    //   'public/js/app.js',
    //   'node_modules_'
    // );
});
