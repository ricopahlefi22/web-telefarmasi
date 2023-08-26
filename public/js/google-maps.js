var map, marker, myLatLng, geocoder;

$(document).ready(function () {
    initMap();
});

function initMap() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
    } else {
        alert("Browser anda tidak mendukung untuk menampilkan peta kami.");
    }
}

function success(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $("#latitude").val(latitude);
    $("#longitude").val(longitude);
    myLatLng = new google.maps.LatLng(latitude, longitude);
    createMap(myLatLng);
    // getGeocode(latitude, longitude);
}

function fail() {
    alert("Gagal menampilkan peta, cobalah periksa koneksi internetmu");
}

function createMap(myLatLng) {
    // geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById("map-canvas"), {
        center: myLatLng,
        zoom: 12,
    });
    marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        draggable: true,
    });
    google.maps.event.addListener(marker, "position_changed", function () {
        let lat = marker.position.lat();
        let lng = marker.position.lng();
        $("#latitude").val(lat);
        $("#longitude").val(lng);
    });
}

function getGeocode() {
 geocoder.geocode({ address: 'Martini Floweshop Kabupaten Ketapang' }, function (results, status) {
        if (status == "OK") {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
            });
        } else {
            alert(
                "Geocode was not successful for the following reason: " + status
            );
        }
    });
}
