// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');


mix.js('resources/js/app.js', 'public/js')
.postCss('resources/css/app.css', 'public/css', [

    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])
.sass('resources/sass/app.scss', 'public/css');
if (mix.inProduction()) {
    mix.version();
}
