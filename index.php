<?php
$pdo=null;


$dbhost = "localhost";
 $dbuser = "phpadmin";
 $dbpass = "php@1234";
 $db = "employeedb";
 try {
         
 //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $db, $dbuser, $dbpass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
      ]);
 }
 catch (Exception $ex) { die($ex->getMessage()); }

//$conn = OpenCon();



    $products_arr=array();
    $products_arr["records"]=array();
       // $query = "SELECT * FROM employee";

        $stmt = $pdo->prepare("SELECT * FROM `employee`");

        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
                extract($row);
                $product_item=array(
                        "id" => $id,
                        "name" => $name,
                        "age" => $age,
                        "role" => $role,
                        "city" => $city,
                        "data_created" => $data_created
                    );
             
                    array_push($products_arr["records"], $product_item);
                    echo json_encode($products_arr);
                }

                
        
?>