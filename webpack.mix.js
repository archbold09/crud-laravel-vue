const mix = require('laravel-mix');

mix.scripts([
    'resources/js/jquery.js',
    'resources/js/bootstrap.js',
    'resources/js/toastr.js',
    'resources/js/vue.js',
    'resources/js/axios.js',
    'resources/js/app.js',
], 'public/js/app.js')

.styles([
    'resources/sass/bootstrap.css',
    'resources/sass/toastr.css',
],'public/css/app.scss')
;
