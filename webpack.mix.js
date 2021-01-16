let mix = require('laravel-mix');

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
//FRONT
mix.styles([
    'resources/assets/orange/css/bootstrap.min.css',
    'resources/assets/orange/css/animate.min.css',
    'resources/assets/orange/css/meanmenu.css',
    'resources/assets/orange/css/boxicons.min.css',
    'resources/assets/orange/css/flaticon.css',
    'resources/assets/orange/css/nice-select.min.css',
    'resources/assets/orange/css/owl.carousel.min.css',
    'resources/assets/orange/css/owl.theme.default.min.css',
    'resources/assets/orange/css/odometer.min.css',
    'resources/assets/orange/css/magnific-popup.min.css',
    'resources/assets/orange/css/responsive.css',
    'resources/assets/orange/css/style.css'
], 'public/assets/orange/css/style.css');
mix.scripts([
    'resources/assets/orange/js/jquery.min.js',
    'resources/assets/orange/js/bootstrap.min.js',
    'resources/assets/orange/js/popper.min.js',
    'resources/assets/orange/js/jquery.meanmenu.js',
    'resources/assets/orange/js/jquery.nice-select.min.js',
    'resources/assets/orange/js/owl.carousel.min.js',
    'resources/assets/orange/js/jquery.magnific-popup.min.js',
    'resources/assets/orange/js/odometer.min.js',
    'resources/assets/orange/js/jquery.appear.min.js',
    'resources/assets/orange/js/jquery.ajaxchimp.min.js',
    'resources/assets/orange/js/form-validator.min.js',
    'resources/assets/orange/js/contact-form-script.js',
    'resources/assets/orange/js/wow.min.js',
    'resources/assets/orange/js/main.js'
], 'public/assets/orange/js/main.js');
mix.copyDirectory('resources/assets/orange/img',    'public/assets/orange/img');
mix.copyDirectory('resources/assets/orange/fonts',    'public/assets/orange/fonts');


//ADMIN
mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.css',
    'resources/assets/admin/css/adminlte.css',
    'resources/assets/admin/plugins/toastr/toastr.css',
], 'public/assets/admin/css/admin.css');
mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/plugins/toastr/toastr.min.js',
    'resources/assets/admin/js/demo.js',
    'resources/assets/admin/js/pages/dashboard.js',

], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts',    'public/assets/admin/webfonts');
mix.copyDirectory('resources/assets/admin/img',    'public/assets/admin/img');
