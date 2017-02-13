markeers = [];
app.controller('listingsController', function($scope, $http)
{
	$http.get("/api/listings")
  	.then(function (response)
	{
		$scope.listings = response.data;
		$scope.listings.forEach(function(listing){
			markeers.push({lat: listing.gps_lat, lng: listing.gps_long})
		});
		initMap();
	});

	$scope.hover = function() {
		console.log(this.index);
		initMap(
			{lat: parseFloat(this.listing.gps_lat), lng: parseFloat(this.listing.gps_long)},
			[{lat: parseFloat(this.listing.gps_lat), lng: parseFloat(this.listing.gps_long)}
			]);
			}
	$scope.getSport = function(sports)
	{
		return sports.map(function(sport){return(sport.sport_name)});
	};
});

function initMap(me = {lat: 50.0673768, lng: 14.4007084}, markers )
{
	var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 14,
	    center: me
	});
	if (markers == undefined) {markers = markeers; map.zoom=12};

	markers.forEach(function(marker){
		new google.maps.Marker({
		    position: marker,
		    map: map
		});
	});
}


// {
// 	$http.get('/api/listings')
// .success(function(data, status, headers, config) {
//      $scope.listings = data;
// })
// .error(function(error, status, headers, config) {
//      console.log(status);
//      console.log("Error occured");
// });
