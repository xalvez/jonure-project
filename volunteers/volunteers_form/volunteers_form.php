<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>VOLUNTEERS_FORM</title>
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
              <li><a class="subnav" href="#">donate to charity</a></li>
              <li><a class="subnav" href="#">donate to event</a></li>  
           </dive>            
           </ul>
        </li>
        <li><a class="nav1" id="nav5" href="#">our events</a></li>
        <li><a class="nav1" id="nav6" href="#">contact</a></li>  
      </ul>
       <button onclick="colorChange()"class="btn_nav" id="btn_chng"><img class="img_ms" id="moon" src="moon.png"></button>
       
       </nav>
   
  </headr>
<!-- </div>
    <div class="bk_img">
    <img src="pichelp.avif" alt="">
  </div> -->
 


<div class="all">

  <div class="dis">
   <h1>request to register as a beneficiary</h1>
   <p">welcome to our charity , we are here to help you. <br>
  please fill up the form to get your aid request , <br>
and submit the request and if you got any issuse </p>
    <p>please <a href="#">contact us </a></p>
    
</div>


 
  <!--form -->
  <div class="form-container">
  
    <h2>AID REQUESTING</h2>
    <form action="volunteer_request.php" method="POST">
      <div class="form-group">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full-name" name="full_name" required>
      </div>

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
      </div>
      
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="residential-area" name="email" required>
      </div>

      <div class="form-group">
        <label for="pwd">password:</label>
        <input type="text" id="phone-number" name="pwd" required>
      </div>

      <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone-number" name="phone_number" required>
      </div>

      
     
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
    <div class="form_dis">
    <h3>welcome to our charity</h3>
    <p>if you got any issues while submitting the form</p>
    <p>please <a href="#">contact us </a></p>
    </div>
  </div>
  </div>
 
   <!--form -->
  <script src="j_project.js"></script>
</body>
</html>