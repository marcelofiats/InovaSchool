const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('node_modules/cleave.js/dist/cleave.min.js', 'public/js')
   .js('node_modules/cleave.js/dist/addons/cleave-phone.br.js', 'public/js');

mix.js('node_modules/jquery/dist/jquery.min.js', 'public/js');
