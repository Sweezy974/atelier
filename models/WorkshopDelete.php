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

    $deleteWorkshop = $_POST['id'];
    $bdd = $this->getConnection();
    // delete in workshop_has_kid first
    $req = $bdd->prepare ('DELETE FROM workshop_has_kid where workshop_id=:id');
    $req -> bindValue(':id',  $deleteWorkshop);
    $req -> execute();
    // delete the workshop then
    $req = $bdd->prepare ('DELETE FROM workshop where id=:id');
    $req -> bindValue(':id',  $deleteWorkshop);
    $req -> execute();
  }

}
$workshop = new workshopDelete();
$workshop->workshopDelete();
