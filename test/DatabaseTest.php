<?php
namespace Test;
use PDO;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
  public $connection = null;
  function testGetConnection() {
      $this->connexion = new PDO('mysql:host=localhost;dbname=atelier', 'root', '');
      $this->assertNotNull($this->connexion);
  }
  public function getConnection() {
      $this->connection = new PDO('mysql:host=localhost;dbname=atelier', 'root', '');
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $this->connection;
  }
}
