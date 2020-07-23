<?php 
$jsondata= file_get_contents("https://pomber.github.io/covid19/timeseries.json");
$data = json_decode($jsondata,true);
?>