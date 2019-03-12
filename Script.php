<?php
    session_start();
    if(isset($_GET['city'])){
         $lonAndlat_url="https://api.opencagedata.com/geocode/v1/json?q=".$_GET['city']."&key=71d59efb333846c6a45e5ae9c6b63bf2";
         $jsonLonLat    = file_get_contents($lonAndlat_url);
         $data_lenlat    = json_decode($jsonLonLat, true);
         $lat=$data_lenlat['results'][0]['bounds']['northeast']['lat'];
         $lon=$data_lenlat['results'][0]['bounds']['northeast']['lng'];                    
         $url     = "https://fcc-weather-api.glitch.me/api/current?lat=".$lat."&lon=".$lon;
         $json    = file_get_contents($url);
         $data    = json_decode($json, true);
         $_SESSION['icon'] = $data['weather'][0]['icon'];
         $_SESSION['desc'] = $data['weather'][0]['description'];
         $_SESSION['temp'] = $data['main']['temp'];
         header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>
