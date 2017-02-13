<style>
#mapeach{width:100%; height:100px; float: left;}
</style>
<body>

@if ($listings->isEmpty())
    Sorry but we found no search results.
@else
    @foreach ($listings as $listing)
        <img src="{{ $listing }}">
    @endforeach
@endif

<script>
    function initMap() {
    var me = {lat: 50.077779, lng: 14.427369}; 
    var map = new google.maps.Map(document.getElementById('mapeach'), {
        zoom: 4,
        center: me
    });

    var marker = new google.maps.Marker({
        position: me,
        map: map
    });
    
      var locations = [
			    { 'lat': 50.07843, 'lon': 14.4247933, 'name': "Pivotéka illegal beer" },
			    { 'lat': 50.07949, 'lon': 14.4238383, 'name': "Rocky O'Reilly's Irish Pub &amp; Restaurant" },
			    { 'lat': 50.080089, 'lon': 14.4232913, 'name': "Jáma" },
			    { 'lat': 50.079545, 'lon': 14.4207383, 'name': "Novoměstský pivovar" },
			    { 'lat': 50.078649, 'lon': 14.4198844, 'name': "HOOTERS Praha" },
			    { 'lat': 50.078834, 'lon': 14.4147473, 'name': "U Fleků" },
			    { 'lat': 50.076137, 'lon': 14.4261773, 'name': "The PUB" },
			    { 'lat': 50.077783, 'lon': 14.4305223, 'name': "Bílá kráva" }
			];

			$.each(locations,function(id,item){
				new google.maps.Marker({
					position: {
						lat: item.lat,
						lng: item.lon
					},
					map: map
				});
			});
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYD53U76PoFT589UwklSy5D2mWuLTFs5w&callback=initMap">
    </script>