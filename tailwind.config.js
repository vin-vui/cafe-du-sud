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
            // POLICES
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],

                alumni : ['Alumni Sans Inline One'],
                Dela : ['Dela Gothic One'],
                abeezee : ['ABeeZee'],

                alkatra : ['Alkatra'],
            },

            // COULEURS
            colors: {
                'violet-1': '#4A51D9',
                'violet-2': '#6D72D9',
                'violet-3': '#B8BAD9',

                'orange-1': '#FF7E26',
                'orange-2': '#FFBB8C',
                'orange-3': '#FFE1CC',

                'noir-1': '#0C0C0C',

                'gris-1': '#808080',
                'gris-2': '#C0C0C0',

                'gris-orange-1': '#807975',
                'gris-orange-2': '#C0B7B1',

                'gris-bleu-1': '#757680',
                'gris-bleu-2': '#B1B1C0',

                'blanc-1': '#F7F7F7',
                'blanc-orange-1': '#EBE7E4',
                'blanc-bleu-1': '#E4E4EB',

                // FONDS
                'vert-1': '#9DDE7D',
                'rose-1': '#CE73C5',
                'bleu-1': '#73CEC5',
                'jaune-1': '#DFD25C',
                'rouge-1': '#CE7373',
            },
        },
    },

    plugins: [forms, typography, capitalizeFirst],
};
