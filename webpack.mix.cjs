// webpack.mix.cjs

let mix = require('laravel-mix');

mix.copy('node_modules/simplebar/dist/simplebar.min.css', 'public/vendor/simplebar/css');
mix.copy('node_modules/bootstrap-icons/font', 'public/vendor/bootstrap-icons/font');
mix.copy('node_modules/scrollcue/scrollCue.css', 'public/vendor/scrollcue/css');

mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/vendor/bootstrap/js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/vendor/bootstrap/js');
mix.copy('node_modules/simplebar/dist/simplebar.min.js', 'public/vendor/simplebar/js');
mix.copy('node_modules/headhesive/dist/headhesive.min.js', 'public/vendor/headhesive/js');
mix.copy('node_modules/scrollcue/scrollCue.min.js', 'public/vendor/scrollcue/js');

mix.copy('node_modules/swiper/swiper-bundle.min.css', 'public/vendor/swiper/css');
mix.copy('node_modules/swiper/swiper-bundle.min.js', 'public/vendor/swiper/js');
mix.copy('node_modules/glightbox/dist', 'public/vendor/glightbox');
;
mix.copy('node_modules/jarallax/dist', 'public/vendor/jarallax/dist');
mix.copy('node_modules/parallax-js/dist', 'public/vendor/parallax-js/dist');
