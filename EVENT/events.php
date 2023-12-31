 


<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>events</title>
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
              <li><a class="subnav" href="http://localhost:3000/donate%20to%20charity/j_project.php#">donate to charity</a></li>
              <li><a class="subnav" href="http://localhost:3000/EVENT/events.php">donate to event</a></li>  
           </dive>            
           </ul>
        </li>
        <li><a class="nav1" id="nav5" href="http://localhost:3000/EVENT/events.php">our events</a></li>
        <li><a class="nav1" id="nav6" href="#">contact</a></li>  
      </ul>
       <button onclick="colorChange()"class="btn_nav" id="btn_chng"><img class="img_ms" id="moon" src="moon.png"></button>
       
       </nav>
   
  </headr>
</div>
    <!-- <div class="bk_img">
    <img src="pichelp.avif" alt="">
  </div> -->

 <!-- #region -->

 <main>
 <?php
        
        require_once "connection.php";
       
           $stmt = $pdo->query("SELECT * FROM events");
            
       
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
           
       ?>
       
       <div class="card">
            
           <div class="caption">
           
               <p class="event_name"><?php echo $row["event_name"]; ?></p>
               <p class="target_group"><?php echo $row["target_group"]; ?></p>
                
           </div>
           <button class="add" id="event" onclick="show()" name="event_name" <?php echo $row["event_name"]; ?>>Donate</button>
       </div>

 
       <?php

}

?>




   
   </main>


 <!-- #endregion -->




 <!-- #region -->
 

 


 

<div id="hid" class="container">
        <form id="multiStepForm" action="conn3.php" method="post">
            <div class="step-container active" id="step1">
                <h2>Step 1 - Personal Information</h2>
                <label for="">event_name:</label>
        <select   name="event_name" required>
          
        <?php  
        require_once "connection.php";
       
           $stmt = $pdo->query("SELECT * FROM events");
            
       
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
           
       ?>
             <option value="<?php echo $row["event_name"]; ?>"><?php echo $row["event_name"]; ?></option>
  <?php

}

?>

                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="number" name="age" placeholder="Age" required>
                <input type="password" name="pwd" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="button" onclick="nextStep()">Next</button>
            </div>
            <div class="step-container" id="step2">
                <h2>Step 2 - Additional Information</h2>
                <input type="text" name="phone_number" placeholder="Phone Number" required>
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="card_number" placeholder="Card Number" required>
                <input type="text" name="postal_code" placeholder="Postal Code" required>
                <input type="text" name="money_amount" placeholder="Money Amount" required>
                <button type="submit" value="Donate" >Submit</button>
                <button type="button" onclick="resetForm()" >Return</button>
            </div>
        </form>
    </div>

    <script>
var form = document.getElementById("hid");
        form.style.display = "none";
     
      function show(){
        var form = document.getElementById("hid");
        form.style.display = "block";
        
      }
        function nextStep() {
            document.getElementById("step1").classList.remove("active");
            document.getElementById("step2").classList.add("active");
        }
        function resetForm() {
  document.getElementById("multiStepForm").reset();
  document.getElementById("step2").classList.remove("active");
  document.getElementById("step1").classList.add("active");
}
    </script>
 


 <!-- #endregion -->















  
  
  <script src="j_project.js"></script>
</body>
</html>
<?php
 die();
?>