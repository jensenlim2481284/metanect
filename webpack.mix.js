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




/*****************************************************

                 MERCHANT WEBPACK

*****************************************************/

mix.styles(
    [
        "public/css/plugin/introjs.min.css",
        "public/css/plugin/introjs/introjs-flattener.css",
        "public/css/plugin/slick.css",
        "public/css/plugin/animation.css",
        "public/css/plugin/slick-theme.css",
        "public/css/page/merchant/tour.css",
        "public/css/page/merchant/nav.css",
        "public/css/page/merchant/index.css",
        "public/css/page/general.css"
    ],
    "public/css/prod/merchant/index.css"
);

mix.styles(
    [
        "public/css/plugin/chart.min.css",
        "public/css/page/component/panel.css",
        "public/css/page/merchant/report.css"
    ],
    "public/css/prod/merchant/report.css"
);

mix.styles(
    [
        "public/css/plugin/slick.css",
        "public/css/plugin/slick-theme.css",
        "public/css/page/merchant/onboarding.css"
    ],
    "public/css/prod/merchant/onboarding.min.css"
);



mix.styles(
    [
        "public/css/plugin/chart.min.css",
        "public/css/page/component/panel.css",
        "public/css/page/merchant/dashboard.css",
        "public/css/page/merchant/onboarding.css"
    ],
    "public/css/prod/merchant/dashboard.css"
);

mix.scripts(
    ["public/js/plugin/chart.min.js"],
    "public/js/prod/merchant/report.js"
);

mix.scripts(
    [
        "public/js/plugin/scrollbooster.min.js",
        "public/js/plugin/intro.min.js",
        "public/js/plugin/wow.min.js",
        "public/js/plugin/slick.min.js",
        "public/js/page/merchant/nav.js",
        "public/js/page/merchant/index.js",
        "public/js/page/general.js"
    ],
    "public/js/prod/merchant/index.js"
);


mix.scripts(
    ["public/js/page/merchant/dashboard.js", "public/js/plugin/chart.min.js"],
    "public/js/prod/merchant/dashboard.js"
);




/*****************************************************

                 ECOMMERCE WEBPACK

*****************************************************/

mix.styles(
    [
        "public/css/plugin/animation.css",
        "public/css/page/component/modal.css",
        "public/css/page/ecommerce/index.css",
        "public/css/plugin/slick.css",
        "public/css/plugin/slick-theme.css"
    ],
    "public/css/prod/ecommerce/index.min.css"
);


mix.scripts(
    [
        "public/js/plugin/wow.min.js",
        "public/js/page/general.js",
        "public/js/plugin/slick.min.js",
    ],
    "public/js/prod/ecommerce/index.min.js"
);



/*****************************************************

                 COMPONENT WEBPACK

*****************************************************/

mix.styles(
    [
        "public/css/page/component/modal.css",
        "public/css/plugin/uploadBox.css",
        "public/css/plugin/flatpickr.min.css",
        "public/css/page/component/table.css"
    ],
    "public/css/prod/component/table.css"
);

mix.scripts(
    [
        "public/js/page/component/table.js",
        "public/js/plugin/flatpickr.min.js",
        "public/js/plugin/uploadBox.js",
    ],
    "public/js/prod/component/table.js"
);

mix.styles(
    [
        "public/css/page/component/chart.css",
        "public/css/plugin/chartjs.min.css"
    ],
    "public/css/prod/component/chartjs.min.css"
);

mix.scripts(
    ["public/js/plugin/chartjs.min.js"],
    "public/js/prod/component/chartjs.min.js"
);

mix.scripts(
    [
        "public/js/plugin/jquery.min.js",
        "public/js/plugin/popper.min.js",
        "public/js/plugin/bootstrap.min.js",
        "public/js/plugin/sweetalert.min.js",
        "public/js/plugin/jquery.nicescroll.min.js",
        "public/js/plugin/progressbar.min.js",
        "public/js/plugin/loadash.min.js",
        "public/js/plugin/loaddash.js",
        "public/js/plugin/toastify.js",
        "public/js/plugin/tooltipster.bundle.min.js",
        "public/js/plugin/jquery.lazy.min.js"
    ],
    "public/js/prod/component/index_preload.js"
);

mix.styles(
    [
        "public/css/plugin/themify/themify.css",
        "public/css/plugin/animate.min.css",
        "public/css/plugin/toastify.css",
        "public/css/plugin/bootstrap.min.css",
        "public/css/plugin/tooltipster.bundle.min.css",
        "public/css/plugin/fontawesome/fontawesome.css"
    ],
    "public/css/prod/component/index_preload.css"
);
