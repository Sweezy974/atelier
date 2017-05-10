<?php
namespace Controllers;
use Models\Workshop;
// include_once('app/Config.php');


class WorkshopController extends Controller
{
  // protected function getConnection()
  // {
  //   try {
  //     $this->connection = new PDO('mysql:host=localhost;dbname=tavoiture','root','');
  //     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   } catch (PDOException $e) {
  //     print "Erreur !: " . $e->getMessage() . "<br/>";
  //     die();
  //   }
  //   return $this->connection;
  // }

  public function index()
  {
    include_once('models/Workshop.php');
    include_once('views/workshop/index.php');

  }

  public function ownerIndex()
  {
    // include_once('models/user/ajax/vehicleList.php');
    include_once('views/user/role/owner/navbar/index.php');
    include_once('views/user/role/owner/index.php');
    include_once('views/base/script.php');

    // echo "Hello Owner Page!";
  }



}
