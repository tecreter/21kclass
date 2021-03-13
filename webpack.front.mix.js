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

    .copy('resources/sass/front/*.*', 'public/css')
    .copy('resources/webfonts/*.*', 'public/webfonts')

    .copy('resources/images/', 'public/images/', false)

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
