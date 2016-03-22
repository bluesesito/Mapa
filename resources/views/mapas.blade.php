<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>:: MAPAS ::</title>
    <style>
      path {
        stroke: white;
        stroke-width: 0.5px;
        fill: gray;
      }
    </style>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://d3js.org/topojson.v0.min.js"></script>
  </head>
  <body>
    <script type="text/javascript">

      var x = d3.scale.linear()
        .domain([0, width])
        .range([0, width]);
      var y = d3.scale.linear()
        .domain([0, height])
        .range([height, 0]);

      var width = 1400;
      var height = 900;

      var projection = d3.geo.mercator()
          .scale(7000)
          .center([-103.506, 20.609]);

      var svg = d3.select("body").append("svg")
          .attr("width", width)
          .attr("height", height);
      var path = d3.geo.path()
          .projection(projection);
      var g = svg.append("g");
      
     d3.json("secciones_14.json", function(error, mx) {
        svg.selectAll("path")
          .data(topojson.object(mx, mx.objects.secciones_14).geometries)
          .enter().append("path")
          .attr("d", d3.geo.path().projection(projection))
          .attr("fill", "transparent")
          .style("stroke", "#333")
          .style("stroke-width", ".2px")
          .attr("class", "muns");
      });
    </script>
  </body>
</html>