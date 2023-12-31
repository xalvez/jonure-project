<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>DONATION to charity FORM</title>
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
 


<!-- <div class="all">

  <div class="dis">
   <h1>request to register as a beneficiary</h1>
   <p">welcome to our charity , we are here to help you. <br>
  please fill up the form to get your aid request , <br>
and submit the request and if you got any issuse </p>
    <p>please <a href="#">contact us </a></p>
    
</div> -->


 
  <!--form -->
   

 
  <div class="container">
        <form id="multiStepForm" action="donation_to_charity.php" method="post">
            <div class="step-container active" id="step1">
                <h2>Step 1 - Personal Information</h2>
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
                <button type="submit">Submit</button>
                <button type="button" onclick="resetForm()">Return</button>
            </div>
        </form>
    </div>

    <script>
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



 
   <!--form -->


   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="j_project.js"></script>
</body>
</html>