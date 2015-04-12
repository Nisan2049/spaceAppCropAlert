<!--
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crop Alert </title>
<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<script src="./pages/leaflet.js"></script>
 <link rel="stylesheet" href="leaflet.css" />
<script src="leaflet.js"></script>
  
  
</head>
<body>
  <div id="map" style="width: 600px; height: 400px"></div>

  
  <script>
    var map = L.map('map').setView([51.5, -0.09], 13);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var LeafIcon = L.Icon.extend({
      options: {
        shadowUrl: 'leaf-green.png',
        iconSize:     [38, 95],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
      }
    });

    var greenIcon = new LeafIcon({iconUrl: 'leaf-green.png'}),
      redIcon = new LeafIcon({iconUrl: 'leaf-red.png'}),
      orangeIcon = new LeafIcon({iconUrl: 'leaf-orange.png'});

    L.marker([51.5, -0.09], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);
    L.marker([27.7000, 85.3333], {icon: greenIcon}).bindPopup("I am a red leaf.").addTo(map);
    L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);

  </script>

<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
-->