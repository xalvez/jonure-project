 

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
document.getElementById("moon").src ='moon.png';
}
  }

 /*changing the background color */









