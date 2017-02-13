var app= angular.module('bookingApp', [
	'720kb.datepicker'
]);

app.controller('bookingController', function($scope)
{
	$scope.courts = [
		{
			name: 'Court 1'
		},
		{
			name: 'Court 2'
		},
		{
			name: 'Court 3'
		},
		{
			name: 'Court 4'
		},
		{
			name: 'Court 5'
		}
	];
	$scope.hours = 	[
			{hour: 10},
			{hour: 12},
			{hour: 13},
			{hour: 13},
			{hour: 14},
			{hour: 15},
			{hour: 16},
			{hour: 17},
			{hour: 18},
			{hour: 19},
			{hour: 20},

	];
});

