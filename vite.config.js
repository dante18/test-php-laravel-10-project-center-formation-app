import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/shared/js/app.js',
                'resources/assets/frontend/js/app.js',
                'resources/assets/backend/js/app.js'
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets/frontend/img',
                    dest: 'assets/'
                },
                {
                    src: 'resources/assets/backend/img',
                    dest: 'assets/'
                }
            ]
        })
    ]
});
