<?php
include("ust.php");
echo '<head>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>';
$getid = intval($_GET["cov"]);
if(empty($getid)) {
die('<div class="card"><div class="card-body">ID Boş | ID Empty</div></div>');
}

echo '
<style>
html, body {
  height: 100%;
  width: 100%;
}
#map {
  width: 100%;
  height: 100%;
  background: #ddd;
}
#yazi {
background: #ddd;
}
</style>';
if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
echo '<div class="card">
<div class="card-body"><b>'.$data2["$getid"]->name.'</b></div>';
} else {
echo '<div class="card">
<div class="card-body"><b>'.$data2["$getid"]->id.'</b></div>';
}
if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
echo '<ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-dark">Vaka : '.$data2["$getid"]->confirmedCount.'</li>
    <li class="list-group-item">Ölüm : '.$data2["$getid"]->deathCount.'</li>
    <li class="list-group-item list-group-item-dark">İyileşme : '.$data2["$getid"]->recovryCount.'</li>
  </ul>
</div>';
} else {
  echo '<ul class="list-group list-group-flush">
      <li class="list-group-item list-group-item-dark">Case : '.$data2["$getid"]->confirmedCount.'</li>
      <li class="list-group-item">Death : '.$data2["$getid"]->deathCount.'</li>
      <li class="list-group-item list-group-item-dark">Healed : '.$data2["$getid"]->recovryCount.'</li>
    </ul>
  </div>';
}

echo '<script>
var kordinat = new google.maps.LatLng('.$data2["$getid"]->lat.','.$data2["$getid"]->long.');
function initialize()
{
var mapProp = {
  center:kordinat,
  zoom:(4),
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeId: "terrain"
};
var map = new google.maps.Map(document.getElementById("map"),mapProp);
var isaretle = new google.maps.Marker({
	position:kordinat,
});
isaretle.setMap(map);
infowindow.open(map,isaretle);
}
google.maps.event.addDomListener(window, "load", initialize);
</script>
<div id="map"></div>';
?>
