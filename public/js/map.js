function initMap() {
    //
    var infowindow, map, marker,
            longitud = parseFloat(document.getElementById('coordenadas').dataset.long),
            latitud = parseFloat(document.getElementById('coordenadas').dataset.lat),
            myLatLng = {lat: latitud, lng: longitud},
            contentString = '<img src=img/iconos/navbrand.png/>';

    infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    // Create a map object and specify the DOM element for display.
    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 8
    });


    // Create a marker and set its position.
    marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'SnowShop'
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });
}
