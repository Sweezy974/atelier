<?php
namespace Models;
use PDO;
// include_once('models/Config/Connect');
//
// /**
//  *
//  */
class WorkshopCreate
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

  public function workshopCreate()
  {
    # code...
    // add a workshop
    // echo $_POST['nom']."</br>";


    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO workshop (title,description,price,max_kids,image,visible,public_age_id,establishment_id,workshop_category_id) VALUES (:title,:description,:price,:max_kids,'atelier.jpg',1,:age,:establishment,:category)");
    $req -> bindParam(':title',  $_POST['nom']);
    $req -> bindParam(':description',  $_POST['description']);
    $req -> bindParam(':price',  $_POST['prix']);
    $req -> bindParam(':max_kids',  $_POST['maxEnfant']);
    $req -> bindParam(':age',  $_POST['age']);
    $req -> bindParam(':establishment',  $_POST['establishment']);
    $req -> bindParam(':category',  $_POST['categorie']);
    $req -> execute();

    // select the last workshop
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT id FROM workshop WHERE title="'.$_POST['nom'].'" AND description="'.$_POST['description'].'" AND price="'.$_POST['prix'].'"  ORDER BY id DESC LIMIT 1 ');
    $req->execute();
    $workshop = $req->fetch();
    $lastWorkshop=$workshop['id'];

    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO timetable (startAt,endAt,enable,workshop_id) VALUES (:startAt,:endAt,1,:workshop_id)");
    $req -> bindParam(':startAt',  $_POST['dateDebut']);
    $req -> bindParam(':endAt',  $_POST['dateFin']);
    $req -> bindParam(':workshop_id',  $lastWorkshop);
    $req -> execute();

  }

}
$workshop = new workshopCreate();
$workshop->workshopCreate();

// $workshopType = new Workshop();
// $workshop->workshopType();
