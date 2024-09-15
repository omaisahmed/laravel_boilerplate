import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/dashmix.min.css',
                'resources/assets/js/dashmix.app.min.js',
                'resources/assets/js/pages/datatables.js',
                'resources/assets/js/pages/be_comp_dialogs.js',
                'resources/assets/js/pages/select2.full.js',
            ],
            refresh: true,
        }),
    ],
});


