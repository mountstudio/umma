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
mix.js('node_modules/chart.js/dist/Chart.js', 'public/js');
mix.js('node_modules/@editorjs/editorjs/dist/editor.js','public/js');
mix.js('resources/js/index.js', 'public/js/editor-conf.js');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/main.scss', 'public/css');
mix.browserSync('umma');
