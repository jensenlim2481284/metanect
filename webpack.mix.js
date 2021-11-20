const mix = require('laravel-mix');



/************************************************ 
    
                    WEBSITE

************************************************/


mix.styles([
    'public/css/plugin/animate.min.css',
    'public/css/plugin/bootstrap.min.css',
    'public/css/plugin/themify.css',
    'public/css/page/general.css',
    'public/css/page/website/index.css',
    'public/css/plugin/unicons.css',
], 'public/css/prod/website/index.min.css');

mix.scripts([
    'public/js/plugin/jquery.min.js',
    'public/js/plugin/sweetalert.min.js',
    'public/js/plugin/wow.min.js',
    'public/js/plugin/fontfile.js',
    'public/js/page/general.js',
], 'public/js/prod/website/index.min.js')