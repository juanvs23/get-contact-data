let mix = require('laravel-mix');



mix.js('src/assets/frontend/js/main.js', 'frontend/js')
   .js('src/assets/admin/js/main.js', 'admin/js')
   .sass('src/assets/frontend/scss/main.scss', 'frontend/css')
   .sass('src/assets/admin/scss/main.scss', 'admin/css')
   .setPublicPath('assets');