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
    // include_once('models/Workshop.php');
    // $workshop = new Workshop();
    // $workshop->listWorkshop();
    include_once('views/workshop/index.php');

  }

  public function create()
  {
    include_once('views/workshop/create/index.php');

    $workshop= new Workshop();
    $workshop->workshopCreate();

  }



}
