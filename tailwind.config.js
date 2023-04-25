const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundColor: {
                'custom-pink': '#F48FB1', // カスタムピンクの色を定義
                'custom-hover-pink': '#F8BBD0', 
              },
            colors:{
                'my-yellow': '#FFF59D',
                'my-deepyellow': '#FFEB3B',
                'my-blue': '#1E40AF',
                'my-gray': '#BDBDBD',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
