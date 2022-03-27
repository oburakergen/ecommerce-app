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

mix.options({
    processCssUrls: true,
    purifyCss: false,
    postCss: [require('autoprefixer')],
    clearConsole: true,
    cssNano: {
        discardComments: {
            removeAll: true,
        },
    },
});

mix.js('resources/js/app.js', 'public/js').js('resources/js/custom.js', 'public/js')
    .js('resources/js/admin-custom.js', 'public/js')
    .copyDirectory('resources/js/plugins-external', 'public/js/plugin')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/font-awesome.min.css', 'public/css')
    .copyDirectory('resources/css/skins','public/skins').copyDirectory('resources/images/agency','public/images/agency');

mix.version();
mix.sourceMaps();
