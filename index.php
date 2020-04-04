<?php include("ust.php");

$cihaz = $_SERVER['HTTP_USER_AGENT'];
$iphone = strpos($cihaz,"iPhone");
$android = strpos($cihaz,"Android");
$ipod = strpos($cihaz,"iPod");
if ($iphone == true || $android == true || $ipod == true) {

if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
echo '
<center><hr width="85%"></hr>
<b>Korona Virus Ilk On Beş</b>
<hr width="85%"></hr></center>
<style>
a{color:black;}
a:link{color:black;}
a:visited{color:black;}
a:hover{color:lightgray;}
</style>

<center><div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white"><a href="ulke.php?cov=29"><font color="white">Türkiye</font></a></div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : '.$data2["29"]->confirmedCount.'</li>
<li class="list-group-item">Ölüm : '.$data2["29"]->deathCount.'</li>
<li class="list-group-item">İyileşen : '.$data2["29"]->recovryCount.'</li>
</ul></div><br>

<div class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white"><a href="ulke.php?cov=284"><font color="white">KKTC</font></a></div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : '.$data2["284"]->confirmedCount.'</li>
<li class="list-group-item">Ölüm : '.$data2["284"]->deathCount.'</li>
<li class="list-group-item">İyileşen : '.$data2["284"]->recovryCount.'</li>
</ul></div><br></center>';

echo '<table class="table table-striped" role="tablist">
<thead><tr>
<th scope="col">Ülke Adı</th>
<th scope="col">Vaka</th>
<th scope="col">Ölüm</th>
<th scope="col">İyileşme</th>
</tr>
</thead>';
} else {
  echo '
  <center><hr width="85%"></hr>
  <b>Corona Virus First Fifteen</b>
  <hr width="85%"></hr></center>

  <style>
  a{color:black;}
  a:link{color:black;}
  a:visited{color:black;}
  a:hover{color:lightgray;}
  </style>

  <center><div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white"><a href="ulke.php?cov=29"><font color="white">Turkey</font></a></div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Case : '.$data2["29"]->confirmedCount.'</li>
  <li class="list-group-item">Death : '.$data2["29"]->deathCount.'</li>
  <li class="list-group-item">Recovered : '.$data2["29"]->recovryCount.'</li>
  </ul></div><br>

  <div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white"><a href="ulke.php?cov=284"><font color="white">Northern Cyprus</font></a></div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Case : '.$data2["284"]->confirmedCount.'</li>
  <li class="list-group-item">Death : '.$data2["284"]->deathCount.'</li>
  <li class="list-group-item">Recovered : '.$data2["284"]->recovryCount.'</li>
  </ul></div><br></center>

  <table class="table table-striped" role="tablist">
  <thead><tr>
  <th scope="col">Country Name</th>
  <th scope="col">Case</th>
  <th scope="col">Death</th>
  <th scope="col">Received</th>
  </tr>
  </thead>';
}

echo '<tbody>

<tr>
<td><a href="ulke.php?cov=0">'.$data2["0"]->name.'</a></td>
<td>'.$data2["0"]->confirmedCount.'</td>
<td>'.$data2["0"]->deathCount.'</td>
<td>'.$data2["0"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=1">'.$data2["1"]->name.'</a></td>
<td>'.$data2["1"]->confirmedCount.'</td>
<td>'.$data2["1"]->deathCount.'</td>
<td>'.$data2["1"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=2">'.$data2["2"]->name.'</a></td>
<td>'.$data2["2"]->confirmedCount.'</td>
<td>'.$data2["2"]->deathCount.'</td>
<td>'.$data2["2"]->recovryCount.'</td>
</tr>


