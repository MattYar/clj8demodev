<?php

$url = $_POST["url"];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($httpcode>=200 && $httpcode<300){
  echo '<span style="color: #2ecc71">' . date('H:i:s') . ' - Online</span>';
} else {
  echo '<span style="color: #e74c3c">' . date('H:i:s') . ' - Unresponsive</span>';
}

?>