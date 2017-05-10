<?php
include_once('config.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// $owner =1;

$adresse = $_POST['Adresse'];
$cp = $_POST['CodePostal'];
$ville = $_POST['Ville'];
// $pays =  $_POST['Pays'];
$pays =  'REUNION';


echo $prix.$couleur.$carburant;
$q = "INSERT INTO address (`address`, `zipcode`, `city`, `country`)
      VALUES( '".$adresse."' , '".$cp."', '".$ville."','".$pays."' )";
if (query($q)) {
echo "string";
};

echo "<br>";
echo $q;
