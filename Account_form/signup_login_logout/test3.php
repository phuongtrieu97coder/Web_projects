<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 




<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
              



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<link rel="stylesheet" type='text/css' href="Sass_Css_file/test1.css">


    </head>




    <body style="background-image:url('image/wallpaper3.jpg')" onload="checkcookie()">



    <button id="back_butt" name="butt1" title="back button"
            type="button" class="btn btn-primary text-white w3-hover-green"
            onclick="window.history.back()" ><i class="fa fa-arrow-left"></i> BACK</button>
    
    
            <div id="block1" class="w3-content" style="border:5px solid orange;">
              
                 <div class="w3-center">

                 <b class="text-white" style="font-size:40px;">THANK YOU FOR REGISTERING OUR WEBSITE!!!</b> <br>
                              <img src="image/thankforregister.png" width="600px" height="400px">
                              <br>

                             

                              <p class="text-white" style="font-size:40px;">Now you can came back to our main website and log-in again!!!</p>
                 </div>
 
           </div>



    <script>       
function setcookie(cname,cval,cexdays){
  var d = new Date();
  d.setTime(d.getTime() + (cexdays*24*60*60*1000));
  var expire = "expires=" +d.toUTCString();
  document.cookie= cname+ "=" + cval  + ";" + expire + ";path=/";
};
function getcookie(cname){
  var name = cname + "=";
  var decodecookie = decodeURIComponent(document.cookie);
  var ca = decodecookie.split(";");
  for(let i = 0; i<ca.length; i++){
    let c = ca[i];
    while(c.charAt(0) == " "){
      return c.substring(1);
    }
    if(c.indexOf(name) == 0){
      return c.substring(name.length,c.length);
    }
  }
  return "";
}
function checkcookie(){
  var username = getcookie("username");
  if(username!== ""){
    console.log("Welcome "+username + "!!!");
    console.log(document.cookie);
  }else{
    username = localStorage.getItem("user_name");
    if(username !== "" && username !== null){
      setcookie("username",username,1);
    }
  }
}
</script>

      
    </body>



    <footer></footer>
</html>
