import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    theme: {
        extend: {
            colors: {
                brand: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#1a5ea8", // ← azul principal, ajuste aqui
                    600: "#164f8f",
                    700: "#113d70",
                    800: "#0c2d52",
                    900: "#071e35",
                },
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
