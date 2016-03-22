<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>A simple map</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.css' rel='stylesheet' />
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://d3js.org/queue.v1.min.js"></script>
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>

<div id='map'></div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoicmNhc3RpbGxvYWd1aXJyIiwiYSI6ImNpbDFrdmM2bTM2bnd1YW0zYjZ2dTc2OG4ifQ._HEJ9An2hZK2ofuMNEFdMA';
var map = L.mapbox.map('map', 'mapbox.streets')
    .setView([21, -103.68], 8);
    queue()
    	.defer(d3.json, "secciones_14_2.geojson")
		.await(ready);
function ready(error, data){
		L.geoJson(data).addTo(map);
		}
</script>

</body>
</html>

