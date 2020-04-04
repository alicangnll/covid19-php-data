<?php


$cihaz = $_SERVER['HTTP_USER_AGENT'];
$iphone = strpos($cihaz,"iPhone");
$android = strpos($cihaz,"Android");
$ipod = strpos($cihaz,"iPod");
if ($iphone == true || $android == true || $ipod == true) {
include("ust.php");
  if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
  $feeds = array("https://news.google.com/rss/search?q=corona&hl=tr&gl=TR&ceid=TR:tr");
  $entries = array();
  foreach($feeds as $feed) {$xml = simplexml_load_file($feed);$entries = array_merge($entries, $xml->xpath("//item"));}
  usort($entries, function ($feed1, $feed2) {return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);});
  echo '
  <center><hr width="85%"></hr>
  <b>Corona Virus Haberleri</b>
  <hr width="85%"></hr></center>

  <style>
  a{color:black;}
  a:link{color:black;}
  a:visited{color:black;}
  a:hover{color:lightgray;}
  </style>

  <table class="table table-striped" role="tablist">
  <thead><tr>
  <th scope="col">Haber Adı</th>
  <th scope="col">Tarih</th>
  </tr>
  </thead>
  <tbody>';

foreach($entries as $entry){
echo '<tr>
<td>'.$entry->description.'</td>
<td>'.strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)).'</td>
</tr>';
}
  echo '<br></tbody></table></center>';

  } else {
  $feeds = array("https://news.google.com/rss/search?q=corona&hl=en-US&gl=US&ceid=US:en");
  $entries = array();
  foreach($feeds as $feed) {$xml = simplexml_load_file($feed);$entries = array_merge($entries, $xml->xpath("//item"));}
  usort($entries, function ($feed1, $feed2) {return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);});
  echo '<div class="float-md-none"><center><table><td><div class="card bg-dark" style="width: 500px;">';
  echo '
  <center><hr width="85%"></hr>
  <b>Corona Virus Haberleri</b>
  <hr width="85%"></hr></center>

  <style>
  a{color:black;}
  a:link{color:black;}
  a:visited{color:black;}
  a:hover{color:lightgray;}
  </style>

  <table class="table table-striped" role="tablist">
  <thead><tr>
  <th scope="col">Haber Adı</th>
  <th scope="col">Tarih</th>
  </tr>
  </thead>
  <tbody>';

foreach($entries as $entry){
echo '<tr>
<td>'.$entry->description.'</td>
<td>'.strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)).'</td>
</tr>';
}
  echo '<br></tbody></table></center>';

}

} else {
  echo '<head>
  <meta charset="utf-8">
  <title>Corona Map | ALİ CAN GÖNÜLLÜ</title>
  <meta name="description" content="Corona Sistemi | Corona System | TURKEY | Türkiye">
  <meta name="keywords" content="HTML,Book,PHP,Sistem,Kitap,youtube,facebook,twitter,karantina,quarantine,corona,virus">
  <meta name="author" content="Corona Map">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <link rel="icon" href="http://alicangonullu.xyz/resimler/user_icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <style>
  a{color:white;}
  a:link{color:white;}
  a:visited{color:white;}
  a:hover{color:lightgray;}
  </style>';
if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
$feeds = array("https://news.google.com/rss/search?q=corona&hl=tr&gl=TR&ceid=TR:tr");
$entries = array();
foreach($feeds as $feed) {$xml = simplexml_load_file($feed);$entries = array_merge($entries, $xml->xpath("//item"));}
usort($entries, function ($feed1, $feed2) {return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);});
echo '<div class="float-md-right"><center><table><td><div class="card bg-dark" style="width: 500px;">';

foreach($entries as $entry){
echo '<div class="card-body text-white">'.$entry->description.'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Tarih : '.strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)).'</li>
</ul><br>';}
echo '<br></div></td></table></center></div>';
} else {
$feeds = array("https://news.google.com/rss/search?q=corona&hl=en-US&gl=US&ceid=US:en");
$entries = array();
foreach($feeds as $feed) {$xml = simplexml_load_file($feed);$entries = array_merge($entries, $xml->xpath("//item"));}
usort($entries, function ($feed1, $feed2) {return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);});
echo '<div class="float-md-right"><center><table><td><div class="card bg-dark" style="width: 500px;">';
foreach($entries as $entry){
echo '<div class="card-body text-white">'.$entry->description.'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Tarih : '.strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)).'</li>
</ul><br>';}
echo '<br></div></td></table></center></div>';
}

}
?>
