<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>home</title>
  <link rel="stylesheet" href="needy.css.css">
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
  <div class="text_image">
   <div class="food_needy">
      <img src="food_needy.jpg" alt="food needy image">
    </div>
    <div class="food_dis">
    <h1 class="h1_food">Food security & Livelihood (FSL)</h1>
    <p class="p_food">Increase food availability, accessibility,
       resilience and economic <br> participation in sustainable
        food ecosystems for vulnerable households.</p>
        <ul>
          <li>Improved food security to ensure communities are self reliant
            and become sustainable and thrive</li>
            <li>Improved number of local businesses for 
              food productions within communities 
              (Commercially viable enterprises)</li>
        </ul>
         <div class="aid">
          <form action="http://localhost:3000/needy%20form/needyform.php#">
  <button class="btn_aid">AID REQUEST</button>
</form>
 </div>
      </div>
 </div>

 <div class="text_image2">
   
    <div class="food_dis2">
    <h1 class="h1_food">Nutrition and Health</h1>
    <p class="p_food">ACFS contributes towards the physical, 
      emotional, social wellbeing,<br> and cognitive development of 
      children between 0 and 18 years.</p>
        <ul>
          <li>Undernutrition is reduced among children</li>
            <li>Improved healthy environments for all children</li>
            <li>Improved nutrition education to enable better lifelong dietary habits</li>
        </ul>
        <div class="aid">
          <form action="http://localhost:3000/needy%20form/needyform.php#">
  <button class="btn_aid">AID REQUEST</button>
</form>
 </div>
      </div>
        <div class="food_needy2">
      <img src="picmidecen.jpg" alt="food needy image">
    </div>
 </div>


 
  
  <script src="needy.js.js"></script>
</body>
</html>