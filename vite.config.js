import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/bootstrap-4.3.1.css',
                'resources/js/jquery-3.3.1.min.js',
                'resources/js/popper.min.js',
                'resources/js/bootstrap-4.3.1.js'

            ],
            refresh: true,
        }),
    ],
});
