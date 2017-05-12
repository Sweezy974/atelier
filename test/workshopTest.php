<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class Workshop extends TestCase{

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

  public function testVisibleWorkshop()
  {

    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM workshop WHERE visible=1 ');
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array('id' => '1','title' => 'developpement 3D','description' => 'developper des jeux','price' => '300.00','max_kids' => '20','image' => 'games.jpg','visible' => '1','public_age_id' => '4','establishment_id' => '1','workshop_category_id' => '1'),
      array('id' => '2','title' => 'Automobile','description' => 'la passion automobile','price' => '20.00','max_kids' => '15','image' => 'auto.jpg','visible' => '1','public_age_id' => '4','establishment_id' => '2','workshop_category_id' => '3'),
      array('id' => '3','title' => 'MOO','description' => 'Maths orientee objet','price' => '40.00','max_kids' => '10','image' => 'education.jpg','visible' => '1','public_age_id' => '4','establishment_id' => '1','workshop_category_id' => '2'),
      array('id' => '4','title' => 'La pyramide infernale','description' => 'test simplon reunion','price' => '0.00','max_kids' => '16','image' => 'pyramide.jpg','visible' => '1','public_age_id' => '4','establishment_id' => '2','workshop_category_id' => '4')
    );

    $this->assertEquals($expectedTable, $result);
  }
  // public function testWorkshopHasKid()
  // {
  //
  //   $database = $this->getConnection();
  //   $queryTable = $database->prepare('SELECT * FROM workshop_has_kid');
  //   $result = $queryTable->execute();
  //   $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
  //   $expectedTable = array(
  //     array('workshop_id' => '1','kid_id' => '1','has_participated' => '0','validated' => '1'),
  //     array('workshop_id' => '1','kid_id' => '2','has_participated' => '0','validated' => '0')
  //   );
  //   $this->assertEquals($expectedTable, $result);
  // }

  public function testWorkshopHasCategory()
  {

    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM workshop_category');
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable =  array(
      array('id' => '1','name' => 'JEUX VIDEO'),
      array('id' => '2','name' => 'EDUCATION'),
      array('id' => '3','name' => 'MECANIQUE'),
      array('id' => '4','name' => 'ART')
    );
    $this->assertEquals($expectedTable, $result);
  }

  public function testNewWorkshop()
  {
    // add a new address for a  parent
    $bdd = $this->getConnection();
    $req = $bdd->prepare ("INSERT INTO workshop (title,description,price,max_kids,image,visible,public_age_id,establishment_id,workshop_category_id)
    VALUES ('titre','description',50,20,'test.jpg',1,2,1,2)");
    $req -> execute();

    $id = $bdd->lastInsertId();
    echo $id;


    $database = $this->getConnection();
    $queryTable = $database->prepare('SELECT * FROM workshop WHERE id="'.$id.'" ' );
    $result = $queryTable->execute();
    $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
    $expectedTable = array(
      array(
        'id' => $id,
        'title' => 'titre',
        'description' => 'description',
        'price' => '50.00',
        'max_kids' => '20',
        'image' => 'test.jpg',
        'visible' => '1',
        'public_age_id' => '2',
        'establishment_id' => '1',
        'workshop_category_id' => '2')
      );
      $this->assertEquals($expectedTable, $result);

      $bdd = $this->getConnection();
      $req = $bdd->prepare ("DELETE FROM workshop where id='".$id."'");
      $req -> execute();
    }

  }
  ?>
