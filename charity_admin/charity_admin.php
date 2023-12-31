 
 <?php 


 
session_start();
require_once "connection.php";


if (isset($_SESSION['full_name'])){

$full_name = $_SESSION['full_name'];

}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$event_name = $_POST['event_name'];
$target_group  = $_POST['target_group'];

 
$sql = "SELECT (admin_id) as admin_id FROM charity_admin WHERE full_name = '$full_name';";
$result = $pdo->query($sql);
$rowq = $result->fetch(PDO::FETCH_ASSOC);
$admin_id = $rowq["admin_id"];
 
$sql = "SELECT (charity_name) as charity_name FROM chrity_organization ;";
$result = $pdo->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$charity_name = $row["charity_name"];


 
$stmt = $pdo->prepare("INSERT INTO events (event_name, target_group , charity_name , admin_id) 
VALUES (?, ?, ? ,?);");

$stmt->execute([$event_name  , $target_group , $charity_name , $admin_id]);

 
 
 

header("Location: http://localhost:3000/EVENT/events.php");
die();
}



 
 

 ?>



<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>home</title>
  <link rel="stylesheet" href="j_project.css">
</head>
<body>


 <div class="navigation2">
  <headr class="header-main">
    
    <nav> 
      
      <a href="http://localhost:3000/home%20page/j_project.php#" class="logo">
        <img src="logo.png" alt="website logo">
     </a>
      <ul>
        <li><a class="nav1" id="nav2" href="#">about us</a>
           <ul class="drop">
            <div class="bord" id="bord_anim">
              <li><a class="subnav" href="#">who we are</a></li>
              <li><a class="subnav" href="#">charity goals</a></li>
            </div>
           </ul>
       </li>
       <li><a class="nav1" id="nav3" href="#">register</a>
          <ul class="drop">
          <div class="bord" id="bord_anim">
            <li><a class="subnav" href="http://localhost:3000/needy/needy.php.php">request to register as a beneficiary</a></li>
            <li><a class="subnav" href="http://localhost:3000/volunteers/volunteers.php">volunteering</a></li>
          </dive>
          </ul>
         </li> 
        
        <li><a class="nav1" id="nav4" href="#">how to help</a>
           <ul class="drop">
           <div class="bord" id="bord_anim">
              <li><a class="subnav" href="http://localhost:3000/donate%20to%20charity/j_project.php">donate to charity</a></li>
              <li><a class="subnav" href="http://localhost:3000/EVENT/events.php">donate to event</a></li>  
           </dive>            
           </ul>
        </li>
        <li><a class="nav1" id="nav5" href="http://localhost:3000/EVENT/events.php">our events</a></li>
        <li><a class="nav1" id="nav6" href="#">contact</a></li>  
      </ul>
      <!-- light button -->
       <button onclick="colorChange()"class="btn_nav" id="btn_chng"><img class="img_ms" id="moon" src="moon.png"></button>
     
       <button  class="btn_nav" id="toggle_btn"><img class="img_ms" id="moon" src="black_admin.png"></button>
      
       
       </nav>
   
  </headr>
</div>

    <div class="bk_img">
    <img src="pichelp.avif" alt="">

  </div>

  <h1> <?php echo $_SESSION['full_name'] ?></h1>

   <!-- #region -->
 
   <button id="openWindow">Open Window</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="" method="POST">
      <label for="eventName">Event Name:</label>
      <input type="text" id="eventName" name="event_name">
      <label for="targetGroup">Target Group:</label>
      <input type="text" id="targetGroup" name="target_group">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

  <!-- #endregion -->       

 



  
  
  <script src="j_project.js"></script>
</body>
</html>