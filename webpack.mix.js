/**
 * Global Webpack mix
 * Dev Compile > npm --section=front run dev && npm --section=back run dev
 * Prod Compile > npm --section=front run prod && npm --section=back run prod
 * Watch Front > npm --section=front run watch
 */
if (['front', 'back'].includes(process.env.npm_config_section)) {
    require(`${__dirname}/webpack.${process.env.npm_config_section}.mix.js`)
} else {
    console.log(
        '\x1b[41m%s\x1b[0m',
        'Provide correct --section argument to build command: front, back'
    )
    throw new Error('Provide correct --section argument to build command!')
}
