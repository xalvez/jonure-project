 

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


 const toggleBtn = document.getElementById('toggle_btn');
    
 toggleBtn.addEventListener('click', () => {
   const loginWindow = document.getElementById('login-window');
   loginWindow.classList.toggle('show');
 });


//  function showHiddenWindow() {
//   var hiddenWindow = document.querySelector('.hidden-window');
//   hiddenWindow.style.display = 'block';
// }



const sr = ScrollReveal ({
  distance : '65px',
  duration : 2600,
  delay : 450,
  reset : true
});

sr.reveal('.feature-text',{delay:200,origin:'bottom'});
sr.reveal('.cause',{delay:200,origin:'bottom'});




var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px"; // hide the navigation bar by adding a negative top value
  }
  prevScrollpos = currentScrollPos;
};