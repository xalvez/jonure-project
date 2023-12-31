


<?php
 session_start();
 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["full_name"])) {
    $full_name = $_POST["full_name"];
    $pwd = $_POST["pwd"];

    



    try {
      require_once "connection.php";
    
        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Prepare and execute SQL query
        $stmt = $pdo->prepare("SELECT * FROM charity_admin 
        WHERE full_name = :full_name AND pwd = :pwd ");
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':pwd', $pwd);

        $stmt->execute();
    
        // Fetch admin record
         
    
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {

            $sql = "SELECT (admin_id) as admin_id FROM charity_admin;";
            $result = $pdo->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $admin_id = $row["admin_id"];

            $stmt = $pdo->prepare("INSERT INTO log_in (full_name ,admin_id) VALUES (?,?);");
            $stmt->execute([$full_name , $admin_id]);


            $_SESSION['full_name'] = $full_name;

           

            header("Location: http://localhost:3000/charity_admin/charity_admin.php");
            exit();
        } else {
            // Invalid username or password
            echo "Invalid username or password";
        }
    } catch (PDOException $e) {
        // Display database connection error
        echo "Connection failed: " . $e->getMessage();
    }

    


















    // // Query to check if the provided username and password match the admin table
    // $sql = "SELECT full_name FROM admin_co WHERE full_name = :full_name;";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam("s", $full_name);
    // $stmt->execute();
    
     
     
    
    // // If a matching record is found
    // if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    //     $_SESSION['full_name'] = $full_name;
    //     // Successful login, redirect to admin web page
    //     echo"success";
    //     header("Location: donation.php");
    //     exit;
    // } else {
    //     // Invalid credentials
        
    //     echo "Invalid username or password.";
    // }

}

//  declare(strict_types= 1);

//  function is_email_invalid($email){

//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//         return true;
//     }else{
//         return false;
//     }
//  }
 
 
 

 
 
 


 