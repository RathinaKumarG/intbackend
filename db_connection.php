<?php
$pdo=null;
function __construct(){
    $pdo=
}
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "phpadmin";
 $dbpass = "php@1234";
 $db = "employeedb";
 //$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $conn = new PDO("mysql:host=" . $dbhost . ";dbname=" . $db, $dbuser, $dbpass);
 return $conn->exec("set names utf8");
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>