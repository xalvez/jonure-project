<?php
 session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    
   
$event_name = $_POST['event_name']; 
 // charity donation
$money_amount = $_POST["money_amount"];
$card_number = $_POST["card_number"];
$city = $_POST["city"];
$postal_code = $_POST["postal_code"];
$phone_number = $_POST["phone_number"];

 // donor
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$age = $_POST["age"];

try {
 
require_once "connection.php";


 // donor
 $query2 = "INSERT INTO donor (full_name , email , pwd, age) 
 VALUES (?,?,?,?); ";
$stmt1 = $pdo->prepare($query2);
$stmt1->execute([$full_name , $email , $pwd, $age]);


$sql = "SELECT MAX(donor_id) as donor_id FROM donor;";
$result = $pdo->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$donor_id = $row["donor_id"];
 

 

// charity donation
$query1 = "INSERT INTO event_donation (money_amount , card_number , city , postal_code , phone_number , donor_id , event_name) 
VALUES (?,?,?,?,?,?,?);";

$stmt2 = $pdo->prepare($query1);
$stmt2->execute([$money_amount , $card_number , $city , $postal_code, $phone_number ,$donor_id , $event_name]);

$pdo = NULL;
$stmt = NULL;
 
echo '<script>alert("succecc")</script>'; 
echo"succecc";
die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  // header("Location: http://localhost:3000/EVENT/events.php");
  echo '<script>alert("no no no")</script>'; 
}
 
 ?>


 