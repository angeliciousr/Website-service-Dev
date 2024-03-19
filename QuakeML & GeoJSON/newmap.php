<!DOCTYPE html>
<html>
<head>
        <title>Earthquake Map</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <style>
        #map {
        height: 100%;
    }
    html,body {
        height: 100%;
        margin: 0;
        padding: 0;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
        defer
    >
    </script>
<script>
 let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 20, lng: -160 },
    zoom: 2,
  });
  const script = document.createElement("script");
  script.setAttribute(
    "src",
    "https://storage.googleapis.com/mapsdevsite/json/quakes.geo.json",
  );
  document.getElementsByTagName("head")[0].appendChild(script);
}
function eqfeed_callback(data) {
  map.data.addGeoJson(data);
}
window.initMap = initMap;
window.eqfeed_callback = eqfeed_callback;
</script>
</body>
</html>