<?php
include_once('config.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$owner =1;
// list vehicle for this user
$q =query("SELECT * FROM brand");


while ($res = mysqli_fetch_array($q)) {
  // print_r($res);
  $response['BrandId'][] = $res['id'];
    $response['BrandName'][] = $res['name'];
}

echo json_encode($response);

if ($response==null) {
  echo "aucun vehicule";
}

// $titre,$message,$expediteur,$destinataire,$groupeDestinataire,$module,$pk
//envoieMessage('titre du message', 'ceci est le message',$_SESSION['id'],$_SESSION['id'],4,8,8);