<tr>
<td><a href="ulke.php?cov=3">'.$data2["3"]->name.'</a></td>
<td>'.$data2["3"]->confirmedCount.'</td>
<td>'.$data2["3"]->deathCount.'</td>
<td>'.$data2["3"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=4">'.$data2["4"]->name.'</a></td>
<td>'.$data2["4"]->confirmedCount.'</td>
<td>'.$data2["4"]->deathCount.'</td>
<td>'.$data2["4"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=5">'.$data2["5"]->name.'</a></td>
<td>'.$data2["5"]->confirmedCount.'</td>
<td>'.$data2["5"]->deathCount.'</td>
<td>'.$data2["5"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=6">'.$data2["6"]->name.'</a></td>
<td>'.$data2["6"]->confirmedCount.'</td>
<td>'.$data2["6"]->deathCount.'</td>
<td>'.$data2["6"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=7">'.$data2["7"]->name.'</a></td>
<td>'.$data2["7"]->confirmedCount.'</td>
<td>'.$data2["7"]->deathCount.'</td>
<td>'.$data2["7"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=8">'.$data2["8"]->name.'</a></td>
<td>'.$data2["8"]->confirmedCount.'</td>
<td>'.$data2["8"]->deathCount.'</td>
<td>'.$data2["8"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=9">'.$data2["9"]->name.'</a></td>
<td>'.$data2["9"]->confirmedCount.'</td>
<td>'.$data2["9"]->deathCount.'</td>
<td>'.$data2["9"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=10">'.$data2["10"]->name.'</a></td>
<td>'.$data2["10"]->confirmedCount.'</td>
<td>'.$data2["10"]->deathCount.'</td>
<td>'.$data2["10"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=11">'.$data2["11"]->name.'</a></td>
<td>'.$data2["11"]->confirmedCount.'</td>
<td>'.$data2["11"]->deathCount.'</td>
<td>'.$data2["11"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=12">'.$data2["12"]->name.'</a></td>
<td>'.$data2["12"]->confirmedCount.'</td>
<td>'.$data2["12"]->deathCount.'</td>
<td>'.$data2["12"]->recovryCount.'</td>
</tr>


<tr>
<td><a href="ulke.php?cov=13">'.$data2["13"]->name.'</a></td>
<td>'.$data2["13"]->confirmedCount.'</td>
<td>'.$data2["13"]->deathCount.'</td>
<td>'.$data2["13"]->recovryCount.'</td>
</tr>

<tr>
<td><a href="ulke.php?cov=14">'.$data2["14"]->name.'</a></td>
<td>'.$data2["14"]->confirmedCount.'</td>
<td>'.$data2["14"]->deathCount.'</td>
<td>'.$data2["14"]->recovryCount.'</td>
</tr>


