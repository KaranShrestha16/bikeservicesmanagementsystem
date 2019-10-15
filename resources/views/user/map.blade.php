@extends('layouts.user')

@section('content')

    <h3>Our Location</h3>

    <div id="map" style="width:100%;height:400px;"></div>

    
@endsection

@section('scripts')

    <script>
    function myMap() {
    var text="hello";
    var myCenter = new google.maps.LatLng(27.706001,85.330206);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 18};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    google.maps.event.addListener(marker,'click',function() {
        var infowindow = new google.maps.InfoWindow({
        content: text
        });
    infowindow.open(map,marker);
    });
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKqT0kqI_3z6DGHPb9Pjzgz_W4QlfK8VY&callback=myMap"></script>


@endsection