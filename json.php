<?php
header("Access-Control-Allow-Origin: *");
$json = intval($_GET["json"]);
if(empty($json)) {
  die("<head>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  </head><center>
  <b>COVID-19 JSON/ARRAY DB</b>
  <br><a href='json.php?json=1'>?json=1 : JSON data</a>
  <br><a href='json.php?json=2'>?json=2 : Array Data</a>
  <br><a href='index.php'>Grafikler / Statistics</a>
  <br><a href='../haberara/index.php'>News Search Engine For Corona</a>
  <br><a href='mailto:alicangonullu@yahoo.com'>Mail</a>
  </center>");
}
if($json == 1) {
header('Content-Type: application/json');
$url = "https://corona.cbddo.gov.tr/Home/GetTotalDataWithLocationForMap";
$data = file_get_contents($url);
echo trim($data);
} elseif($json == 2) {
header('Content-Type: application/json');
$url = "https://corona.cbddo.gov.tr/Home/GetTotalDataWithLocationForMap";
$data = file_get_contents($url);
$jsondebug = json_encode($data, true);
var_dump($jsondebug);
} else {
  die("<head>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  </head><center>
  <b>COVID-19 JSON/ARRAY DB</b>
  <br><a href='json.php?json=1'>?json=1 : JSON data</a>
  <br><a href='json.php?json=2'>?json=2 : Array Data</a>
  <br><a href='index.php'>Grafikler / Statistics</a>
  <br><a href='../haberara/index.php'>News Search Engine For Corona</a>
  <br><a href='mailto:alicangonullu@yahoo.com'>Mail</a>
  </center>");
}
?>
