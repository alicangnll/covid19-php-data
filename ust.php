<?php
echo '
<!--
Author : Ali Can Gönüllü
2020 Corona Map | All rights reserved.
Respect !
-->';
?>
<head>
<meta charset="utf-8">
<title>Corona Map | ALİ CAN GÖNÜLLÜ</title>
<meta name="description" content="Corona Sistemi | Corona System | TURKEY | Türkiye">
<meta name="keywords" content="HTML,Book,PHP,Sistem,Kitap,youtube,facebook,twitter,karantina,quarantine,corona,virus">
<meta name="author" content="Corona Map">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<link rel="icon" href="http://alicangonullu.xyz/resimler/user_icon.png">
<meta property="og:image" content="../resimler/user_icon.png">
<meta property="og:locale" content="tr">
<meta property="og:title" content="Corona Map">
<meta property="og:type" content="website">
<link rel="canonical" href="http://corona.cyberarchive.top/" />
<meta property="og:site_name" content="Corona Map">
<meta property="og:description" content="Corona Map">
<meta property="og:url" content="http://corona.cyberarchive.top/">
<meta name="twitter:description" content="Corona Map">
<meta name="twitter:image" content="http://corona.cyberarchive.top/index.png">
<meta name="publisher" content="AliCMS"/>
<meta name="revisit-after" content="10"/>
<meta name="revisit-after" content="10 days" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Corona Map</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="right.php">Haberler <span class="sr-only"></span></a>
     </li></ul>
   </div>
</nav>

<?php
$url = "https://corona.cbddo.gov.tr/Home/GetTotalDataWithLocationForMap";
$data = file_get_contents($url);
$data2 = json_decode($data);

?>
