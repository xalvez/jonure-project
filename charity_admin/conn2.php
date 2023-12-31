

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["full_name"])){

$full_name = $_SESSION['full_name'];
$event_name = $_POST['event_name'];
$target_group  = $_POST['target_group'];

try {
// Create a PDO     connection to the database
require_once "connection.php";


$sql = "SELECT (admin_id) as admin_id FROM log_in WHERE full_name = :full_name;";
$result = $pdo->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$admin_id = $row["admin_id"];

$sql = "SELECT (charity_name) as charity_name FROM chrity_organization ;";
$result = $pdo->query($sql);
$rowQ = $result->fetch(PDO::FETCH_ASSOC);
$charity_name = $rowQ["charity_name"];

// Insert the form data into the "donors" table
$query = "INSERT INTO events (event_name, target_group , admin_id , charity_name) 
VALUES (?, ?, ? , ?);";

$stmt = $pdo->prepare($query);

$stmt->execute([$event_name  , $target_group , $charity_name , $admin_id ]);

//free resouces
$pdo = NULL;
$stmt = NULL;
// echo "good boy";

header("Location: events.php");
die();

} catch (PDOEXcEPTION $e) {
    die("query failed : " . $e->getmessage());
}


}else {
  header("Location: donation.php");
}
 
 ?>