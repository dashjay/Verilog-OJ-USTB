const mix = require('laravel-mix');
require('laravel-mix-alias');
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


mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources'),
        }
    }
});


mix.js('resources/pages/index.js', 'public/js');
