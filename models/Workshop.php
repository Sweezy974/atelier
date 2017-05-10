<?php
// include_once('app/Config.php');
// use Models\Connect;
// namespace Models;
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
    var_dump($workshop);
    return $workshop;
  }

}
$instance = new Workshop();
$appelNormal = $instance->listWorkshop();
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
