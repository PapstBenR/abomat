var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
/* ADMIN */
elixir(function(mix) {
    mix.styles([
    	"material.css",
    	"material-fullpalette.css",
    	"ripples.css",
    	"roboto.css"
    ]);
});

elixir(function(mix) {
    mix.scripts([
        "jquery.js",
        "bootstrap.js",
        "material.js",
        "ripples.js"
    ]);
});

/* HOMEPAGE */
elixir(function(mix) {
    mix.styles([
        "material.css",
        "material-fullpalette.css",
        "ripples.css",
        "roboto.css",
        "homepage.css"
    ], 'public/css/homepage.css');
});
