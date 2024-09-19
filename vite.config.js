// vite.config.js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"], // Cambia 'resources/sass/app.scss' a 'resources/css/app.css'
            refresh: true,
        }),
    ],
});
