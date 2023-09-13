import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        // --tw-ring-color
        extend: {
            colors: {
                // 元件樣式
                'Theme-Primart': '#0aad0a',
                'Theme-Secondary': '#889397',
                'Theme-Success': '#198754',
                'Theme-Danger': '#db3030',
                'Theme-Warning': '#ffc107',
                'Theme-Info': '#016bf8',
                'Theme-Light': '#f0f3f2',
                'Theme-Dark': '#001e2b',

                // 灰色深度
                'Gary-100': '#f0f3f2',
                'Gary-200': '#ecf0ef',
                'Gary-300': '#dfe2e1',
                'Gary-400': '#c1c7c6',
                'Gary-500': '#889397',
                'Gary-600': '#5c6c75',
                'Gary-700': '#3d4f58',
                'Gary-800': '#21313c',
                'Gary-900': '#001e2b',

                // 淺色系
                'Light-Primary': '#ceefce',
                'Light-Success': '#d1e7dd',
                'Light-Danger': '#f8d6d6',
                'Light-Warning': '#fff3cd',
                'Light-Info': '#cce1fe',

                // 字體顏色
                'Dark-Primary': '#044504',
                'Dark-Success': '#0a3622',
                'Dark-Danger': '#581313',
                'Dark-Warning': '#664d03',
                'Dark-Info': '#002b63',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
};
