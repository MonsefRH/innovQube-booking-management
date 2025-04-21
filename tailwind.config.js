import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        
    ],
    theme: {
        extend: {
            colors: {
                primary: '#213448',
                secondary: '#9333EA',
                background:"#94B4C1"
            },
        },
    },
    plugins: [],
}
