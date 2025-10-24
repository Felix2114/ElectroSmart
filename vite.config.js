import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/perfil.css',
                'resources/css/buscar.css',
                'resources/js/app.js',
                'resources/js/perfil.js',
                'resources/js/buscar.js',
                'resources/js/bootstrap.js'
            ],
            refresh: true,
        }),
    ],
});