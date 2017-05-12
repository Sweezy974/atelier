<?php
namespace Models;
use PDO;
// include_once('models/Config/Connect');
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
    $req = $bdd->prepare('SELECT * FROM workshop WHERE visible=1');
    $req->execute();
    $workshop = $req->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($workshop);
    foreach ($workshop as $work) {
      $response['title'][] = utf8_encode($work['title']);
      $response['price'][] = $work['price'];
      $response['id'][] = $work['id'];
      $response['description'][] = utf8_encode($work['description']);
      $response['image'][] = utf8_encode($work['image']);


    }
    // echo json_encode($response);
    // return $workshop;

    //workshop category
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT * FROM workshop_category');
    $req->execute();
    $categories = $req->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($workshop);
    foreach ($categories as $category) {
      $response['categoryId'][] = $category['id'];
      $response['categoryName'][] = utf8_encode($category['name']);

    }
    // echo json_encode($response);
    // return $categories;

    //workshop age
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT * FROM public_age ');
    $req->execute();
    $ageRanges = $req->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($workshop);
    foreach ($ageRanges as $ageRange) {
      $response['age_id'][] = $ageRange['id'];
      $response['age_start'][] = utf8_encode($ageRange['start']);
      $response['age_end'][] = utf8_encode($ageRange['end']);

    }
    // echo json_encode($response);
    // return $categories;

    //workshop age
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT * FROM establishment ');
    $req->execute();
    $establishments = $req->fetchAll();
    // var_dump($workshop);
    foreach ($establishments as $establishment) {
      $response['establishment_id'][] = $establishment['id'];
      $response['establishment_name'][] = utf8_encode($establishment['name']);

    }
    // return $categories;
    echo json_encode($response);

    // // add a workshop
    // // echo $_POST['nom']."</br>";
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("INSERT INTO workshop (title,description,price,max_kids,image,visible,public_age_id,establishment_id,workshop_category_id) VALUES (:title,:description,:price,:max_kids,'',0,:age,:establishment,:category)");
    // $req -> bindParam(':title',  $_POST['nom']);
    // $req -> bindParam(':description',  $_POST['description']);
    // $req -> bindParam(':price',  $_POST['prix']);
    // $req -> bindParam(':max_kids',  $_POST['maxEnfant']);
    // $req -> bindParam(':age',  $_POST['age']);
    // $req -> bindParam(':establishment',  $_POST['establishment']);
    // $req -> bindParam(':category',  $_POST['categorie']);
    // $req -> execute();
  }

  // public function workshopType()
  // {
  //   $bdd = $this->getConnection();
  //   $req = $bdd->prepare('SELECT * FROM workshop_category');
  //   $req->execute();
  //   $categories = $req->fetchAll();
  //   // var_dump($workshop);
  //   foreach ($categories as $category) {
  //     $response['categoryId'][] = $category['id'];
  //     $response['categoryName'][] = utf8_encode($category['name']);
  //
  //   }
  //   echo json_encode($response);
  //   return $categories;
  // }

  public function workshopCreate()
  {
    # code...
    // add a workshop
    // echo $_POST['nom']."</br>";
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO workshop (title,description,price,max_kids,image,visible,public_age_id,establishment_id,workshop_category_id) VALUES (:title,:description,:price,:max_kids,'',0,:age,:establishment,:category)");
    $req -> bindParam(':title',  $_POST['nom']);
    $req -> bindParam(':description',  $_POST['description']);
    $req -> bindParam(':price',  $_POST['prix']);
    $req -> bindParam(':max_kids',  $_POST['maxEnfant']);
    $req -> bindParam(':age',  $_POST['age']);
    $req -> bindParam(':establishment',  $_POST['establishment']);
    $req -> bindParam(':category',  $_POST['categorie']);
    $req -> execute();
  }

}
$workshop = new Workshop();
$workshop->listWorkshop();

// $workshopType = new Workshop();
// $workshop->workshopType();
