<?php
	$country=false;
	if(isset($_GET['country'])){
	$country=$_GET['country'];}
	$city=false;
	if(isset($_GET['city'])){
	$city=$_GET['city'];}
	$url='http://api.weatherbit.io/v2.0/forecast/hourly?key=5a3c3c2cefde45f69ce6ddca2c609bfe&country=$country&city=$city';
	$json=file_get_contents($url);
	$out=json_decode($json,true);
	echo $json;
	print_r($out);
?>