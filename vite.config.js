import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/desktop/main-elements.css',
                'resources/css/mobile/mobile-main-elements.css',
                'resources/css/desktop/register.css',
            ],
            refresh: true,
        }),
    ],
});
