let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').sass('src/sass/bootstrap.scss', 'css').setPublicPath('assets');