<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class User extends TestCase{

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


  public function testWorkshopRegistration()
  {
    // add a new address for a  parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO address (address,complement,city,zipcode) VALUES ('ADRESSE','COMPLEMENT','ville',97444)");
    $req -> execute();
    $idAddress = $bdd->lastInsertId();

    // test display address for a parent
    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM address WHERE id="'.$idAddress.'" ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id'=>$idAddress,
        'address' => 'ADRESSE',
        'complement' => 'COMPLEMENT',
        'city' => 'ville',
        'zipcode' => '97444'
      )
    );
    // $this->assertEquals($expectedTable, $result);

    // add a new parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO parent (firstname,lastname,email,address_id) VALUES ('prenom du parent','nom du parent','prenom@nom.fr','".$idAddress."')");
    $req -> execute();
    $idParent = $bdd->lastInsertId();

    //test display for a parent
    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM parent WHERE id="'.$idParent.'" ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id'=>$idParent,
        'firstname'=>'prenom du parent',
        'lastname' => 'nom du parent',
        'email' => 'prenom@nom.fr',
        'address_id' => $idAddress
      )
    );

    // add a new kid
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO kid (firstname,lastname,birthday,classroom) VALUES ('prenom enfant','nom enfant','2010-04-10','CP')");
    $req -> execute();
    $idKid = $bdd->lastInsertId();

    //test display for a kid
    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM kid WHERE id="'.$idKid.'" ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id'=>$idKid,
        'firstname'=>'prenom enfant',
        'lastname' => 'nom enfant',
        'birthday' => '2010-04-10',
        'classroom' => 'CP'
      )
    );

    // link kid to their parents
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO kid_has_parent (kid_id,parent_id) VALUES ('".$idKid."','".$idParent."')");
    $req -> bindParam(':kid_id',  $lastChild);
    $req -> bindParam(':parent_id', $lastParent);
    $req -> execute();
    $idKidHasParent = $bdd->lastInsertId();

    //test display for a kid_has_parent
    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM kid_has_parent WHERE parent_id="'.$idKidHasParent.'" AND  kid_id="'.$idKid.'" ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id'=>$idKidHasParent,
        'kid_id'=>$idKid,
        'parent_id'=>$idParent

      )
    );

    // link kid to a workshop
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO workshop_has_kid (workshop_id,kid_id,has_participated,validated) VALUES (1,'".$idKid."',1,1)");
    $req -> execute();
    $idWorkshop = $bdd->lastInsertId();

    //test display for a workshop_has_kid
    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM workshop_has_kid WHERE kid_id="'.$idKid.'" AND has_participated=1 AND validated=1 ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id'=>$idWorkshop,
        'workshop_id'=>'1',
        'kid_id' =>$idKid,
        'has_participated' => '1',
        'validated' => '1'
      )
    );


    $this->assertEquals($expectedTable, $result);
    //
    // //delete last kid_has_parent
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("DELETE FROM workshop_has_kid where id='".$idWorkshop."'");
    // $req -> execute();

    // //delete last kid_has_parent
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("DELETE FROM kid_has_parent where id='".$idKidHasParent."'");
    // $req -> execute();
    //
    // //delete last child
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("DELETE FROM kid where id='".$idChild."'");
    // $req -> execute();
    //
    // //delete last parent
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("DELETE FROM parent where id='".$idParent."'");
    // $req -> execute();
    //
    // //delete last address
    // $bdd = $this->getConnection();
    // $req = $bdd->prepare ("DELETE FROM address where id='".$idAddress."'");
    // $req -> execute();
  }


}
?>
