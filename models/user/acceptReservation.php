<?php
include_once('config.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$owner =1;
$idReservation = $_POST['IdReservation'];
$etat = $_POST['Accepter'];
//reccup id adresse
$q = query("UPDATE `reservation` SET status = '".$etat."' WHERE id ='".$idReservation."'");
echo $q;
