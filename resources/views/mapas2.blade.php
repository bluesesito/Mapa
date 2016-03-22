<!DOCTYPE html>
<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
  	<script src='//api.tiles.mapbox.com/mapbox.js/v1.2.0/mapbox.js'></script>
  	<link href='//api.tiles.mapbox.com/mapbox.js/v1.2.0/mapbox.css' rel='stylesheet' />
  	<script src="http://d3js.org/d3.v3.min.js"></script>
  	<script src="http://d3js.org/queue.v1.min.js"></script>
  	<style>
	  	body { margin:0; padding:0; }
    	#map { position:absolute; top:0; bottom:0; width:100%; }
  	</style>
</head>
<body>
<div id='map'></div>
<script type='text/javascript'>
	var map = L.mapbox.map('map', 'fcc.map-pfg86c38')
		.setView([40, -94.50], 4);
	queue()
		.defer(d3.json, "secciones_14_2.geojson")
		.await(ready);
	function ready(error, data){
		L.geoJson(data).addTo(map);
		}
</script>
</body> 
</html>