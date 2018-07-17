<?php
include("conn.php");
$query="select * from genericstore where genericstoreId=".$_GET['edit'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
echo "<h1>".$row['GenericstoreName']."</h1>";
$add = urlencode($row['House']);
$Street = urlencode($row['Street']);
$City = urlencode($row['City']);
$Pincode = urlencode($row['Pincode']);


$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$Street.',+'.$City.',+'.'CANADA'.'&sensor=false');

$output= json_decode($geocode); //Store values in variable
if($output->status == 'OK'){ // Check if address is available or not

echo "<div class=\"display_map_details\">";
$lat = $output->results[0]->geometry->location->lat;

//echo "Latitude : ".$lat = $output->results[0]->geometry->location->lat; //Returns Latitude

	
$long = $output->results[0]->geometry->location->lng;
//echo "Longitude : ".$long = $output->results[0]->geometry->location->lng; // Returns Longitude


echo "Address : ".$loc=$output->results[0]->formatted_address;

echo "</div>";

}

?>

<html>
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB4YxrNoYeuW8xCH38PxAM_2H_tXNK5M4&callback=myMap" async defer></script>
<script>

function myMap() {
	var myLatLng = {lat: <?php echo $lat;?> , lng: <?php echo $long;?>};
    var mapOptions = {
        center: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $long;?>),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
var marker = new google.maps.Marker({
          position:myLatLng,
          map: map,
		   animation: google.maps.Animation.BOUNCE,
          title: 'Hello World!'
        });
}
</script>

</head>
<body>
<div id="map" style="width:400px;height:400px;background:yellow"></div>





</body>
</html>