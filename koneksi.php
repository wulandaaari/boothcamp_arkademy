<?php
$host 		= "localhost";//namaserver
$user 		= "root";//nama user pada server
$password	= "";
$database 	= "arkademi";//namadatabase
 
 mysql_connect($host,$user,$password) or die ("koneksi gagal");
 mysql_select_db($database) or die ("tidak ada database");

?>