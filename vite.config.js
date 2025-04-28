import { defineConfig } from 'vite';

export default defineConfig({
  root: 'assets',
  build: {
    outDir: './dist',
    emptyOutDir: false,
    assetsDir: '',
    rollupOptions: {
      input: {
        js: './assets/src/js/base.js',
        scss: './assets/src/scss/base.scss'
      },
      output: {
        entryFileNames: 'js/main.js',
        chunkFileNames: 'js/main.js',
        assetFileNames: 'css/main.css'
      }
    }
  },
  css: {
    preprocessorOptions: {
      scss: {
      }
    }
  }
});