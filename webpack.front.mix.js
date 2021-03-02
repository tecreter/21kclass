const mix = require('laravel-mix');
const webpack = require('webpack');
require('laravel-mix-merge-manifest');

let webpackPlugins = [];
webpackPlugins = [
    new webpack.ContextReplacementPlugin(
        /moment[\/\\]locale/,
        /(ko)\.js/
    )
];

mix
    .copy('resources/js/front/vendor.min.js', 'public/js')
    .copy('resources/js/front/theme.min.js', 'public/js')
    .js('resources/js/front/app.js', 'public/js')
    // .js('resources/js/front/inquiry.js', 'public/js/tdx')
    // .js('resources/js/front/travel.js', 'public/js/tdx')
    // .js('resources/js/front/golf.js', 'public/js/tdx')
    // .js('resources/js/front/driver.js', 'public/js/tdx')
    // .js('resources/js/front/driver_day.js', 'public/js/tdx')
    // .js('resources/js/front/driver_year.js', 'public/js/tdx')
    // .js('resources/js/front/ski.js', 'public/js/tdx')
    // .js('resources/js/front/water.js', 'public/js/tdx')
    // .js('resources/js/front/hiking.js', 'public/js/tdx')
    // .js('resources/js/front/app.js', 'public/js/tdx')

    // .extract(['jquery', 'moment'])

    // .sass('resources/sass/front/app.scss', 'public/css/app.min.css')
    .copy('resources/css/vendor.min.css', 'public/css')
    .copy('resources/css/theme.min.css', 'public/css')
    .copy('resources/webfonts/*.*', 'public/webfonts')

    .copy('resources/images/100x100/*.*', 'public/images/100x100')
    .copy('resources/images/160x160/*.*', 'public/images/160x160')
    .copy('resources/images/400x500/*.*', 'public/images/400x500')
    .copy('resources/images/407x867/*.*', 'public/images/407x867')
    .copy('resources/images/450x450/*.*', 'public/images/450x450')
    .copy('resources/images/480x320/*.*', 'public/images/480x320')
    .copy('resources/images/515x515/*.*', 'public/images/515x515')
    .copy('resources/images/750x600/*.*', 'public/images/750x600')
    .copy('resources/images/750x750/*.*', 'public/images/750x750')
    .copy('resources/images/900x450/*.*', 'public/images/900x450')
    .copy('resources/images/900x900/*.*', 'public/images/900x900')
    .copy('resources/images/1920x800/*.*', 'public/images/1920x800')
    .copy('resources/images/course/*.*', 'public/images/course')
    .copy('resources/images/logos/*.*', 'public/images/logos')
    .copy('resources/images/mockups/*.*', 'public/images/mockups')
    .copy('resources/images/others/*.*', 'public/images/others')

    .copy('resources/svg/brands/*.*', 'public/svg/brands')
    .copy('resources/svg/components/*.*', 'public/svg/components')
    .copy('resources/svg/icons/*.*', 'public/svg/icons')
    .copy('resources/svg/illustrations/*.*', 'public/svg/illustrations')

    // .autoload({
    //     jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
    //     moment: 'moment'
    // })
    .webpackConfig({
        plugins: webpackPlugins,
        module: {
            rules: [
                {
                    test: /\.jsx?$/,
                    exclude: /(node_modules\/(?!(dom7|swiper)\/).*|bower_components)/,
                    use: [
                        {
                            loader: 'babel-loader',
                            options: Config.babel()
                        }
                    ]
                }
            ]
        }
    })
    .options({
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true,
                    drop_debugger: true
                },
                mangle: true,
                output: {
                    comments: false,
                    beautify: false
                }
            }
        }
    })
    .browserSync({
        proxy: 'http://localhost:8000',
        host: 'localhost',
        port: 3100,
        ghostMode: false,
        notify: false,
        open: true,
        watchOptions: {
            usePolling: false
        },
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    })
    .mergeManifest()
    .version();

// Convert to ES5 only for Production
if(mix.inProduction()) {
    // mix
    //     .babel('public/js/tdx/common.js', 'public/js/tdx/common.js')
    //     .babel('public/js/tdx/event.js', 'public/js/tdx/event.js')
    //     .babel('public/js/tdx/inquiry.js', 'public/js/tdx/inquiry.js')
    //     .babel('public/js/tdx/travel.js', 'public/js/tdx/travel.js')
    //     .babel('public/js/tdx/golf.js', 'public/js/tdx/golf.js')
    //     .babel('public/js/tdx/driver.js', 'public/js/tdx/driver.js')
    //     .babel('public/js/tdx/driver_day.js', 'public/js/tdx/driver_day.js')
    //     .babel('public/js/tdx/driver_year.js', 'public/js/tdx/driver_year.js')
    //     .babel('public/js/tdx/ski.js', 'public/js/tdx/ski.js')
    //     .babel('public/js/tdx/water.js', 'public/js/tdx/water.js')
    //     .babel('public/js/tdx/hiking.js', 'public/js/tdx/hiking.js')
    //     .babel('public/js/tdx/app.js', 'public/js/tdx/app.js')
}
