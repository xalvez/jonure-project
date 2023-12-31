


<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$full_name = $_POST["full_name"];
$age = $_POST["age"];
$phone_number = $_POST["phone_number"];
$residential_area = $_POST["residential_area"];
$marital_status = $_POST["marital_status"];
$type_of_aid = $_POST["type_of_aid"];

try {
 
require_once "connection.php";

 
$query = "INSERT INTO needy (full_name , age , phone_number , residential_area , marital_status ,type_of_aid) 
VALUES (?,?,?,?,?,?); ";

$stmt = $pdo->prepare($query);

$stmt->execute([$full_name , $age , $phone_number , $residential_area , $marital_status , $type_of_aid]);

 
$pdo = NULL;
$stmt = NULL;
 
echo "<script>alert('we got your request');</script>";
header("Location:  http://localhost:3000/needy%20form/needyform.php");
die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  header("Location: donation.php");
}
 
 