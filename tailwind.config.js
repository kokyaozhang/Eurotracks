const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            'dada': {
                100: '#255695',

            },
            // ...
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'print': {'raw': 'print,(min-width: 1024px)'},
                // => @media  print { ... }
            }

        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

};
