<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TEMPLATE FASHION BLOG">


              <meta name="author"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              <link rel="stylesheet"  type="text/css" href="test1.css">




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

    
         
              </style>
       </head>




       <body onload="load1()">

    
          <header>
            
          <nav id="nav1">
                 <a id="home_butt" title="home button" type="button"
                 href="#" class="w3-text-aqua"><i class="fa fa-home"></i> HOME</a>

                 <a id="about_butt" title="about button" type="button"
                 href="#" class="w3-text-yellow"><i class="fa fa-info-circle"></i> ABOUT</a>

                 <a id="contact_butt" title="contact button" type="button"
                 href="#" class="w3-text-green"><i class="fa fa-phone"></i> CONTACT</a>

                 <span id="nav1_right">

                 <a id="login_butt" title="login button" type="button"
                 class="w3-text-blue" onclick="open_login_form()">
                 <i class="fa fa-sign-in"></i> LOG-IN</a>

                 <a id="signup_butt" title="sign up button" type="button"
                 class="w3-text-white" onclick="open_signup_form()">
                 <i class="fa fa-user-circle"></i> SIGN-UP</a>
                 </span>
          </nav>


          </header>


      
        
         
       


           
            
          <main>


          <div class="w3-display-container">
               <img src="image/company1.jpg" alt="company" width="100%" height="400px">
               <h1 class="w3-display-middle text-white">WELCOME TO PHUONG WEBSITE</h1>
          </div>

          <br><br>

          <div id="overlay1" onclick="close_form_block()"></div>

          <form id="signup_form"  title="block1" name="form1"
          action="<?php echo htmlspecialchars("test3.php")?>"
          method="post" target="_self" enctype="multipart/form-data"
          style="border:2px solid purple;width:600px;padding:20px;
                text-align:center;background-color:black;position:fixed;top:100px;left:400px;
                z-index:3;
                "
            onsubmit="save_info()">

            <button id="close_butt" name="close_butt1" title="close button"
            type="button" class="btn w3-black text-danger w3-hover-green"
            onclick="close_form_block()"
             style="border:none;position:absolute;top:0;right:0;font-size:40px">&times;</button>

               <div class="w3-center">
                      <img src="image/avatar/avatar1.png" width="80px" height="80px" alt="avatar1">
                      <b style="font-size:40px;color:aqua;">REGISTER</b>
               </div>
              
  
  
  
                    <label for="name_input"><b style="color:white;">Name:</b></label>
                   <input id="name_input" type="text" name="name1" placeholder="Enter your name..." 
                    style="width:100%">
  
                   
  
  
  
  
  


                    <label for="email_input"><b style="color:white;">Email:</b></label>
                   <input id="email_input" type="email" name="email1" placeholder="Enter your email..." 
                   style="width:100%">
  


                   <label for="pass_input"><b style="color:white;">Password:</b></label>
                   <input id="pass_input" type="password" name="pass1" placeholder="Enter your password..." 
                   style="width:100%">
  

                   <br>
                   <br>
                


                    <button class="w3-button w3-ripple w3-text-white w3-green w3-hover-red" type="submit"
                    title="register information button" name="submit1"
                    style="width:100%;"><i class="fa fa-sign-in"></i> Sign-Up</button>

                 

                    <br>
                   

       </form>



       <form id="login_form"  title="block2" name="form2"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
          method="post" target="_self" enctype="multipart/form-data"
          style="border:2px solid purple;width:600px;padding:20px;
                text-align:center;background-color:black;position:fixed;top:100px;left:400px;
                z-index:3;
                "
            onsubmit="login_func()">

            <button id="close_butt2" name="close_butt2" title="close button2"
            type="button" class="btn w3-black text-danger w3-hover-green"
            onclick="close_form_block()"
             style="border:none;position:absolute;top:0;right:0;font-size:40px">&times;</button>

               <div class="w3-center">
                      <img src="image/avatar/avatar1.png" width="80px" height="80px" alt="avatar1">
                      <b style="font-size:40px;color:aqua;">LOG-IN</b>
               </div>
              
  
  
  
                    <label for="name_input2"><b style="color:white;">Name:</b></label>
                    <span id="error1" class="text-danger"></span>
                   <input id="name_input2" type="text" name="name2" placeholder="Enter your name..." 
                    style="width:100%">
  
                   
  
  
  
  
  


                    <label for="email_input2"><b style="color:white;">Email:</b></label>
                    <span id="error2" class="text-danger"></span>
                   <input id="email_input2" type="email" name="email2" placeholder="Enter your email..." 
                   style="width:100%">
  


                   <label for="pass_input2"><b style="color:white;">Password:</b></label>
                   <span id="error3" class="text-danger"></span>
                   <input id="pass_input2" type="password" name="pass2" placeholder="Enter your password..." 
                   style="width:100%">
  

                   <br>
                   <br>
                


                    <button class="w3-button w3-ripple w3-text-white w3-green w3-hover-red" type="submit"
                    title="Login button" name="submit2"
                    style="width:100%;"><i class="fa fa-sign-in"></i> LOG-IN</button>

                 

                    <br>
                   

       </form>

            

          
            <script>
                 
             var f = document.forms["login_form"];
             var f2 = document.forms["signup_form"];
             var ov = document.getElementById("overlay1");
                
             function open_login_form(){
                     f.style.display = "block";
                     ov.style.display = "block";
             }
             function open_signup_form(){
                     f2.style.display = "block";
                     ov.style.display = "block";
             }

             function close_form_block(){
              ov.style.display = "none";
              f.style.display = "none";
              f2.style.display = "none";
             }

             var ip1 = document.getElementById("name_input");
             var ip2 = document.getElementById("pass_input");
             var ip3 = document.getElementById("email_input");

             var ip4 = document.getElementById("name_input2");
             var ip5 = document.getElementById("pass_input2");
             var ip6 = document.getElementById("email_input2");

            function save_info(){
              if(typeof(Storage)!=="undefined"){
                    localStorage.setItem("user_name",ip1.value);
                    localStorage.setItem("user_pass",ip2.value);
                    localStorage.setItem("user_email",ip3.value);
                  
             }
             

            }

            function login_func(){
                   if(typeof(Storage)!== "undefined"){
                     var nm = localStorage.getItem("user_name");
                     var ps = localStorage.getItem("user_pass");
                     var eml = localStorage.getItem("user_email");
                     try{
                           if(ip4.value !== nm){throw "Name is not correct!!!"};
                           
                      }catch(er){
                            document.getElementById("error1").innerHTML = er;
                      }


                      try{
                            if(ip5.value !== ps ){throw "Password is not correct!!!"};
                          
                      }catch(er2){
                            document.getElementById("error2").innerHTML = er2;
                      }


                      try{
                            if(ip6.value !== eml){throw "Email is not correct!!!"};
                      }catch(er3){
                            document.getElementById("error3").innerHTML = er3;
                      }



                      if(nm == ip4.value && ps == ip5.value && eml == ip6.value){
                             window.location.assign(test2.php);

                      }
                   }
                
            }
                

            function load1(){
                   if(typeof(Storage)!== "undefined"){
                          if(localStorage.getItem("user_name") !== "" && localStorage.getItem("user_name") !== null
                          && localStorage.getItem("user_pass") !== "" && localStorage.getItem("user_pass") !== null
                          && localStorage.getItem("user_email") !== "" && localStorage.getItem("user_email") !== null
                          ){
                                 window.location.assign("test2.php");
                          }
                   }
            }

            

                

            </script>



          


          </main>


        
       
       
       
       </body>





       <footer>

       </footer>



</html>
