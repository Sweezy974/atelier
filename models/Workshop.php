<?php
// include_once('app/Config.php');
// namespace Models\Config;
// use Models\Connect;
//
// /**
//  *
//  */
class Workshop
{
  private $connection;

  protected function getConnection()
  {
    try {
      $this->connection = new PDO('mysql:host=localhost;dbname=atelier','root','');
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
    return $this->connection;
  }

  public function listWorkshop()
  {

    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT * FROM workshop');
    $req->execute();
    $workshop = $req->fetchAll();
    // var_dump($workshop);
    foreach ($workshop as $work) {
      $response['title'][] = utf8_encode($work['title']);
      $response['price'][] = $work['price'];
      // $response['id'][] = $work['id'];
      $response['description'][] = utf8_encode($work['description']);
      $response['image'][] = utf8_encode($work['image']);
    }
    echo json_encode($response);
    return $workshop;
  }

}
$workshop = new Workshop();
$appelNormal = $workshop->listWorkshop();
// public function listWorkshop()
// {
//         global $bdd;
//         $req =  $bdd->prepare('SELECT * FROM workshop ');
//         $req->execute();
//         $workshop = $req->fetchAll();
//         var_dump($workshop);
//         return $workshop;
//         # code...
// };
