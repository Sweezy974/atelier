<?php
namespace Models;
use PDO;
// include_once('models/Config/Connect');
//
// /**
//  *
//  */
class workshopDelete
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

  public function workshopDelete()
  {

    # code...
    // delete a workshop
    // echo $_POST['nom']."</br>";
    $deleteWorkshop = $_POST['id'];
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("UPDATE workshop SET visible=0 WHERE id=:id");
    $req -> bindParam(':id', $deleteWorkshop);
    $req -> execute();
  }

}
$workshop = new workshopDelete();
$workshop->workshopDelete();

// $workshopType = new Workshop();
// $workshop->workshopType();
