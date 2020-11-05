const mix = require('laravel-mix');
require('laravel-mix-purgecss');

// deleted mix.js because project doesnt need JS to function properly
mix.postCss('resources/css/main.css', 'public/css', [
    require('tailwindcss'),
])
.purgeCss();
    