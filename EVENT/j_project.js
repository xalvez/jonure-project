 

 /*changing the background color */

function colorChange() {
    
    
    if(document.body.style.backgroundColor == "white" )
    {
    document.body.style.backgroundColor = "black";
    document.getElementById("nav6").style.color = "white";
    document.getElementById("nav2").style.color = "white";
    document.getElementById("nav3").style.color = "white";
    document.getElementById("nav4").style.color = "white";
    document.getElementById("nav5").style.color = "white";
    document.getElementById("header-main").style.color = "white";
    document.getElementById("moon").src ='sun.png';
    
}
else  
{
document.body.style.backgroundColor = "white";
document.getElementById("nav6").style.color = "black";
document.getElementById("nav2").style.color = "black";
document.getElementById("nav3").style.color = "black";
document.getElementById("nav4").style.color = "black";
document.getElementById("nav5").style.color = "black";
document.getElementById("header-main").style.color = "black";
document.getElementById("moon").src ='moon.png';
}
  }

 /*changing the background color */
 const donationForm = document.getElementById('donationForm');
 const personalInfo = document.getElementById('personalInfo');
 const paymentInfo = document.getElementById('paymentInfo');
 const donateButton = document.getElementById('donateButton');
 const nextButton = document.getElementById('nextButton');
 

 
 donateButton.addEventListener('click', () => {
   donationForm.classList.remove('hidden');
 });
 
 nextButton.addEventListener('click', () => {
   personalInfo.classList.add('hidden');
   paymentInfo.classList.remove('hidden');
 });




//  $(document).ready(function() {
//   $('#event_name').submit(function(e) {
//       e.preventDefault(); // Prevent form submission

//       // Serialize the form data
//       var formData = $('#event_name').serialize();

//       // Make an AJAX request to the PHP script
//       $.ajax({
//           url: 'conn3.php', // Replace with the correct PHP script URL
//           type: 'POST',
//           data: formData,
//           dataType: 'json',
//           success: function(response) {
//               // Display the success message or handle any other logic
//               alert(response.message);
//           },
//           error: function(xhr, status, error) {
//               // Display an error message or handle any other logic
//               alert('Error: ' + error);
//           }
//       });
//   });
// });

function showUser(event_name) {
   
    
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("event").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","connection.php?q="  ,true);
    xmlhttp.send();
 

  }