</tbody></table>';
} else {
if(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) == "tr") {
 echo '<center><table>
<td><div align="right" class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white">
<a href="ulke.php?cov=29"><font color="white">Türkiye</font></a>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : '.$data2["29"]->confirmedCount.'</li>
<li class="list-group-item">Ölüm : '.$data2["29"]->deathCount.'</li>
<li class="list-group-item">Recovered : '.$data2["29"]->recovryCount.'</li>
</ul></div></td>

<td><div align="right" class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white">
<a href="ulke.php?cov=284"><font color="white">KKTC</font></a>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : '.$data2["284"]->confirmedCount.'</li>
<li class="list-group-item">Ölüm : '.$data2["284"]->deathCount.'</li>
<li class="list-group-item">İyileşen : '.$data2["284"]->recovryCount.'</li>
</ul></div></td>

<td><div align="right" class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white">
<a href="ulke.php?cov=167"><font color="white">Azerbaycan</font></a>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : '.$data2["167"]->confirmedCount.'</li>
<li class="list-group-item">Ölüm : '.$data2["167"]->deathCount.'</li>
<li class="list-group-item">İyileşen : '.$data2["167"]->recovryCount.'</li>
</ul></div></td>

</table></center>';
?>
<center><hr width="85%"></hr>
<b>Korona Virus Ilk On Beş</b>
<hr width="85%"></hr></center>
<iframe class="embed-responsive-item" align="right" width="500" height="100%" src="right.php"></iframe>
<style>
a{color:white;}
a:link{color:white;}
a:visited{color:white;}
a:hover{color:lightgray;}
</style>

<br><center><table>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white"><b><?php echo $data2["0"]->name; ?></b></div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["0"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["0"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["0"]->recovryCount; ?></li>
</ul></div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white"><b><?php echo $data2["1"]->name; ?></b></div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["1"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["1"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["1"]->recovryCount; ?></li>
</ul></div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body text-white"><b><?php echo $data2["2"]->name; ?></b></div>
<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["2"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["2"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["2"]->recovryCount; ?></li>
</ul></div></td>

<td><div class="card bg-dark" style="width: 18rem;float:left;">
<div class="card-body"><b class="card-title"><a href="ulke.php?cov=3"><?php echo $data2["3"]->name;; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["3"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["3"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["3"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>



<br><center><table>
<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><b class="card-title"><a href="ulke.php?cov=4"><?php echo $data2["4"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["4"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["4"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["4"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=5"><b class="card-title"><?php echo $data2["5"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["5"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["5"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["5"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=6"><b class="card-title"><?php echo $data2["6"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["6"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["6"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["6"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=7"><b class="card-title"><?php echo $data2["7"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["7"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["7"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["7"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>


<br><center><table>
<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=8"><b class="card-title"><?php echo $data2["8"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["8"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["8"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["8"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=9"><b class="card-title"><?php echo $data2["9"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["9"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["9"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["9"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=10"><b class="card-title"><?php echo $data2["10"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["10"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["10"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["10"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=11"><b class="card-title"><?php echo $data2["11"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["11"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["11"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["11"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>


<br><center><table>
<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=12"><b class="card-title"><?php echo $data2["12"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["12"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["12"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["12"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=13"><b class="card-title"><?php echo $data2["13"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["13"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["13"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["13"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=14"><b class="card-title"><?php echo $data2["14"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["14"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["14"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["14"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card bg-dark" style="width: 18rem;">
<div class="card-body"><a href="ulke.php?cov=15"><b class="card-title"><?php echo $data2["15"]->name; ?></b></a></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Vaka : <?php echo $data2["15"]->confirmedCount; ?></li>
<li class="list-group-item">Ölüm : <?php echo $data2["15"]->deathCount; ?></li>
<li class="list-group-item">İyileşen : <?php echo $data2["15"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>
<?php
} else {

echo '<center><table>
 <td><div align="right" class="card bg-dark" style="width: 18rem;">
 <div class="card-body text-white">
 <a href="ulke.php?cov=29"><font color="white">Turkey</font></a>
 </div>
 <ul class="list-group list-group-flush">
 <li class="list-group-item">Case : '.$data2["29"]->confirmedCount.'</li>
 <li class="list-group-item">Death : '.$data2["29"]->deathCount.'</li>
 <li class="list-group-item">Recovered : '.$data2["29"]->recovryCount.'</li>
 </ul></div></td>

 <td><div align="right" class="card bg-dark" style="width: 18rem;">
 <div class="card-body text-white">
 <a href="ulke.php?cov=284"><font color="white">Northern Cyprus</font></a>
 </div>
 <ul class="list-group list-group-flush">
 <li class="list-group-item">Case : '.$data2["284"]->confirmedCount.'</li>
 <li class="list-group-item">Death : '.$data2["284"]->deathCount.'</li>
 <li class="list-group-item">Recovered : '.$data2["284"]->recovryCount.'</li>
 </ul></div></td>

 <td><div align="right" class="card bg-dark" style="width: 18rem;">
 <div class="card-body text-white">
 <a href="ulke.php?cov=167"><font color="white">Azerbaijan</font></a>
 </div>
 <ul class="list-group list-group-flush">
 <li class="list-group-item">Case : '.$data2["167"]->confirmedCount.'</li>
 <li class="list-group-item">Death : '.$data2["167"]->deathCount.'</li>
 <li class="list-group-item">Recovered : '.$data2["167"]->recovryCount.'</li>
 </ul></div></td>

 </table></center>';
?>
<center><hr width="85%"></hr>
<b>Corona Virus First Fifteen</b>
<hr width="85%"></hr></center>
<br><center><table>
<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["1"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["1"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["1"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["1"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["2"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["2"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["2"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["2"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;float:left;">
<div class="card-body"><b class="card-title"><?php echo $data2["3"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["3"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["3"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["3"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>



<br><center><table>
<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["4"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["4"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["4"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["4"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["5"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["5"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["5"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["5"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["6"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["6"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["6"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["6"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["7"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["7"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["7"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["7"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>


<br><center><table>
<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["8"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["8"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["8"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["8"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["9"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["9"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["9"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["9"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["10"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["10"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["10"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["10"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["11"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["11"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["11"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["11"]->recovryCount; ?></li>
</ul>
</div></td></table></center><br>


<br><center><table>
<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["12"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["12"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["12"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["12"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["13"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["13"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["13"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["13"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["14"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["14"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["14"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["14"]->recovryCount; ?></li>
</ul>
</div></td>

<td><div class="card" style="width: 18rem;">
<div class="card-body"><b class="card-title"><?php echo $data2["15"]->name; ?></b></div>

<ul class="list-group list-group-flush">
<li class="list-group-item">Case : <?php echo $data2["15"]->confirmedCount; ?></li>
<li class="list-group-item">Death : <?php echo $data2["15"]->deathCount; ?></li>
<li class="list-group-item">Recovered : <?php echo $data2["14"]->recovryCount; ?></li>
</ul>
</div></td></table></center>
<?php
}
}
include("alt.php");
?>
