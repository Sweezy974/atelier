<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class DbTest extends TestCase{

     private $connection;

     protected function getConnection()
     {
       try {
           $this->connection = new PDO('mysql:host=localhost;dbname=tavoiture','root','');
           $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e) {
           print "Erreur !: " . $e->getMessage() . "<br/>";
           die();
       }
       return $this->connection;
     }

     public function testDisplayAvailableVehicle()
     {

         $database = $this->getConnection();
         $queryTable = $database->prepare(
            'SELECT * FROM vehicle WHERE available="1" ');
         $result = $queryTable->execute();
         $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
         $expectedTable = [
            ["id" => "1",
            'price' => '500.00',
            'places' => '4',
            'color' => 'noire',
            'user_id' => '1',
            'model_id' => '7',
            'address_id' => '1',
            'fuel' => 'essence',
            'status' => 'tres bon etat',
            'description' => 'je met a disposition ma voiture qui est tres bien entretenu',
            'available' => '1'

         ]
      ];

         $this->assertEquals($expectedTable, $result);
   }

     public function testDisplayUnvailableVehicle()
     {

         $database = $this->getConnection();
         $queryTable = $database->prepare(
            'SELECT * FROM vehicle WHERE available="0" ');
         $result = $queryTable->execute();
         $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
         $expectedTable = [
            ["id" => "2",
             "price" => "80.00",
             "places" =>"2",
             'places' => '2',
       'color' => 'rouge',
       'user_id' => '1',
       'model_id' => '8',
       'address_id' => '1',
       'fuel' => 'essence',
       'status' => 'bon etat',
        'description' => 'peinture fresh',
        'available' => '0'

          ]
      ];

         $this->assertEquals($expectedTable, $result);
   }

   public function testDisplayAcceptedReservation()
   {

       $database = $this->getConnection();
       $queryTable = $database->prepare(
          'SELECT * FROM reservation WHERE status="1" ');
       $result = $queryTable->execute();
       $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
       $expectedTable = [
          ["id" => "1",
          'status' => '1',
          'vehicle_id' => '1',
          'user_id' => '1',
          'start_booking' => '2017-04-13 00:00:00',
          'end_booking' => '2017-04-17 00:00:00'

       ]
    ];

       $this->assertEquals($expectedTable, $result);
 }

 public function testDisplayReservationSend()
{

     $database = $this->getConnection();
     $queryTable = $database->prepare(
        'SELECT * FROM reservation WHERE status="0" ');
     $result = $queryTable->execute();
     $result= $queryTable->fetchAll(PDO::FETCH_ASSOC);
     $expectedTable = [
        ["id" => "2",
        'status' => '0',
        'vehicle_id' => '1',
        'user_id' => '1',
        'start_booking' => '2017-04-24 00:00:00',
        'end_booking' => '2017-04-30 00:00:00'

     ]
  ];

     $this->assertEquals($expectedTable, $result);
}
}
?>
