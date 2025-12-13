import { defineConfig } from 'vite';
import laravel, { refreshPaths } from "laravel-vite-plugin";
import tailwindcss from '@tailwindcss/vite';


export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            // refresh: true,
            refresh: [
                {
                    paths: ["resources/views/**"],
                    config: { delay: 300 },
                },
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host: "0.0.0.0",
        port: 5174,
        hmr: {
            host: "localhost",
        },
    },
});
