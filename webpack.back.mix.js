const mix = require('laravel-mix');
const webpack = require('webpack');
require('laravel-mix-merge-manifest');

let webpackPlugins = [
    new webpack.ContextReplacementPlugin(
        /moment[\/\\]locale/,
        /(ko)\.js/
    )
];

mix
    .js('resources/js/back/app.js', 'public/js/tocb')
    .extract(['jquery', 'moment', 'bootstrap', 'popper.js'])
    .sass('resources/sass/back/admin-app.sass', 'public/css')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
        moment: 'moment'
    })
    .webpackConfig({
        plugins: webpackPlugins,
        module: {
            rules: [
                {
                    test: /\.jsx?$/,
                    exclude: /(node_modules\/(?!(dom7)\/).*|bower_components)/,
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
        terser: {
            extractComments: false,
        },
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
    mix
        .babel('public/js/tocb/app.js', 'public/js/tocb/app.js')
}
