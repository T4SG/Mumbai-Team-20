<?php

	//$sql = "SELECT NoOfStudents,latitude,longitude FROM school";
	//$result = $conn->query($sql);
	$la = array(31,45,67,89,29,18,19,19,28,56);
	$lg = array(91,86,76,98,95,82,75,89,90,65);
	$impact = array(100,42,43,56,78,54,32,45,67,18);
	$nos =  array(34,56,78,90,102,200,87,92,34,27);
	$i=0;
	//$sql = "SELECT s.latitude,s.longitude,,s.NoOfStudents,so.result FROM school s, solution so WHERE s.Sr = so.Sr ORDER by so.result DESC";
	//$resul = $conn->query($sql);
	/*  foreach($result->result_array() as $row){
		$la[$i] = $row['latitude'];
		$lg[$i] = $row['longitude'];
		$nos[$i] = $row['NoOfStudents'];
		$impact[$i] = $row['result'];
		$i++;
	  }
	/*if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		array_push($la, $row["latitude"]);
		array_push($lg, $row["longitude"]);
		array_push($impact, $row["NoOfStudents"]);
	}
	else {
		echo "0 results";
		$i=0;
	*/

?>



<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
</style>
<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVqZOv6TccIqCdbMnqx7mhBEeojlAmHtQ">
</script>
<script type="text/javascript">

var temp;
var cityCircle;
var latitude = [];
var longitude = [];
var impact = [];
var nos = [];

temp = parseFloat("<?php echo $la[0]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[0]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[0]?>");
impact.push(temp);
temp = parseInt("<?php echo $nos[0]?>");
nos.push(temp);


temp = parseFloat("<?php echo $la[1]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[1]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[1]?>");
impact.push(temp);
temp = parseInt("<?php echo $nos[1]?>");
nos.push(temp);


temp = parseFloat("<?php echo $la[2]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[2]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[2]?>");
impact.push(temp);
temp = parseInt("<?php echo $nos[2]?>");
nos.push(temp);


temp = parseFloat("<?php echo $la[3]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[3]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[3]?>");
impact.push(temp);
temp = parseInt("<?php echo $nos[3]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[4]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[4]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[4]?>");
impact.push(temp);
temp = parseFloat("<?php echo $nos[4]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[5]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[5]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[5]?>");
impact.push(temp);
temp = parseFloat("<?php echo $nos[5]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[6]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[6]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[6]?>");
impact.push(temp);
temp = parseFloat("<?php echo $nos[6]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[7]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[7]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[7]?>");
impact.push(temp);
temp = parseFloat("<?php echo $nos[7]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[8]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[8]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[8]?>");
impact.push(temp);
temp = parseFloat("<?php echo $nos[8]?>");
nos.push(temp);

temp = parseFloat("<?php echo $la[9]?>");
latitude.push(temp);
temp = parseFloat("<?php echo $lg[9]?>");
longitude.push(temp);
temp = parseFloat("<?php echo $impact[9]?>");
impact.push(temp);
temp = parseInt("<?php echo $nos[9]?>");
nos.push(temp);


for (i = 0; i < 10; i++){

}
function initialize() {
	// Create the map.

	var mapOptions = {
		zoom: 4,
		center: new google.maps.LatLng(37.09024, -95.712891),
		mapTypeId: google.maps.MapTypeId.TERRAIN
	};

	var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);

	// Construct the circle for each value in citymap.
	// Note: We scale the area of the circle based on the population.
	for (var j=0;j<10;j++)
	{

		if(impact[j]<40){

			var populationOptions = {
				strokeColor: '#ff0000',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#ff0000',
				fillOpacity: 0.35,
				map: map,
				center: new google.maps.LatLng(latitude[j], longitude[j]),
				radius: nos[j]*5000
			};
			// Add the circle for this city to the map.
			cityCircle = new google.maps.Circle(populationOptions);


		}

		else if (impact[j]>=40&&impact[j]<50)
		{

			var populationOption = {
				strokeColor: '#ffff00',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#ffff00',
				fillOpacity: 0.35,
				map: map,
				center: new google.maps.LatLng(latitude[j], longitude[j]),
				radius: nos[j]*5000
			};
			// Add the circle for this city to the map.
			cityCircle = new google.maps.Circle(populationOption);


		}
		else if (impact[j]>=50&&impact[j]<60)
		{

			var populationOption = {
				strokeColor: '#00ff00',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#00ff00',
				fillOpacity: 0.35,
				map: map,
				center: new google.maps.LatLng(latitude[j], longitude[j]),
				radius: nos[j]*5000
			};
			// Add the circle for this city to the map.
			cityCircle = new google.maps.Circle(populationOption);


		}
		else
		{

			var populationOption = {
				strokeColor: '#006400',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#006400',
				fillOpacity: 0.35,
				map: map,
				center: new google.maps.LatLng(latitude[j], longitude[j]),
				radius: nos[j]*5000
			};
			// Add the circle for this city to the map.
			cityCircle = new google.maps.Circle(populationOption);


		}
	}

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>
<body>
<div id="map-canvas"></div>
</body>
</html>