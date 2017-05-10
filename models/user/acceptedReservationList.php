<?php
include_once('config.php');

$owner =1;
$tenant =2;
// list vehicle for this user
$q = query("SELECT * FROM reservation WHERE user_id='".$owner."' AND status=1 ");

while ($res = mysqli_fetch_array($q)) {
  // print_r($res);
  $response['vehicleId'][] = $res['vehicle_id'];
  $response['Status'][] = $res['status'];
  $response['startBooking'][] = $res['start_booking'];
  $response['endBooking'][] = $res['end_booking'];
}

echo json_encode($response);

if ($response==null) {
  echo "aucun message";
}

// $titre,$message,$expediteur,$destinataire,$groupeDestinataire,$module,$pk
//envoieMessage('titre du message', 'ceci est le message',$_SESSION['id'],$_SESSION['id'],4,8,8);
