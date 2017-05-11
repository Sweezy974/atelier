<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class WorkshopRegisterTest extends TestCase{

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

     // add a new parent
     $bdd = $this->getConnection();
     $req = $bdd->prepare ("INSERT INTO parent (firstname,lastname,email,address_id) VALUES ('PRENOM','NOM','prenom@nom.fr','".$idAddress."')");
     $req -> execute();
     $idParent = $bdd->lastInsertId();
   }
}
?>
