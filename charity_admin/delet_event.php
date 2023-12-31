<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
 
$event_name = $_POST["event_name"];
$target_group = $_POST["target_group"];
try {
 
require_once "connection.php";

 
$query = "DELETE FROM events WHERE event_name = :event_name AND target_group = :target_group;";


$stmt = $pdo->prepare($query);
$stmt->bindParam(":event_name", $event_name);
$stmt->bindParam(":target_group", $target_group);

 
 

$stmt->execute();

header("Location: events.php");
 
$pdo = NULL;
$stmt = NULL;
 


die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  header("Location: donation.php");
}
 
 ?>