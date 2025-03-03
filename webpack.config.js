const { assertSupportedNodeVersion } = require('../src/Engine');
const tailwindcss = require('tailwindcss');
module.exports = async () => {
    // @ts-ignore
    process.noDeprecation = true;

    assertSupportedNodeVersion();

    const mix = require('../src/Mix').primary;
    mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();

    return mix.build();
};
