import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            // Expose jQuery as a global variable
            output: {
                globals: {
                    jquery: 'jQuery'
                }
            }
        }
    }
});
