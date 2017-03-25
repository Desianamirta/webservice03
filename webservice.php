<html>
<pre>Dilihat dari Indonesia Wilayah Kudus </pre>
SATELLITE</br>
  <pre>
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/satellite/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $satelit = $parsed_json->satellite->image_url;
  $satelit1 = $parsed_json->satellite->image_url_ir4;
  $satelit2 = $parsed_json->satellite->image_url_vis;
  echo
  "Berikut adalah daftar satelit di wilayah Kudus :</br>
  1. $satelit
  2. $satelit1
  3. $satelit2\n";
  ?>
  </pre>
ASTRONOMY
<body>
  <pre>
  <?php
	$json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/astronomy/q/Indonesia/Kudus.json");
	$parsed_json = json_decode($json_string);
	$moonphase = $parsed_json->{"moon_phase"}->{"phaseofMoon"};
	$moonphase1 = $parsed_json->{"moon_phase"}->{"percentIlluminated"};
	$moonphase2 = $parsed_json->{"moon_phase"}->{"hemisphere"};
  echo 
  "Fase bulan di wilayah Kudus yaitu fase : ${moonphase}
  Diterangi bulan sebanyak : ${moonphase1} (persen)
  Belahan Bumi : ${moonphase2} \n";
  ?>
  </pre>
PLANNER
  <pre> 
  <?php
  $json_string = file_get_contents("http://api.wunderground.com/api/2787748c5dc1150e/planner_07010731/q/Indonesia/Kudus.json");
  $parsed_json = json_decode($json_string);
  $cuaca = $parsed_json->trip->cloud_cover->cond;
  $suhu = $parsed_json->trip->temp_high->avg->C;
  $suhu1 = $parsed_json->trip->temp_low->avg->C;
  echo
 "Cuaca di wilayah Kudus : $cuaca
  Suhu tertinggi di wilayah Kudus : $suhu <sup>O</sup> C 
  Suhu terendah di wilayah Kudus : $suhu1 <sup>O</sup> C\n";
  ?>
  </pre>
 </body>
</html>