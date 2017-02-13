const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('main.scss')
       .webpack('app.js')
	   .copy('resources/assets/js/appModule.js', 'public/js/appModule.js')
	   .copy('resources/assets/js/datepickerController.js', 'public/js/datepickerController.js')
	   .copy('resources/assets/js/bookingController.js', 'public/js/bookingController.js')
	   .copy('resources/assets/js/listingsController.js', 'public/js/listingsController.js')
	   .copy('node_modules/angularjs-datepicker/src/css/angular-datepicker.css', 'public/css/datepicker.css')
	   .copy('resources/assets/js/datepicker.js', 'public/css/datepicker.js')
	   .browserSync({
			proxy: 'sportsemu'});
})
