<!DOCTYPE html>
<html>
<head>
<title>Leaflet - Marker Click Event</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://leafletjs.com/dist/leaflet.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="../dist/leaflet.ie.css" /><![endif]-->
<style>
#map {
    width: 800px;
    height: 500px;
}
</style>
</head>
<body>
<div id="map"></div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
<script src="http://leafletjs.com/dist/leaflet.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        init_map();
        add_marker();
    });
    var map;

    function init_map() {
        map = L.map('map').setView([37.8, -96], 4);
        L.tileLayer('http://{s}.tile.cloudmade.com/{key}/22677/256/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2012 CloudMade',
            key: 'BC9A493B41014CAABB98F0471D759707'
        }).addTo(map);
    }

    function add_marker() {
        var points = [
            ["P1", 43.059908, -89.442229, "http://www.google.com/"],
            ["P2", 43.058618, -89.442032, "http://www.facebook.com/"],
            ["P3", 43.058618, -86.441726, "http://www.gmail.com/"]
        ];
        var marker = [];
        var i;
        for (i = 0; i < points.length; i++) {
            marker[i] = new L.Marker([points[i][1], points[i][2]], {
                win_url: points[i][3]
            });
            marker[i].addTo(map);
            marker[i].on('click', onClick);
        };
    }

    function onClick(e) {
        //console.log(this.options.win_url);
        window.open(this.options.win_url);
    }
</script>
</body>
</html>