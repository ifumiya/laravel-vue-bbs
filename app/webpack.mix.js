const mix = require('laravel-mix');
const webpack = require('webpack');

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

if (Mix.isUsing('hmr')) {
    mix.webpackConfig({
        output: {
            path: '/',
        },
        devServer: {
            overlay: true,
            proxy: {
                    '/':'http://localhost:2000/'
            },
        },
    });
}

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
