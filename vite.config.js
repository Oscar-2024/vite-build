import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                //'resources/css/app.css', 'resources/js/app.js'

                // BackOffice
                'resources/sass/backoffice.scss',
                'resources/js/backoffice.js',

                // FrontEnd (Site)
                'resources/sass/site.scss',
                'resources/js/site.js'

            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler',
            '@': path.resolve(__dirname, './resources/js')
        }
    }
});
