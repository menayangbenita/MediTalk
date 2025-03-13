import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.bundle.css', 'resources/js/scripts.bundle.js', 'resources/plugins/global/plugins.bundle.js', 'resources/plugins/global/plugins.bundle.css'],
            refresh: true,
        }),
    ],
});
