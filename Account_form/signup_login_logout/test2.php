
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>



     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <title>PHUONG WEB</title>

     <link rel="shortcut icon"   href="image/js_logo.png" type="image/x-icon">

      <link rel="stylesheet" type="text/css" href="Sass_Css_file/test2.css">
           
  


         <style>


[id="nav1"]{
       position:fixed;top:0;
       background-color:black;
       width:100%;
       z-index:1;
}
[id="nav1"] a{
       text-decoration:none;
       background-color:black;
       font-size:16px;
       padding:5px 10px;
}
[id="nav1"] a:hover{
       background-color:red;
       color:white;
}
[id="nav1"] a:active{
       background-color:orange;
}
[id="nav1_right"]{
       float:right;
}


[id="signup_form"],[id="login_form"]{
       display:none;
}

[id="overlay1"]{
       position:fixed;top:0;left:0;right:0;bottom:0;
       width:100%;height:100%;
       background-color:rgba(0, 0, 0, 0.452);
       z-index:2;
       display:none;
}

    


       
       [id="user_info_modal"]{
                display:none;
                width:800px;
                padding:50px;
                position:fixed;top:100px;left:300px;
                border:2px solid green;
                outline:2px solid blue;
                outline-offset:10px;
                background-color:white;
                z-index:4;

         }

         [id="user_account_table"]{
                width:100%;
         }

         [id="user_account_table"] , tr, td{
               border:2px solid purple;
               font-size:20px;
               text-align:center;
         }
       
          
           
         </style>
    </head>


    <body onload="checkcookie()" >

      <header>
      <nav id="nav1">
                 <a id="home_butt" title="home button" type="button"
                 href="#" class="w3-text-aqua"><i class="fa fa-home"></i> HOME</a>

                 <a id="about_butt" title="about button" type="button"
                 href="#" class="w3-text-yellow"><i class="fa fa-info-circle"></i> ABOUT</a>

                 <a id="contact_butt" title="contact button" type="button"
                 href="#" class="w3-text-green"><i class="fa fa-phone"></i> CONTACT</a>

                 <span id="nav1_right">

                 <a id="logout_butt" title="logout button" type="button"
                 class="w3-text-red" onclick="logout_func()">
                 <i class="fa fa-sign-in"></i> LOG-OUT</a>

                 <a id="user_butt" title="user button" type="button"
                 class="w3-text-white" onclick="open_user_form()">
                 </a>
                 </span>
          </nav>


      </header>

     <main>

     <div class="w3-display-container">
               <img src="image/company2.jpg" alt="company" width="100%" height="400px">
               <h1 class="w3-display-middle text-white">WELCOME TO PHUONG WEBSITE</h1>
          </div>

          <br><br>

          <div id="overlay1" onclick="close_user_form()"></div>




     
     <div id="user_info_modal" class="w3-animate-zoom">

<button class="w3-button w3-ripple w3-text-red w3-hover-blue"
type="button" title="close_modal_button" 
 onclick="close_user_form()"
 style="position:absolute;top:0;right:0;font-size:30px;border:none;background-color:rgba(255, 255, 255, 0);">&times;</button>


 <div class="w3-center" style="font-size:35px;color:darkseagreen;
 background-color:black;border:2px solid orange;padding:10px;">

        <b><i class="fa fa-user-circle-o"></i> User Account</b>
 </div>

 <br>

 <table id="user_account_table">
        <tr>
               <td>
                      Name: <br> <b id="user_name1"></b>
               </td>

             

               <td>
                     Email: <br> <b id="user_email1"></b>
               </td>

               <td>
                     Password: <br> <b id="user_pass1"></b>
               </td>
        </tr>

       
 </table>
</div>





<script>





function open_user_form(){
                            document.getElementById("overlay1").style.display="block";
                            document.getElementById("user_info_modal").style.display="block";

                            document.getElementById("user_name1").innerHTML = localStorage.getItem("user_name");
                            document.getElementById("user_pass1").innerHTML = localStorage.getItem("user_pass");
                            document.getElementById("user_email1").innerHTML = localStorage.getItem("user_email");
                           

                  }


function close_user_form(){
  document.getElementById("overlay1").style.display="none";
                            document.getElementById("user_info_modal").style.display="none";
}


if(typeof(Storage)!=="undefined"){
    var name1 = localStorage.getItem("user_name");
    document.getElementById("user_butt").innerHTML = `<i class="fa fa-user-circle"></i> ${name1}`;
}


function logout_func(){
  if(typeof(Storage)!=="undefined"){
    localStorage.removeItem("user_name");
    localStorage.removeItem("user_pass");
    localStorage.removeItem("user_email");
    window.location.assign("test1.php");
  }
}



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


          

          



      
      

    

   


     </main>

 

   
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








