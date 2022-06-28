let mix = require('laravel-mix');

mix
    .js('src/js/main.js', 'public/assets/js')
    .setPublicPath('public')
    .sass('src/scss/main.scss', 'public/assets/css')
    .browserSync({
        proxy: 'http://localhost:8081/sistema-colegios/',
        files: [
            'app/views',
            'src'
        ]
    });