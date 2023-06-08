import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        // colors:{
        //     'blue': '#1d9bf0',
        //     'yellow': '#ffd400',
        //     'pink': '#f91880',
        //     'purple': '#7856ff',
        //     'orange': '#ff7a00',
        //     'green': '#00ba7c',
        //     'dark': '#15202b',
        //     'superdark': '#000000'
        //     },
        },
    },
    daisyui: {
        themes: [
        "light", 
        "dark", 
        "cupcake", 
        "emerald",
        "cyberpunk"
        ],
    },
    plugins: [
        forms,
        typography,
        require("daisyui")
        // plugin(function({addVariant}) {
        //     // here is your CSS selector - could be anything
        //     // in this case it is `.theme` element
        //     // with `.theme--red` class (both present)
        //     addVariant('theme-red', '.theme.theme--red &')
      
        //     // and so on
        //     addVariant('theme-green', '.theme.theme--green &')
        //     addVariant('purple', '.theme.purple &')
        // })
    ],
};