<?php
namespace Models;
use PDO;
// include_once('models/Config/Connect');
//
// /**
//  *
//  */
class User
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

  // public function listWorkshop()
  // {
  //
  //   $bdd = $this->getConnection();
  //   $req = $bdd->prepare('SELECT * FROM workshop');
  //   $req->execute();
  //   $workshop = $req->fetchAll();
  //   // var_dump($workshop);
  //   foreach ($workshop as $work) {
  //     $response['title'][] = utf8_encode($work['title']);
  //     $response['price'][] = $work['price'];
  //     $response['id'][] = $work['id'];
  //     $response['description'][] = utf8_encode($work['description']);
  //     $response['image'][] = utf8_encode($work['image']);
  //   }
  //   echo json_encode($response);
  //   return $workshop;
  // }

  public function workshopRegister()
  {
    // add a new address for a  parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO address (address,complement,city,zipcode) VALUES (:address,:complement,:city,:zipcode)");
    $req -> bindParam(':address',  $_POST['ParentAddress']);
    $req -> bindParam(':complement',  $_POST['ParentComp']);
    $req -> bindParam(':city',  $_POST['ParentCity']);
    $req -> bindParam(':zipcode',  $_POST['ParentZip']);
    $req -> execute();

    //search the last same address in table address
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT id FROM address WHERE address="'.$_POST['ParentAddress'].'" AND complement="'.$_POST['ParentComp'].'" AND zipcode="'.$_POST['ParentZip'].'" AND city="'.$_POST['ParentCity'].'" ORDER BY id DESC ');
    $req->execute();
    $address = $req->fetch();
    $lastAddress=$address['id'];
    // return $address;

    // add a new parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO parent (firstname,lastname,email,address_id) VALUES (:fname,:lname,:mail,:address)");
    $req -> bindParam(':fname',  $_POST['ParentFirstname']);
    $req -> bindParam(':lname',  $_POST['ParentLastname']);
    $req -> bindParam(':mail',  $_POST['ParentMail']);
    $req -> bindParam(':address', $lastAddress);
    $req -> execute();
    // echo $lastAddress;

    // add a new child
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO kid (firstname,lastname,birthday,classroom) VALUES (:fname,:lname,:birthday,:classroom)");
    // var_dump($req);
    $req -> bindParam(':fname',  $_POST['ChildFirstname']);
    $req -> bindParam(':lname',  $_POST['ChildLastname']);
    $req -> bindParam(':birthday',  $_POST['ChildDate']);
    $req -> bindParam(':classroom', $_POST['ChildClass']);
    $req -> execute();

    // select the last parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT id FROM parent WHERE lastname="'.$_POST['ParentLastname'].'" AND firstname="'.$_POST['ParentFirstname'].'" AND email="'.$_POST['ParentMail'].'"  ORDER BY id DESC LIMIT 1 ');
    $req->execute();
    $parent = $req->fetch();
    $lastParent=$parent['id'];

    // select the last child
    $bdd = $this->getConnection();
    $req = $bdd->prepare('SELECT id FROM kid WHERE lastname="'.$_POST['ChildLastname'].'" AND firstname="'.$_POST['ChildFirstname'].'" AND birthday="'.$_POST['ChildDate'].'"  ORDER BY id DESC LIMIT 1');
    $req->execute();
    $child = $req->fetch();
    $lastChild=$child['id'];
    echo "lastchild1:".$lastChild;

    // link kid to their parents
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO kid_has_parent (kid_id,parent_id) VALUES (:kid_id,:parent_id)");
    $req -> bindParam(':kid_id',  $lastChild);
    $req -> bindParam(':parent_id', $lastParent);
    $req -> execute();

    // link kid to a workshop
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO workshop_has_kid (workshop_id,kid_id,has_participated,validated) VALUES (:workshop_id,:kid_id,0,0)");
    $req -> bindParam(':workshop_id', $_POST['atelier']);
    $req -> bindParam(':kid_id',  $lastChild);
    $req -> execute();

    // if parent had a second child
    if ($_POST['ChildFirstname2'] !="" AND $_POST['ChildLastname2'] !="" AND $_POST['ChildDate2']) {
      echo " </br>2e enfant";
      # code...
      $bdd = $this->getConnection();
      $req = $bdd->prepare ("INSERT INTO kid (firstname,lastname,birthday,classroom) VALUES (:fname,:lname,:birthday,:classroom)");
      // var_dump($req);
      $req -> bindParam(':fname',  $_POST['ChildFirstname2']);
      $req -> bindParam(':lname',  $_POST['ChildLastname2']);
      $req -> bindParam(':birthday',  $_POST['ChildDate2']);
      $req -> bindParam(':classroom', $_POST['ChildClass2']);
      $req -> execute();

      // select the last child
      $bdd = $this->getConnection();
      $req = $bdd->prepare('SELECT id FROM kid WHERE lastname="'.$_POST['ChildLastname2'].'" AND firstname="'.$_POST['ChildFirstname2'].'" AND birthday="'.$_POST['ChildDate2'].'"  ORDER BY id DESC LIMIT 1');
      $req->execute();
      $child2 = $req->fetch();
      $lastChild2=$child2['id'];
      echo " </br>lastchild2:".$lastChild2;

      // link kid to their parents
      $bdd = $this->getConnection();
      $req = $bdd->prepare ("INSERT INTO kid_has_parent (kid_id,parent_id) VALUES (:kid_id2,:parent_id)");
      $req -> bindParam(':kid_id2',  $lastChild2);
      $req -> bindParam(':parent_id', $lastParent);
      $req -> execute();

      // link kid to a workshop
      $bdd = $this->getConnection();
      $req = $bdd->prepare ("INSERT INTO workshop_has_kid (workshop_id,kid_id,has_participated,validated) VALUES (:workshop_id,:kid_id2,0,0)");
      $req -> bindParam(':workshop_id', $_POST['atelier']);
      $req -> bindParam(':kid_id2',  $lastChild2);
      $req -> execute();

    }
    else {
      echo "no second";
    }

  }

}
$register = new User();
$register->workshopRegister();

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
