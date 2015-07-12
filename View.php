<?php

//$sql = "SELECT NoOfStudents,latitude,longitude FROM school";
//$result = $conn->query($sql);
$la = array(-34.8,-31.67);
$lg = array(-38.9,28.09);
$impact = array(123,1234);
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

//JavaScript
<script type="text/javascript">
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVqZOv6TccIqCdbMnqx7mhBEeojlAmHtQ">
      var latitude = [];
      var longitude = [];
      var impact = [];
      for (var i=1;i<=3/*"<?php echo $result->num_rows ?>" */;i++){
      		latitude.push("<?php echo $la[i] ?>");
      		longitude.push("<?php echo $lg[i] ?>");
      		impact.push("<?php echo $impact[i] ?>");


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

   for (var j=1;j<=3;j++){
   	var impacts = {
      strokeColor: '#FFF00F',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FFF00F',
      fillOpacity: 0.35,
      map: map,
      center: {lat: la[j], lng: lg[j]}
      radius: impact[j];
    };
    // Add the circle for this city to the map.
    cityCircle = new google.maps.Circle(impacts);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

   }
   </script>