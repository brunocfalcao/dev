const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Eduka asset management using Laravel Mix
 |--------------------------------------------------------------------------
 |
 */
mix.copy('resources/js/retina.min.js', 'public/vendor/dev/js')
   .copy('resources/images', 'public/vendor/dev/images')
   .postCss('resources/css/app.css', 'public/vendor/dev/css', [
      require("tailwindcss")
   ]);
