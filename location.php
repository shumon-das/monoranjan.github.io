<?php


	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	elseif(!empty($_SERVER['REMOTE_ADDR'])){
		$ip = $_SERVER['REMOTE_ADDR'];
	}

$query = @unserialize(file_get_contents('http://ip-api.com/php/'."$ip"));
$visitor_ip = $ip;
$visitor_city = $query['city'];

echo "<br>";
echo $query['country'];
if($query && $query['status']=='success' AND $query['country']=='Bangladesh'){
	echo "<h1>জনি এখন  : ".$query['country']."</h1><br/>";
}elseif($query && $query['status']=='success' AND $query['country']!='Bangladesh'){
	echo "<h1>JONY NOW IN : ".$query['country']."</h1>";
}

//require_once'geoplugin.class.php';





?>