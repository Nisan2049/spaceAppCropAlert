
<div id="map" style="width: 750px; height: 650px"></div>

  
  <script>
    var map = L.map('map').setView([26.5333, 86.7333], 5);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var LeafIcon = L.Icon.extend({
      options: {
        //shadowUrl:'alert.png',
        iconSize:     [21, 34],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
      }
    });

    var greenIcon = new LeafIcon({iconUrl: './pages/alert.png'}),
      redIcon = new LeafIcon({iconUrl: './pages/alert.png'}),
      orangeIcon = new LeafIcon({iconUrl: './pages/alert.png'});

<?php
include("connect.php");

$sql = "SELECT lat, lon FROM latlon";
$res = mysql_query($sql, $con);
while(($row = mysql_fetch_array($res))>0){

  ?>

  L.marker([<?php echo $row['lat'];?>, <?php echo $row['lon'];?>], {icon: greenIcon}).bindPopup("Alert!").addTo(map);
<?php } 

    /*L.marker([51.5, -0.09], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);
    
    L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);*/
    ?>

  </script>