<?php




$servername = "localhost";
$username = "ece4u_project";
$password = "project";
$dbname = "ece4u_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM kavachtrack ORDER BY slno DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
    $lat=$row["lat"];
$lon=$row["lon"];
$date_time=$row["date_time"];



        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

echo "Latitude -".$lat." Longitude -".$lon." Date & Time -".$date_time ;
$conn->close();





?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta http-equiv="refresh" content="60">
    <meta charset="utf-8">
    <title>Child Tracking V1.0</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $lat; ?> , lng: <?php echo $lon; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo $date_time; ?>'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI8U2HsiehokWuUf0AdMxl_4q3uLu8IxQ&callback&callback=initMap">
    </script>
  </body>
</html>


