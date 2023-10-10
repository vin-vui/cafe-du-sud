import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';



const plugin = require('tailwindcss/plugin')
const capitalizeFirst = plugin(function ({ addUtilities }) {
  const newUtilities = {
    '.capitalize-first:first-letter': {
      textTransform: 'uppercase',
    },
  }
  addUtilities(newUtilities, ['responsive', 'hover'])
})

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

                alumni : ['Alumni Sans Inline One'],
                alkatra : ['Alkatra'],
                abeezee : ['ABeeZee'],
            },
        },
    },

    plugins: [forms, typography],
};
