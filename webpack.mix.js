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
    .copy('node_modules/semantic-ui/dist/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/semantic-ui/dist/semantic.min.js','public/js/semantic.min.js')
    .copy('node_modules/semantic-ui/dist/themes/default/assets/fonts/icons.woff2', 'public/css/themes/default/assets/fonts/icons.woff2');
