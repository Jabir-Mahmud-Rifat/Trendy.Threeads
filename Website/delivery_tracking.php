<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delivery Location Tracker</title>
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet" />
  <style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
  </style>
</head>
<body>

<div id="map"></div>

<script>
  mapboxgl.accessToken = 'YOUR_MAPBOX_ACCESS_TOKEN';

  const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [0, 0],
    zoom: 2
  });

  const deliveryManId = 'DELIVERY_MAN_ID';  // Replace with the actual delivery man ID

  function updateLocation() {
    navigator.geolocation.getCurrentPosition(position => {
      const { latitude, longitude } = position.coords;
      
      // Update the delivery location on the server
      fetch('/update-location', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ deliveryManId, latitude, longitude })
      })
      .then(response => response.json())
      .then(data => console.log(data))
      .catch(error => console.error('Error updating location:', error));
    });
  }

  function getAndDisplayLocation() {
    // Get the delivery location from the server
    fetch(`/get-location/${deliveryManId}`)
      .then(response => response.json())
      .then(data => {
        const { latitude, longitude } = data;

        // Display the location on the map
        map.flyTo({
          center: [longitude, latitude],
          essential: true
        });

        // Add a marker for the delivery man
        new mapboxgl.Marker().setLngLat([longitude, latitude]).addTo(map);
      })
      .catch(error => console.error('Error getting location:', error));
  }

  // Update location every 10 seconds (for demonstration purposes)
  setInterval(updateLocation, 10000);

  // Get and display the location initially
  getAndDisplayLocation();
</script>

</body>
</html>