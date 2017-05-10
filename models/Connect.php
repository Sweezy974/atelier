<?php

/**
 *
 */
class Connect
{

  function __construct()
  {
    # code...
  }
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
}
