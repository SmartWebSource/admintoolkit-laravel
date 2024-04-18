import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import glob from 'glob';

export default defineConfig({
  resolve: {
    alias: {
      '@tailwind.config': resolve(__dirname, './tailwind.config.js'),
      '@': resolve(__dirname, 'resources/js'),
    },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/scss/app.scss',
        'resources/js/app.js',
        ...glob.sync("resources/js/custom/*.js"),
        ...glob.sync("resources/js/components/*.js")
      ],
      refresh: true,
    }),
  ],
});
