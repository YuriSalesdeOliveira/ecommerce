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

mix

    /**
     * SITE
     */

    .styles([
        'resources/views/site/assets/css/reset.css',
        'resources/views/site/assets/css/color.css',
        'resources/views/site/assets/css/main.css'
    ], 'public/site/assets/css/style.css')
    
    /**
     * DASHBOARD
     */

    .sass('resources/views/dashboard/assets/scss/bootstrap.scss',
        'public/dashboard/assets/css/bootstrap.css')

    .scripts('node_modules/jquery/dist/jquery.js',
        'public/dashboard/assets/js/jquery.js')

    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'public/dashboard/assets/js/bootstrap.js');
