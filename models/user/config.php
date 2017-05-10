<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$owner =1;
$tenant =2;
$bdd = new PDO('mysql:host=localhost;dbname=tavoiture;charset=utf8', 'root', '');

function query($q){
	$db = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($db,'tavoiture') or mysql_error();
	mysqli_query($db,"SET NAMES 'utf8'");
	$q = mysqli_query($db,$q);
	return $q;
	mysql_close();
}

// echo "fichier config ajax ";
