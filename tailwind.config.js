import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Jost', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'peach': '#E7816B',
                'light-peach': '#FFAD9B',
                'dark-gray': '#333136',
                'light-gray': '#F1F3F5',
            },
            animation: {
                'slow-move': 'moveBackground 20s linear infinite',
            },
            keyframes: {
                moveBackground: {
                    '0%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                    '100%': { backgroundPosition: '0% 50%' },
                },
            },
        },
    },

    plugins: [forms],
};
