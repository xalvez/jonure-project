


<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$full_name = $_POST["full_name"];
$age = $_POST["age"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$phone_number = $_POST["phone_number"];

 

try {
 
require_once "connection.php";

 
$query = "INSERT INTO volunteers (full_name , age , phone_number , email , pwd) 
VALUES (?,?,?,?,?); ";

$stmt = $pdo->prepare($query);

$stmt->execute([$full_name , $age , $phone_number , $email , $pwd]);

 
$pdo = NULL;
$stmt = NULL;
 

header("Location:  http://localhost:3000/volunteers/volunteers_form/volunteers_form.php");
echo "<script> alert('we got your request'); </script>";
die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  header("Location: donation.php");
}
 
 