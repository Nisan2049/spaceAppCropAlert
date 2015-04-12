

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

   /* <?php
    for($i = 0; $i< count($lat); $i++){
      ?>
        L.marker([<?php echo $lat[$i]; ?>, <?php echo $lon[$i]; ?>], {icon: greenIcon}).bindPopup("I am a red leaf.").addTo(map);
      <?php } ?>*/
  
  </script>

