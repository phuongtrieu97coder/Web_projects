document.getElementById("video_car1").src = "video/bugatti_chiron.mp4";
document.getElementById("video_car2").src = "video/Lamborghini_Sian.mp4";
document.getElementById("video_car3").src = "video/Pagani Huayra.mp4";


var v1 = document.getElementById("video_car1");
var v2 = document.getElementById("video_car2");
var v3 = document.getElementById("video_car3");


function end_func(){
     
     
           document.getElementById("video_car1").style.display = "none";
           document.getElementById("video_car2").style.display = "block";
           document.getElementById("video_car2").play();

     
}
function end_func2(){
     
     
           document.getElementById("video_car2").style.display = "none";
           document.getElementById("video_car3").style.display = "block";
           document.getElementById("video_car3").play();

     
}
function end_func3(){
     
     
           document.getElementById("video_car3").style.display = "none";
           document.getElementById("video_car1").style.display = "block";
           document.getElementById("video_car1").play();

     
}
