const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/main.scss', 'public/css/oneui.css')
    .sass('resources/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/city.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/flat.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/modern.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/smooth.scss', 'public/css/themes/')
    .js('resources/js/app.js', 'public/js/laravel.app.js')
    .js('resources/js/oneui/app.js', 'public/js/oneui.app.js')
    .js('resources/js/oneui/oneui.core.min.js', 'public/js/oneui.core.min.js')

    /* Page JS */
    .js('resources/js/pages/tables_datatables.js', 'public/js/pages/tables_datatables.js')
    .js('resources/js/pages/calendar.min.js', 'public/js/pages/calendar.min.js')

    /* Tools */
    .browserSync('http://localhost:8088')

    /* Options */
    .options({
        processCssUrls: false
    });
