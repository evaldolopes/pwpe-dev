import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                /*
                 * Paleta inspirada no logo Portal Web PE:
                 * 500/600 = azul aço médio do cabeçalho do site
                 * 700/800 = azul marinho do texto da logomarca
                 */
                brand: {
                    50:  "#eef7fc",
                    100: "#d4ecf6",
                    200: "#a8d8ec",
                    300: "#7BBDDD",
                    400: "#4BA4CE",
                    500: "#2487B8", // azul aço (cor principal)
                    600: "#1F76A0",
                    700: "#1A4D7B", // navy do logo
                    800: "#133456",
                    900: "#0F2845",
                },
                accent: {
                    50:  "#fff4ed",
                    100: "#ffe4d1",
                    200: "#ffc7a3",
                    300: "#ffa66d",
                    400: "#ff8c4a",
                    500: "#ff6b1a", // laranja vibrante para CTAs
                    600: "#e55a0e",
                    700: "#bd470a",
                    800: "#923708",
                    900: "#6e2906",
                },
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
