<?php
// $link = mysql_connect('127.0.0.1','root',''); 

// if (!$link) { 
// 	die('Could not connect to MySQL: ' . mysql_error()); 
// } 
// mysql_selectdb('Cricket', $link) or die('Error connecting to Database');

$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];
$link = mysql_connect("$hostname:$port", $username, $password);
$db_selected = mysql_select_db($db, $link);
?>
