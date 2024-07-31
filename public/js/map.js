function getLocation() {
    // Check if the Geolocation API is supported
    if (navigator.geolocation) {
        // Get the current position
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    // Extract latitude and longitude from the position object
    var mylat = position.coords.latitude;
    var mylng = position.coords.longitude;

    // Initialize the map
    var map = L.map("map").setView([mylat, mylng], 13);

    // Add OpenStreetMap tiles
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    // Add a marker for the user's location
    L.marker([mylat, mylng]).addTo(map).bindPopup("Point for Map").openPopup();
    map.on("click", function (e) {
        lat = e.latlng.lat;
        lng = e.latlng.lng;

        // Remove existing markers
        map.eachLayer(function (layer) {
            if (layer instanceof L.Marker) {
                map.removeLayer(layer);
            }
        });

        L.marker([lat, lng]).addTo(map).bindPopup("Point for Map").openPopup();

        let latInpt = document.querySelector(".lat");
        let lngInpt = document.querySelector(".lng");
        latInpt.value = lat;
        lngInpt.value = lng;
    });
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
}
