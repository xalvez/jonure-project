<?php

 

//info about database

$dsn = "mysql:host=localhost;dbname=charity";
$dbusername = "root";
$dbpassword = "";

//try and catch is for exceptions that might be occured while loging in 
try {
    //making database object to define the connection with the database 
    $pdo =  new PDO($dsn , $dbusername , $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
     
}