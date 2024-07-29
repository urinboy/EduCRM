import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/css/navbar.css',
                'resources/css/sidebar.css',
                'resources/css/animate.min.css',
                'resources/js/app.js',
                'resources/js/alert.js',
                'resources/js/addressUpdate.js',
                'resources/js/photoUpdate.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
