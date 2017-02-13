<style>

</style>
<body>
<div id="l-map"></div>

<script>
    function initMap() {
        var myLocation = {lat: 50.0777594, lng: 14.427689099999997};
        var map = new google.maps.Map(document.getElementById('l-map'), {
            zoom: 17,
            center: myLocation
        });
        var marker = new google.maps.Marker({
            position: myLocation,
            map: map
        });

        {{--var locations = {{json_encode($json_geolocation)}}--}}


        $.each(locations, function(id, item){

            new google.maps.Marker({
                position: {
                    'lat': item.lat,
                    'lng': item.lng
                },
                map: map
            });
        })
    }


</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZUEnurtTn0unfaT-ZU3hT3qd-QXuw2QA&amp;callback=initMap"></script>
