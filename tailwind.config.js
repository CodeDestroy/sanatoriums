import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto Condensed', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'forest-green': {
                    '50': '#ecffe6',
                    '100': '#d6fec9',
                    '200': '#adfe98',
                    '300': '#7bf95d',
                    '400': '#4fef2c',
                    '500': '#2dd50d',
                    '600': '#1cab05',
                    '700': '#1a890a',
                    '800': '#19660e',
                    '900': '#175611',
                    '950': '#063003',
                },
                'salt': {
                    '50': '#faf9fa',
                    '100': '#f3f2f5',
                    '200': '#e6e4ea',
                    '300': '#d3cfd8',
                    '400': '#b8b1c1',
                    '500': '#9990a5',
                    '600': '#7c7287',
                    '700': '#61596a',
                    '800': '#544d5b',
                    '900': '#47424d',
                    '950': '#29252d',
                },
                'mona-lisa': {
                    '50': '#fdf4f3',
                    '100': '#fde6e3',
                    '200': '#fcd1cc',
                    '300': '#f7a69d',
                    '400': '#f28377',
                    '500': '#e75c4c',
                    '600': '#d43f2e',
                    '700': '#b23123',
                    '800': '#932c21',
                    '900': '#7a2b22',
                    '950': '#42120d',
                },
            }
        },
    },
    plugins: [],
};
