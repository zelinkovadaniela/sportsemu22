var app= angular.module('bookingApp', [
	'ngMaterial'
])
.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('default')
  	.primaryPalette('green')
    .accentPalette('teal')
    .dark();
});

