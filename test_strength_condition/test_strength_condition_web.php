<!DOCTYPE html>
<html lang="en">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    
    <style>
       .img_slide{display:none;}
       .intro_quote{
            color:aqua;
            font-size:35px;
            padding:0px 100px;
           
        }
        body{background-color:black;}

        #daytime{
             color:white;
        }

        
        footer .footer_img_slide{display:none;}
        
    </style>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body> 
    
    <div id="block1" class="w3-display-container">
         <img class="img_slide"src="strength-img3.jpg" width="100%" height="200px">
         <img class="img_slide"src="strength-img4.jpg" width="100%" height="200px"> 
         <b class="intro_quote w3-display-middle">TEST STRENGTH && FITNESS CONDITION</b>
         <b id="daytime" class="w3-display-topright"></b>
    </div>
    <script>
         var slide_index=0;
         carousel();
         function  carousel(){
            var i;
            var x  = document.getElementsByClassName("img_slide");
            for(i=0;i<x.length;i++){
                 x[i].style.display="none";
            }
            slide_index++;
            if(slide_index>x.length){slide_index=1};
            x[slide_index-1].style.display="block";
            setTimeout(carousel,2000);
         }

         setInterval(daytime_func,1000);
         function daytime_func(){
              var d = new Date();
              var hour = d.getHours(), minute = d.getMinutes(), second = d.getSeconds();
              if(hour<10&&minute<10&&second<10){
                    document.getElementById("daytime").innerHTML = "0"+hour+":0"+minute+":0"+second+"AM"
              }else if(hour<10&&minute<10&&second>10){
                    document.getElementById("daytime").innerHTML = "0"+hour+":0"+minute+":"+second+"AM"
              }else if(hour<10&&minute>10&&second<10){
                    document.getElementById("daytime").innerHTML = "0"+hour+":"+minute+":0"+second+"AM"
              }else if(hour<10&&minute>10&&second>10){
               document.getElementById("daytime").innerHTML = "0"+hour+":"+minute+":"+second+"AM"
              }else if(hour==11&&minute<10&&second<10){
               document.getElementById("daytime").innerHTML = hour+":0"+minute+":0"+second+"AM"
              }else if(hour==11&&minute<10&&second>10){
               document.getElementById("daytime").innerHTML = hour+":0"+minute+":"+second+"AM"
              }else if(hour==11&&minute>10&&second<10){
               document.getElementById("daytime").innerHTML = hour+":"+minute+":0"+second+"AM"
              }else if(hour==11&&minute>10&&second>10){
               document.getElementById("daytime").innerHTML = hour+":"+minute+":"+second+"AM"
              }
              else if(hour>=12&&minute<10&&second>10){
               document.getElementById("daytime").innerHTML = hour+":0"+minute+":"+second+"PM"
               }else if(hour>=12&&minute>10&&second<10){
                    document.getElementById("daytime").innerHTML = hour+":"+minute+":0"+second+"PM"
               }else if(hour>=12&&minute>10&&second>10){
                    document.getElementById("daytime").innerHTML = hour+":"+minute+":"+second+"PM"
               }else if(hour>=12&&minute<10&&second<10){
                    document.getElementById("daytime").innerHTML = hour+":0"+minute+":0"+second+"PM"
               }else if(hour>=12&&minute>10&&second<10){
                    document.getElementById("daytime").innerHTML = hour+":"+minute+":0"+second+"PM"
               }else if(hour>=12&&minute>10&&second>10){
                    document.getElementById("daytime").innerHTML = hour+":"+minute+":"+second+"PM"
               }
         }
    </script>


     <!--horizontal menu nav bar-->
     <div id="block2 " class="w3-nav w3-gray">
            <button class="w3-button w3-hover-white w3-ripple">HOME <i class='fas fa-home' style='font-size:24px'></i></button>
            <button class="w3-button w3-hover-white w3-ripple">MENU  <i class='fas fa-align-justify' style='color:purple'></i></button>
            <button class="w3-right w3-button w3-hover-white w3-ripple" style="margin:0px 2px"><i class='fab fa-facebook-square' style='color:blue'></i> FACEBOOK</button>
            <button class="w3-right w3-button w3-hover-white w3-ripple" style="margin:0px 2px"><i class='fab fa-twitter' style='color:aqua'></i> TWITTER</button>
            <button class="w3-right w3-button w3-hover-white w3-ripple" style="margin:0px 2px"><i class='fas fa-envelope-open' style='color:red'></i> GMAIL</button>
            <button class="w3-right w3-button w3-hover-white w3-ripple" style="margin:0px 2px"><i class='fas fa-phone' style='color:green'></i> CONTACT</button>
            <button class="w3-right w3-button w3-hover-white w3-ripple" style="margin:0px 2px"><i class='fab fa-github'></i> GITHUB</button>
     </div>


     <div id="block3" class="w3-grid w3-container w3-margin ">

           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-white">
                    <img src="rpe_scale.jpeg" width="100%" class="w3-opacity-min" height="338px">
                    <b class="w3-display-middle" style="color:white;font-size:60px">RPE CALCULATE</b>
           </div>


           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-red">
                    <img src="power.jpg" width="100%" class="w3-opacity-min" height="338px">
                    <b class="w3-display-middle" style="color:red;font-size:60px">BUILD POWER</b>
           </div>


           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-aqua">
                    <img src="strength.jpg" width="100%" class="w3-opacity-min" height="338px">
                    <b class="w3-display-middle" style="color: #1aff1a;font-size:60px">BUILD STRENGTH</b>
           </div>
           


     </div>




     <div id="block4" class="w3-grid w3-container w3-margin">
           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-green">
                    <img src="muscle.jpg" width="100%" class="w3-opacity-min" height="338px">
                    <b class="w3-display-middle" style="color: #99cc00;font-size:60px">BUILD MUSCLE</b>
           </div>

           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-blue">
                    <img src="endurance.jpg" width="100%" class="w3-opacity-min" height="338px">
                    <b class="w3-display-middle" style="color:#80ccff;font-size:60px">BUILD ENDURANCE</b>
           </div>


           <div class="w3-third  w3-display-container w3-hover-opacity w3-border w3-border-purple">
                    <img src="progress.png" width="100%" class="w3-opacity-min" height="338px"> 
                    <b class="w3-display-middle" style="color:#9900cc;font-size:60px">YOUR PROGRESS</b>
           </div>

     </div>



     <div id="block5"></div>
     <div id="block6"></div>
     <div id="block7"></div>
     <div id="block8"></div>
     <div id="block9"></div>
     <div id="block10"></div>
     <div id="block11"></div>
     <div id="block12"></div>
     <div id="block13"></div>
     <div id="block14"></div>
     <div id="block15"></div>





    




     
  
   <script>
     
     

   </script>
   
    
   <footer class="w3-bottom">


<img class="footer_img_slide" src="logo1.jpg" width="100%" height="10px">
<img class="footer_img_slide" src="logo2.jpg" width="100%" height="10px">
<img class="footer_img_slide" src="logo3.png" width="100%" height="10px">
<img class="footer_img_slide" src="logo4.jpg" width="100%" height="10px">
<img class="footer_img_slide" src="logo5.jpg" width="100%" height="10px">
<img class="footer_img_slide" src="logo6.jpg" width="100%" height="10px">





<script>
     var slide_index_2 = 0;
     carousel2();
     function carousel2(){
          var i2;
          var x2 = document.getElementsByClassName("footer_img_slide");
          for(i2=0;i2<x2.length;i2++){
               x2[i2].style.display="none";
          }
          slide_index_2++;
          if(slide_index_2>x2.length){slide_index_2=1};
          x2[slide_index_2-1].style.display="block";
          setTimeout(carousel2,2000);

     }
</script>
</footer>
     
</body>





<!--


  

-->
</html>

