import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: 'Playfair Display',
                body: 'work sans',
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            container: {
                padding: {
                    DEFAULT: "1rem",
                    lg: "3rem",
                },
            },
            colors: {
                "light-primary": "#FCF9EC",
                "light-secondary": "#B0F4E6",
                "tail-100": "#67EACA",
                "tail-200": "#67EACA", 
                "dark-primary": "#283149",
                "dark-secondary": "#404B69",
                "tail-d100": "#00818A",
                "tail-d200": "#DBEDF3", 
                accent: {
                    DEFAULT: "#ac6b34",
                    hover: "#925a2b",
                },
                paragraph: "#878e99",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
                yellow: colors.yellow,
            },

        },
    },

    plugins: [forms],
};
