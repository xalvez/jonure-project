
<?php
 session_start();
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $pwd = $_POST["pwd"];

    



    try {
      require_once "connection.php";
    
        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Prepare and execute SQL query
        $stmt = $pdo->prepare("SELECT * FROM charity_admin WHERE full_name = :full_name AND
        pwd = :pwd ");
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':pwd', $pwd);

        $stmt->execute();
    
        // Fetch admin record
         
    
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {

            $sql = "SELECT (admin_id) as admin_id FROM charity_admin WHERE full_name = '$full_name';";
            $result = $pdo->query($sql);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $admin_id = $row["admin_id"];

            $stmt = $pdo->prepare("INSERT INTO log_in (full_name ,admin_id) VALUES (?,?);");
            $stmt->execute([$full_name , $admin_id]);

            if(isset($_POST["full_name"])){
              $_SESSION['full_name'] = $full_name;
            }else{
              echo  "there is not session full name";
            }

            

           

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
  <headr class="header-main" id="navbar" >
    
    <nav  class="hide"> 
      <div class="logo_img">
      <a href="http://localhost:3000/home%20page/j_project.php#" class="logo">
        <p>Helping <br>
          Hands<br>
           Foundation</p> 
       
       
        <img src="logo.png" alt="website logo">
     
     </a>  
     </div>
      <ul class="nav_charity_nav">
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



 

 


   <!-- #region -->
 

<div id="login-window">
  <form action="" method="POST">
    <h2>Login</h2>
    <label for="full_name">Username:</label>
    <input type="text" id="full_name" name="full_name" placeholder="Enter your username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="pwd" placeholder="Enter your password">
    <button type="submit">Login</button>
  </form>
</div>
  <!-- #endregion -->       

 <!-- #region -->


 <section class="sc_img">
    <div class="banner">
         <div class="text_nav">
            <h2>Welcome to Out Charity</h2>
            <p class="p_img">We strive to make a difference through charitable works.</p>
            <p class="p_img"> Creating Opportunities for the Underprivileged</p>
            <div class="sc_img_nac">
            <button>donate  </button>
            <button>donate  </button>
          </div>
          </div>
        </div>
 </section>

 <section class="th_text">
       
     
        <div class="feature">
            <img src="pichelp.avif" alt="Feature Image">
           
         <div>
          
            <div class="feature-text">
                <h3>Our Mission</h3>
                <p class="p_img">Charitable organizations play a crucial role in addressing the immediate needs of impoverished communities. By delivering essential goods, such as food</p>
                <a href="#">Learn More</a>
            </div>
            <div class="feature-text">
                <h3>Our Mission</h3>
                <p class="p_img">Charitable organizations play a crucial role in addressing the immediate needs of impoverished communities. By delivering essential goods, such as food</p>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div>
            <div class="feature-text">
                <h3>Our Missasdasdion</h3>
                <p class="p_img">Charitable organizations play a crucial role in addressing the immediate needs of impoverished communities. By delivering essential goods, such as food</p>
                <a href="#">Learn More</a>
            </div>
            <div class="feature-text">
              <div class="fth_text">
                <h3>Our Missdasdsion</h3>
                <p class="p_img">Charitable organizations play a crucial role in addressing the immediate needs of impoverished communities. By delivering essential goods, such as food</p>
                <a href="#">Learn More</a>
              </div>
            </div>
        </div>
     
    </section>
 


<!-- #endregion -->







  <!-- #region -->



  <div class="three_causes">
        <h2>Our Causes</h2>
        <div class="causes">
            <div class="cause">
                <img src="pic1.jpg" alt="Cause 1">
                <h3>Cause 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="cause">
                <img src="pichelp.avif" alt="Cause 2">
                <h3>Cause 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="cause">
                <img src="help_pic.avif" alt="Cause 3">
                <h3>Cause 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>







<!-- #endregion -->





 



<footer>
        <p>&copy; 2022 Charity Home. All rights reserved. | Privacy Policy | Terms of Service</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
  <script src="j_project.js"></script>
</body>
</html>