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
    $req = $bdd->prepare('SELECT * FROM workshop');
    $req->execute();
    $workshop = $req->fetchAll();
    // var_dump($workshop);
    foreach ($workshop as $work) {
      $response['title'][] = utf8_encode($work['title']);
      $response['price'][] = $work['price'];
      $response['id'][] = $work['id'];
      $response['description'][] = utf8_encode($work['description']);
      $response['image'][] = utf8_encode($work['image']);
    }
    echo json_encode($response);
    return $workshop;
  }

  // public function workshopRegister()
  // {
  //   $lastname = $_POST['ParentLastname'];
  //   $firstname = $_POST['ParentFirstname'];
  //   $email = $_POST['ParentMail'];
  //
  //   $bdd = $this->getConnection();
  //   $req = $bdd->prepare ("INSERT INTO parent (firstname, lastname,email,address_id) VALUES (:fname, :lname,:mail,2)");
  //   $req -> bindParam(':fname', $fisrtname);
  //   $req -> bindParam(':lname', $lastname);
  //   $req -> bindParam(':mail', $email);
  //   $req -> execute();
  // }

}
$workshop = new Workshop();
$workshop->listWorkshop();

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
