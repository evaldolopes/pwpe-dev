import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],

            // Full page reload on file changes
            refresh: [
                "resources/views/**/*.blade.php",
                "resources/**/*.html",
                "routes/**",
                "lang/**",
                "app/Http/Controllers/**",
            ],
        }),
        tailwindcss(),
    ],

    server: {
        host: "localhost",
        port: 5173,
        hmr: {
            host: "localhost",
            port: 5173,
        },
    },

    css: {
        devSourcemap: true,
    },
});
