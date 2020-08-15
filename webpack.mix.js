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
    .copyDirectory(['resources/assets/app'], 'public/app')
    /*.copyDirectory(['resources/assets/admin'], 'public/admin')*/
    .styles([
        'resources/assets/admin/css/base_css/bootstrap.min.css',
        'resources/assets/admin/css/app/plugin/bootstrap-rtl/bootstrap-rtl.min.css',
        'resources/assets/admin/css/base_css/font-awesome.css',
        'resources/assets/admin/css/base_css/animate.css',
        'resources/assets/admin/css/base_css/style.css',
        'resources/assets/admin/css/base_css/base_style.css'

    ], 'public/admin/css/base_css_admin/admin_base_css.css')
    .scripts([
    'resources/assets/admin/js/base_js/jquery-2.1.1.js',
    'resources/assets/admin/js/base_js/bootstrap.min.js'
], 'public/admin/js/base_js/base_admin_js.js')

    .scripts([
        'resources/assets/admin/js/base_js/inspinia.js'
    ],'public/admin/js/main.js')
    .sass('resources/sass/app.scss', 'public/css');
