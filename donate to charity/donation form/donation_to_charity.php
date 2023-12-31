<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
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
 

// $sql = "INSERT INTO users(username, email, password, join_date) VALUES(?,?,?, now())";
// $statement = $db->prepare($sql);
// $statement->execute(array($username,$email, $password));

// charity donation
$query1 = "INSERT INTO charity_donation (money_amount , card_number , city , postal_code,phone_number,donor_id) 
VALUES (?,?,?,?,?,?);";

$stmt2 = $pdo->prepare($query1);
$stmt2->execute([$money_amount , $card_number , $city , $postal_code, $phone_number ,$donor_id]);

$pdo = NULL;
$stmt = NULL;
 

header("Location: http://localhost:3000/donate%20to%20charity/donation%20form/donation_form.php");
die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  header("Location: donation.php");
}
 
 ?>