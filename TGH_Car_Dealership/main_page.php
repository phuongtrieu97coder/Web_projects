<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="TGH CAR DEALERSHIP WEBSITE">


              <meta name="author"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              





              <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">


              <title>TGH WEBSITE</title>






              <style>
[id="navtop_block1"]{
       display:grid;
       grid-template-columns: 500px 200px 650px;
       border-bottom:5px double greenyellow;
}

[id="navtop_block2"]{
       display:none;
       
     
}
[id="navtop_block2_1"]{
       width:100%;
       background-color:black;
}
[id="menu_content_block"]{
       background-color:white;
       width:100%;
}

[id="bugatti_car_collection"],
[id="lamborghini_car_collection"],
[id="mclaren_car_collection"],
[id="pagani_car_collection"]{
       display:none;
}





[id="company_logo_block"]{
   

             position:relative;
             top:-10px;
             left:0;
             margin-bottom:-10px;
             float:right;
             
             
            
}
      [id="company_title"]{
             position:absolute;
             top:15px;
             left:-5px;
             z-index:1;
             font-size:15px;
             color:aquamarine;
             letter-spacing:10px;
             text-shadow:6px 6px 10px greenyellow;
             border-bottom:5px double yellowgreen;
             
      }


      [id="company_flag_icon"]{
             position:absolute;
             top:15px;
             left:50px;
             z-index:1;
             text-shadow:6px 6px 10px greenyellow;
             color:aqua;
             border-top:5px dotted white;
      }    







[id="block1"]{
       margin-left:20px;
}

[id="block1_content1"]{
       display:grid;
       grid-template-columns:340px 340px 340px 340px;
}                     
[id="block1_content2"]{
       display:grid;
       grid-template-columns:340px 340px 340px 340px;
}                     
                   

[id="overlay1"]{
       display:none;
       width:100%;height:100%;
       position:fixed;
       top:0;left:0;right:0;bottom:0;
       background-color:rgba(0, 0, 0, 0.534);
       z-index:1;
}
                   
[id="modal1"]{
       display:none;
       width:700px;
       position:fixed;
       top:50px;left:350px;
       z-index:2;
       border:2px solid green;
       outline:2px solid orange;
       outline-offset:10px;
       overflow:scroll;
       resize:both;
       background-color:white;
}







/*





*/




[id="block3"]{
       display:grid;
       grid-template-columns: 800px 400px;
      
}


[id="block3_1"]{
       clip-path:polygon(0 0, 0 100%, 60% 100%, 100%  0);
}







[id="block4"]{
       display:grid;
       grid-template-columns:auto auto auto;
}
[id="block4_1"]{
       width:600px;
       height:400px;
     
       clip-path:polygon(0 0, 100% 0, 60% 100%, 0 100%);
}

[id="block4_2"]{
       width:600px;
       height:400px;
       margin-left:-240px;
       clip-path:polygon(40% 0, 100% 0, 60% 100%, 0 100%);
}
[id="block4_3"]{
       width:650px;
       height:400px;
       margin-left:-240px;
       clip-path:polygon(37% 0, 100% 0, 100% 100%, 0 100%);
}



[id="dealership_icon_block0"]{
             position:relative;
             top:450px;
             left:600px;
             width:50px;
             height:50px;
             
            
      }
      [id="dealership_icon_company_title"]{
             position:absolute;
             top:55px;
             left:-5px;
             z-index:1;
             font-size:45px;
             color:aquamarine;
             letter-spacing:10px;
             text-shadow:6px 6px 10px greenyellow;
             border-bottom:5px double yellowgreen;
             
      }


      [id="dealership_flag_icon"]{
             position:absolute;
             top:70px;
             left:110px;
             z-index:1;
             text-shadow:6px 6px 10px greenyellow;
             color:aqua;
             border-top:5px dotted white;
      }

      [id="dealership_icon_block1"]{
             width:400px;
             height:400px;
             background-color:blue;
             clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); 
             position:relative;
             left:470px;
             
       }
      [id="dealership_icon_block2"]{
             width:400px;
             height:400px;
             background-color:blue;
             clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); 
             position:relative;
             top:-120px;
             left:185px;
       }
      [id="dealership_icon_block3"]{
             width:400px;
             height:400px;
             background-color:blue;
             clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); 
             position:relative;
             top:-520px;
             left:755px;
       }
      [id="dealership_icon_block4"]{
             width:400px;
             height:400px;
             background-color:blue;
             clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); 
             position:relative;
             top:-640px;
             left:470px;
       }
       



[id="block5"]{
       display:grid;
       grid-template-columns:600px 800px;
}

[id="block5_2"]{
       margin-left:-60px;
       clip-path:polygon(50% 0, 0 100%, 100% 100%, 100% 0);
}




[id="block6"]{
       display:grid;
       grid-template-columns:800px 600px;  
       background-color:white;
}


[id="block6_1"]{
      
       clip-path:polygon(0 0, 0 100%, 88% 100%, 100% 0);
}


[id="block6_2"]{
       margin-left:-355px;
       clip-path:polygon(37% 0, 27% 100%, 100% 100%, 100% 0);
       
}
 
         
              </style>
       </head>




       <body style="background-color:black;" ng-app="app1" onload="load_user()">
         
    
         
          <header>
            

       <nav id="navtop" class="bg-dark fixed-top">

               <div id="navtop_block1">
                    <div class="nav">

                         <a id="navbut1" name="navbutt1" title="nav button 1"
                         type="button" class="nav-link btn text-white w3-hover-green"
                         href="#" target="_self" ><i class="fa fa-home"></i> HOME</a>



                         <a id="navbutt2" name="navbutt2" title="nav button 2"
                         type="button" class="nav-link btn text-white w3-hover-yellow w3-hover-text-white"
                         onclick="open_tgh_menu()" ><i class="fa fa-bars w3-text-blue"></i> MENU</a>

                         
                         <div class="dropdown">
                                   <a id="navbutt3" name="navbutt3" title="nav button 3"
                                   type="button" class="nav-link btn text-white w3-hover-blue w3-hover-text-white dropdown-toggle"
                                   data-toggle="dropdown"><i class="fa fa-phone w3-text-green"></i> CONTACT</a>

                                   <div class="dropdown-menu" id="menu1" style="width:200px;">
                         
                                   
                                        <a id="drop_item1" name="drop_item1" title="drop_item1"
                                        type="button" class="dropdown-item btn text-dark w3-hover-blue w3-hover-text-white"
                                        href="" target="_self" style="border-bottom:1px solid green;"><i class="fa fa-plus w3-text-green"></i> Phone</a>
                                        
                                        
                                        
                                        <a id="drop_item2" name="drop_item2" title="drop_item2"
                                                       type="button" class="dropdown-item btn text-dark w3-hover-blue w3-hover-text-white"
                                        href="" target="_self" style="border-bottom:1px solid green;" ><i class="fa fa-plus w3-text-green"></i> Email</a>
                                        
                                        
                                        <a id="drop_item3" name="drop_item3" title="drop_item3"
                                        type="button" class="dropdown-item btn text-dark w3-hover-blue w3-hover-text-white"
                                        href="" target="_self" style="border-bottom:1px solid green;"><i class="fa fa-plus w3-text-green"></i> Address</a>
                                        
                                        
                                        
                                        <a id="drop_item4" name="drop_item4" title="drop_item4"
                                        type="button" class="dropdown-item btn text-dark w3-hover-blue w3-hover-text-white"
                                        data-toggle="collapse" data-target="#social_block" style="border-bottom:1px solid green;"><i class="fa fa-plus w3-text-green"></i> Social Media</a>

                                        <div class="collapse" id="social_block">
                                        
                                   
                                             
                                             <a id="social_item1" name="social_item1" title="social_item1"
                                             type="button" class="btn w3-hover-black"
                                             href="www.facebook.com" target="_blank"
                                             style="font-size:20px;"><i class="fa fa-facebook-square w3-text-blue"></i></a>   


                                             <a id="social_item2" name="social_item2" title="social_item2"
                                             type="button" class="btn w3-hover-black"
                                             href="www.youtube.com" target="_blank"
                                             style="font-size:20px;"><i class="fa fa-youtube w3-text-red"></i></a>   


                                             <a id="social_item3" name="social_item3" title="social_item3"
                                             type="button" class="btn w3-hover-black"
                                             href="www.twitter.com" target="_blank"
                                             style="font-size:20px;"><i class="fa fa-twitter w3-text-aqua"></i></a>   
                                   
                     
                     
                                        </div>
                            
       
       
                                   </div>
                         </div>
                    
                    </div>
          





                    <div>
                         <div id="company_logo_block">
                              <img src="image/car_icon2.png" width="50px" height="50px">
                              <b id="company_title">TGH</b>
                              <i id="company_flag_icon" class="fa fa-flag-checkered" style="font-size:15px;"></i>
                         </div>
                    </div>




                    <div class="nav" style="padding-left:420px;">

                    


                         <a id="login_butt" name="login_butt" title="login_button"
                         type="button" class="nav-link  btn text-white w3-hover-green"
                         onclick="open_login_form()"><i class="fa fa-sign-in text-info"></i> LOG-IN</a>


                         <a id="signup_butt" name="signup_butt" title="signup_button"
                         type="button" class="nav-link  btn text-white w3-hover-green"
                         href="register_page.php" target="_self"><i class="fa fa-user text-warning"></i> SIGN-UP</a>




                         <a id="logout_butt" name="logout_butt" title="logout_button"
                         type="button" class="nav-link  btn text-white w3-hover-green"
                         onclick="logout_func()" style="display:none;">
                         <i class="fa fa-sign-out text-danger"></i> LOG-OUT
                        </a>


                         <a id="user_account_butt" name="user_account_butt" title="user_account_button"
                         type="button" class="nav-link  btn text-white w3-hover-green"
                         href="user_info_page.php" target="_self" style="display:none;">
                         <img id="navtop_block1_user_avatar" width="20px" height="20px"> <i id="navtop_block1_user_name"></i>
                        </a>





                    </div>

               </div>




              <!-- 
                   when user click menu button-> navtop_block2 will appear
                   and move from top to bottom in 1s
                   use any bright background color to help user see each
                   information clearly
              -->

               <div id="navtop_block2">
                    <!--
                         use bootstrap dynamic tabs to change tabs when user click each
                         button

                         The brand button will active first and open a tab that
                         contains 4 button(Bugatti button has bugatti logo,mclaren button has
                         maclaren logo, lamborghini button has lamborghini logo, pagani
                         button has pagani logo)
                         
                         if user click bugatti button, it will activate a tab contains
                         a grid contains 5 columns. Each columns contains (car image,model
                         name, price,speed)


               -->
                    <div class="nav nav-pills w3-animate-top" id="navtop_block2_1">
                         <a id="brand_button" title="brand button"
                         name="brand_button" type="button"
                         class="nav-link btn w3-text-aqua w3-black active w3-hover-blue
                         w3-hover-text-white"
                         style="border-left:5px double greenyellow;font-size:20px;font-weight:bold;"
                         data-toggle="pill" href="#brand_tab">BRAND</a>

                         <!-- 
                         Notice that the car item tab must have pagination below
                         to help user navigate through new tab using JavaScript to 
                         close and open tab
                         and use JavaScript to add data into car image.
                         use Javascript to connect with JSON data, and then add information into
                         model name, price, speed
                         -->




                         <a id="dealership_button" title="dealership button"
                         name="dealership_button" type="button"  
                         class="nav-link btn w3-text-green w3-black w3-hover-blue
                         w3-hover-text-white"
                         style="border-left:5px double greenyellow;;font-size:20px;font-weight:bold;"
                         data-toggle="pill" href="#dealership_tab">DEALERSHIP</a>
                         <!--
                              when user click this button, a tab about dealership information
                              will appear that contains 2 grid columns
                              (1 is image about dealership, 1 is information about dealership)
                              user can scoll down to see other dealership as TGH San Diego, 
                              TGH Los Angeles,...
                         -->
                         <a id="new_car_button" title="new car button"
                         name="new_car_button" type="button"  
                         class="nav-link btn w3-text-yellow w3-black w3-hover-blue
                         w3-hover-text-white"
                         style="border-left:5px double greenyellow;;font-size:20px;font-weight:bold;"
                         data-toggle="pill" href="#new_car_tab">NEW CARS</a>



                         <a id="customer_service_button" title="customer button"
                         name="customer_button" type="button"
                         class="nav-link btn w3-text-white w3-black  w3-hover-blue
                         w3-hover-text-white"
                         style="border-left:5px double greenyellow;
                         border-right:5px double greenyellow;font-size:20px;font-weight:bold;"
                         data-toggle="dropdown">CUSTOMER SERVICE</a><!--include maintenance, accessories, contact button.
                         When user click contact button, a tab about information will appear
                    contact should include a page with 2 grid columns: one contains information
                    email, phone number,facebook,address; one contains slideshow image of each
                    dealership
                    -->

                         
                         <a id="navtop_block2_close_button" title="Close_Menu_button"
                         name="navtop_block2_close_button" type="button"
                         class="btn w3-text-yellow w3-transparent w3-hover-red
                         w3-hover-text-white" style="position:absolute;top:0;right:0;font-size:20px;
                         border-left:5px double greenyellow;"
                         onclick="close_tgh_menu()">X</a>


                      <div class="tab-content" id="menu_content_block">
                           <div class="tab-pane active" id="brand_tab">
                                 <nav class="nav nav-pills">


                                   <a id="bugatti_brand_logo_button"
                                    class="btn nav-link w3-hover-opacity"
                                    onclick="open_bugatti_car_collection()">
                                        <img src="image/bugatti_logo.png"
                                   width="100px" height="100px">
                                   </a>


                                   <a id="lamborghini_brand_logo_button" 
                                   class="btn nav-link w3-hover-opacity" 
                                   onclick="open_lamborghini_car_collection()">
                                        <img src="image/lamborghini_logo.png"
                                   width="300px" height="100px">
                                   </a>


                                   <a id="mclaren_brand_logo_button" 
                                   class="btn nav-link w3-hover-opacity" 
                                   onclick="open_mclaren_car_collection()">
                                        <img src="image/mclaren_logo.jpg"
                                   width="200px" height="100px">
                                   </a>


                                   <a id="pagani_brand_logo_button" 
                                   class="btn nav-link w3-hover-opacity" 
                                   onclick="open_pagani_car_collection()">
                                        <img src="image/pagani_logo.png"
                                   width="200px" height="100px">
                                   </a>



                                 
                                 <embed id="bugatti_car_collection"  src="Bugatti_car_collection.php"
                                 style="height:500px;width:100%;">
                                
                                

                                
                                 <embed id="lamborghini_car_collection" src="Lamborghini_car_collection.php"
                                 style="height:500px;width:100%;">
                                
                                 

                                
                                 <embed id="mclaren_car_collection" src="Mclaren_car_collection.php"
                                 style="height:500px;width:100%;">
                                
                                   

                                
                                 <embed id="pagani_car_collection" src="Pagani_car_collection.php"
                                 style="height:500px;width:100%;" >
                                
                                   
                                   







                                 </nav>
                           </div>
                      </div>
                    </div>
               </div>

       
          </nav>
       





          </header>




           
            
          <main>
 


          <div id="login_form_block">
          
          
              <button id="close_login_form_butt" name="close_login_form_butt"
               type="button"  onclick="close_login_form()"
               class="btn w3-text-red w3-transparent w3-hover-red
                w3-hover-text-white">
                  X
              </button>


              <div class="w3-center" 
               style="background-image:url('image/car_wallpaper2.jpg');
               margin-bottom:20px;padding:20px 0">
                     <i class="fa fa-user-circle w3-text-yellow" style="font-size:35px"></i> <b style="font-size:35px">LOG-IN</b>

                          <div id="login_form_company_logo_block" 
                          style="position:relative;top:-10px;left:-210px;
                          margin-bottom:-10px;float:right;">

                              <img src="image/car_icon2.png" width="80px" height="80px">
                              <b id="login_form_company_title" 
                              style="
                              position:absolute;
                              top:20px;
                              left:-5px;
                              z-index:1;
                              font-size:25px;
                              color:aquamarine;
                              letter-spacing:10px;
                              text-shadow:6px 6px 10px greenyellow;
                              border-bottom:5px double yellowgreen;"
                              >
                                   TGH
                              </b>


                              <i id="login_form_company_flag_icon" 
                              class="fa fa-flag-checkered" 
                              style="font-size:25px;
                               position:absolute;
                               top:20px;
                               left:65px;
                               z-index:1;
                               text-shadow:6px 6px 10px greenyellow;
                               color:aqua;
                               border-top:5px dotted white;
                              "></i>
                          </div>
               </div>



               <?php
               $name_login = $pass_login = "";

               if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $name_login = validate_login_func($_POST["email_username_input"]);


                            $pass_login = validate_login_func($_POST["password_input"]);
               }


               function validate_login_func($data){
                     $data = trim($data);
                     $data = stripslashes($data);
                     $data = htmlspecialchars($data);
                     return $data;
               }
               
               ?>



               <div id="login_form" 
               style="padding:30px;">

               <!--
<form title="login form"
               name="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
               method="post" target="_self" enctype="multipart/form-data">

              </form>
              
              -->
              

               <label for="email_username_input"><b>EMAIL OR USERNAME:</b></label><br>
               <span id="email_username_input_error" class="text-danger"></span>
               <input id="email_username_input" name="email_username_input" type="text"
               placeholder="Enter your email or username..." style="width:100%" required>



               <label for="password_input"><b>PASSWORD:</b></label><br>
               <span id="password_input_error" class="text-danger"></span>

               <input id="password_input" name="password_input" type="password"
               placeholder="Enter your password..." style="width:100%" required>



              

               <button id="login_butt" name="login_butt" type="button"
               class="btn btn-block btn-primary text-white w3-hover-green" 
               style="font-size:35px;font-weight:bold;margin-top:30px;" onclick="login_func()">
                 <i class="fa fa-sign-in"></i> LOG-IN
              </button>





              </div>
          </div>



          <div id="login_form_overlay" onclick="close_login_form()"></div>




          <script>
              
                $(document).ready(function(){
                     $("#login_form_block").css({
                         "display":"none",
                         "position":"fixed",
                         "top":"50px",
                         "left":"350px",
                         "width":"700px",
                         
                         "z-index":"2",
                         "font-size":"25px",
                         "background-color":"black",
                         "color":"white",
                         "border":"5px solid yellow",
                         "box-shadow":"3px 3px 6px 6px aqua,-3px -3px 6px 6px aqua"
                     });

                     
                         $("[id='close_login_form_butt']").css({
                              "position":"absolute",
                              "top":"0","right":"0","font-size":"50px",
                              "font-weight":"bold"
                         });


                         $("[id='login_form_overlay']").css({
                              "display":"none",
                              "width":"100%","height":"100%",
                              "position":"fixed","top":"0","left":"0","right":"0",
                              "bottom":"0","z-index":"1",
                              "background-color":"rgba(0, 0, 0, 0.637)"
                         });


                });


         

           function login_func(){
              var get_email_username_input = document.querySelectorAll("#email_username_input")[0].value;
           var get_password_input = document.querySelectorAll("#password_input")[0].value;

                  if(document.querySelectorAll("#email_username_input")[0].validity.valueMissing){
                         document.getElementById("email_username_input_error").innerHTML = "Email or Username is required!!!";
                  }
                  
                  if(document.querySelectorAll("#password_input")[0].validity.valueMissing){
                         document.getElementById("password_input_error").innerHTML = "Password is required!!!";
                  }
                  

                  if((get_email_username_input == localStorage.getItem("User_name") || 
                  get_email_username_input == localStorage.getItem("User_email") ) && (
                     get_password_input == localStorage.getItem("User_password"))
                  ){
                     var TGH_user_id = Math.floor(Math.random()*10000);

                     localStorage.setItem("TGH_user_id",TGH_user_id);  

                     window.location.assign("main_page.php");
                  
                  }
                  else if((
                         (get_email_username_input !== localStorage.getItem("User_name") &&
                         get_email_username_input !== "") || 
                 ( get_email_username_input !== localStorage.getItem("User_email") && 
                 get_email_username_input !== ""
                 ) ) && (
                     get_password_input !== localStorage.getItem("User_password") && get_password_input !== "")
                  ){
                     document.getElementById("email_username_input_error").innerHTML = "Email or Username doesn't exist in our data record!!!";
                     document.getElementById("password_input_error").innerHTML = "Password doesn't exist in our data record!!!";

                  }
                  
                  else{
                         console.log("");
                  }






           }



          </script>







      <div id="block0">    

          <video id="video_car1" width="100%" height="500px" controls muted autoplay
          onended="end_func()">
                  <source  id="video_car1" type="video/mp4" >
               

                  Sorry, your video does not work!!!
          </video>


          <video id="video_car2" width="100%" height="500px" controls muted autoplay
           style="display:none;"  onended="end_func2()">
                  
                  <source  id="video_car2" type="video/mp4" >
                

                  Sorry, your video does not work!!!
          </video>


          <video id="video_car3" width="100%" height="500px" controls muted autoplay
           style="display:none;"  onended="end_func3()">
                 
                 
                  <source   id="video_car3" type="video/mp4" >

                  Sorry, your video does not work!!!
          </video>

      </div>


          <br>





          <div style="position:relative;left:200px;
          padding:20px;text-align:center;border:20px double greenyellow;
                              
          clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
          width:1000px;background-color:black"
          >
               <p style=" color:aqua;letter-spacing:5px;
               text-shadow:10px 10px 10px blue;font-size:40px;font-weight:bold">
                    NEW CARS
               </p>


          </div>




       <div id="block1" style="position:relative;top:0;margin-bottom:100px;" >

              <div class="block1_content" id="block1_body_content1">

                     <div id="block1_content1">
                                        
                     
                                            <div class="w3-hover-sepia" id="block1_content1_1">
                         
                                                 <img id="block1_content1_1_img" src="image/bugatti9.jpg"
                                                  alt="Bugattir Chiron V26" 
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>
                                       
                                       
                                       
                                            <div class="w3-hover-sepia" id="block1_content1_2">
                                                  
                                                 <img id="block1_content1_2_img" src="image/lamborghini_sian.jpg"
                                                 alt="Lamborghini Sian 2022" 
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>
                                        
                                        
                                        
                                            <div class="w3-hover-sepia" id="block1_content1_3">
                                                  
                                                        <img id="block1_content1_3_img"  src="image/mclaren_p1_2.jpg"
                                                         alt="Mclaren P1 2022" 
                                                        width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                        
                                            </div>
                                         
                                         
                                         
                                            <div class="w3-hover-sepia" id="block1_content1_4">
                                                  
                                                 <img id="block1_content1_4_img"  src="image/pagani_zonda2.jpg"
                                                 alt="Pagani Zonda-124453" 
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>

                     </div>
              
              </div>




              <div class="block1_content" id="block1_body_content2">

                     <div  id="block1_content2">
                                        
                     
                                            <div class="w3-hover-sepia" id="block1_content2_1">
                         
                                                 <img id="block1_content2_1_img" src="image/bugatti5.jpg"
                                                  alt="Bugatti Chiron V20" 
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>
                                       
                                       
                                       
                                            <div class="w3-hover-sepia" id="block1_content2_2">
                                                  
                                                 <img id="block1_content2_2_img" src="image/lamborghini_veneno.jpg"
                                                 alt="Lamborghini Veneno 2022" 
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>
                                        
                                        
                                        
                                            <div class="w3-hover-sepia" id="block1_content2_3">
                                                  
                                                        <img id="block1_content2_3_img" src="image/mclaren_600LT.jpg"
                                                        alt="Mclaren 600LT" 
                                                        width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                        
                                            </div>
                                         
                                         
                                         
                                            <div class="w3-hover-sepia" id="block1_content2_4">
                                                  
                                                 <img id="block1_content2_4_img" src="image/pagani_zonda.jpg"
                                                  alt="Pagani Zonda-53657"
                                                 width="100%" height="400px" onclick="modal1(this)" style="cursor:pointer;">
                                                 
                                            </div>

                     </div>



              </div>







                 

        <button id="prev_butt" name="prev_butt" title="previous button"
            type="button" class="w3-hover-green" style="font-size:50px;color:aqua;
            background-color:rgba(255, 255, 255, 0);border:none;
            position:absolute;top:10px;left:10px;"
            onclick="slide_func(-1)" ><i class="fa fa-angle-double-left"></i></button>



            

        <button id="next_butt" name="next_butt" title="forward button"
            type="button" class="w3-hover-green" style="font-size:50px;color:aqua;
            background-color:rgba(255, 255, 255, 0);border:none;
            position:absolute;top:10px;left:1300px;"
            onclick="slide_func(1)" ><i class="fa fa-angle-double-right"></i></button>



                  
       </div>




              <div id="overlay1" onclick="close_modal()"></div>



              <div id="modal1">

              <button id="close_butt" name="close_butt" title="close button"
            type="button" class="w3-btn w3-ripple text-danger w3-hover-green"
            onclick="close_modal()" style="position:absolute;top:0;right:0;font-size:40px;background-color:rgba(255, 255, 255, 0);" >&times;</button>

                     <img id="modal_img"
              title="modal image" 
              width="100%" height="400px">


              <hr>

              <h1 class="w3-center text-blue" id="modal_content"></h1>
              
              </div>



              <hr>
              <br>








          <div id="block2" class="w3-display-container" style="margin-bottom:200px;">


                    


                            <div class="block2_slide"  id="TGH_San_Diego_Dealership_block"
                            style=" position:relative;top:0;">


                              <img id="TGH_San_Diego_Dealership_block_img"
                              src="image/car_wallpaper1.jpg"
                              title="slide_image 1" name="slide_img1" alt="wallpaper1" 
                                   width="100%" height="700px">


                              <div style="position:absolute;top:0;left:400px;
                              padding:30px;text-align:center;border:10px double aqua;
                              
                              clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                              width:600px;z-index:1;background-color:black">
                                        <p style=" color:aqua;letter-spacing:5px;
                                        text-shadow:10px 10px 10px blue;font-size:50px;font-weight:bold">
                                        TGH San Diego
                                        </p>
                              </div>


                              <div style="position:absolute;bottom:0;left:200px;
                              padding:20px;text-align:center;border:10px double aqua;
                              
                              clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
                              width:1000px;z-index:1;background-color:black">
                                        <p style=" color:aqua;letter-spacing:5px;
                                        text-shadow:10px 10px 10px blue;font-size:40px;font-weight:bold">
                                        DEALERSHIP
                                        </p>
                              </div>

                           </div>




                         
                         
                            <div  class="block2_slide"  id="TGH_Los_Angeles_Dealership_block">
                                                            
                                   <img id="TGH_Los_Angeles_Dealership_block_img"
                                   src="image/car_wallpaper2.jpg"
                                   title="slide_image 2" name="slide_img2" alt="wallpaper2" 
                                   width="100%" height="700px">



                                   <div style="position:absolute;top:0;left:400px;
                              padding:30px;text-align:center;border:10px double yellowgreen;
                              
                              clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                              width:600px;z-index:1;background-color:black">
                                        <p style=" color:yellowgreen;letter-spacing:5px;
                                        text-shadow:10px 10px 10px yellowgreen;font-size:40px;font-weight:bold">
                                        TGH Los Angeles
                                        </p>
                              </div>


                              <div style="position:absolute;bottom:0;left:200px;
                              padding:20px;text-align:center;border:10px double yellowgreen;
                              
                              clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
                              width:1000px;z-index:1;background-color:black">
                                        <p style=" color:yellowgreen;letter-spacing:5px;
                                        text-shadow:10px 10px 10px yellowgreen;font-size:40px;font-weight:bold">
                                        DEALERSHIP
                                        </p>
                              </div>

                            </div>
                 
                 
                 
                            <div class="block2_slide" id="TGH_San_Jose_Dealership_block">
                                                            
                                   <img id="TGH_San_Jose_Dealership_block_img"
                                   src="image/car_wallpaper3.jpg"
                                   title="slide_image 3" name="slide_img3" alt="wallpaper3" 
                                   width="100%" height="700px">



                                   <div style="position:absolute;top:0;left:400px;
                              padding:30px;text-align:center;border:10px double rgb(89, 241, 89);
                              
                              clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                              width:600px;z-index:1;background-color:black">
                                        <p style=" color:rgb(89, 241, 89);letter-spacing:5px;
                                        text-shadow:10px 10px 10px rgb(89, 241, 89);font-size:50px;font-weight:bold">
                                        TGH San Jose
                                        </p>
                              </div>


                              <div style="position:absolute;bottom:0;left:200px;
                              padding:20px;text-align:center;border:10px double rgb(89, 241, 89);
                              
                              clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
                              width:1000px;z-index:1;background-color:black">
                                        <p style=" color:rgb(89, 241, 89);letter-spacing:5px;
                                        text-shadow:10px 10px 10px rgb(89, 241, 89);font-size:40px;font-weight:bold">
                                        DEALERSHIP
                                        </p>
                              </div>

                           </div>
                  
                  
                  
                           <div class="block2_slide" id="TGH_San_Francisco_Dealership_block">
                                                            
                                   <img id="TGH_San_Francisco_Dealership_block_img"
                                   src="image/car_wallpaper4.jpg"
                                   title="slide_image 4" name="slide_img4" alt="wallpaper4" 
                                   width="100%" height="700px" >



                                   <div style="position:absolute;top:0;left:400px;
                              padding:30px;text-align:center;border:10px double orange;
                              
                              clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                              width:600px;z-index:1;background-color:black">
                                        <p style=" color:orange;letter-spacing:5px;
                                        text-shadow:10px 10px 10px orange;font-size:40px;font-weight:bold">
                                        TGH San Francisco
                                        </p>
                              </div>


                              <div style="position:absolute;bottom:0;left:200px;
                              padding:20px;text-align:center;border:10px double orange;
                              
                              clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
                              width:1000px;z-index:1;background-color:black">
                                        <p style=" color:orange;letter-spacing:5px;
                                        text-shadow:10px 10px 10px orange;font-size:40px;font-weight:bold">
                                        DEALERSHIP
                                        </p>
                              </div>

                            </div>




                            <div class="block2_slide" id="TGH_Sacramento_Dealership_block">
                         
                         <img id="TGH_Sacramento_Dealership_block_img"
                         src="image/car_wallpaper5.jpg"
                         title="slide_image 5" name="slide_img5" alt="wallpaper5" 
                         width="100%" height="700px">


                         <div style="position:absolute;top:0;left:400px;
                              padding:30px;text-align:center;border:10px double white;
                              
                              clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                              width:600px;z-index:1;background-color:black">
                                        <p style=" color:white;letter-spacing:5px;
                                        text-shadow:10px 10px 10px white;font-size:45px;font-weight:bold">
                                        TGH Sacramento
                                        </p>
                              </div>


                              <div style="position:absolute;bottom:0;left:200px;
                              padding:20px;text-align:center;border:10px double white;
                              
                              clip-path:polygon(40% 0, 20% 100%, 80% 100%, 60% 0);
                              width:1000px;z-index:1;background-color:black">
                                        <p style=" color:white;letter-spacing:5px;
                                        text-shadow:10px 10px 10px white;font-size:40px;font-weight:bold">
                                        DEALERSHIP
                                        </p>
                              </div>
                         
                            </div>





                                        
                    <button id="prvb"   type="button"
                     onclick="block2_slide_func1(-1)" class="w3-display-left
                     btn w3-transparent text-white w3-hover-aqua"
                     style="font-size:50px;">
                    <i class="fa fa-angle-double-left"></i>
                    </button>

                    <button id="frwb"  type="button"
                    onclick="block2_slide_func1(1)" class="w3-display-right
                     btn w3-transparent text-white w3-hover-aqua"
                     style="font-size:50px;">
                     <i class="fa fa-angle-double-right"></i>
                    </button>




                    

          </div>

      

         <script>

         </script>


              <br>

              <br>



              <div id="block3">


                       <div id="block3_1">
                              <img src="image/lamborghini_sian3.jpg" alt="sian3" width="100%"
                              height="400px">
                       </div>


                       <div id="block3_2">
                              <h1 class="text-white">This is CAR Information block</h1>
                       </div>



                      
              </div>





              <br><br><br><br><br><br>



          <div id="block4">
          <div id="block4_1" class="w3-hover-sepia">
                  <img src="image/car_wallpaper3.jpg" width="100%" height="100%">
            </div>
            <div id="block4_2" class="w3-hover-sepia">
                  <img src="image/car_wallpaper8.jpg" width="100%" height="100%">
            </div>
            <div id="block4_3" class="w3-hover-sepia">
                  <img src="image/car_wallpaper5.jpg" width="100%" height="100%">
            </div>
          </div>



           
          <br><br>
          <br><br>
          <br><br>
          <br><br>


           <div id="dealership_icon_block">




           <div id="dealership_icon_block0">
                 <img src="image/car_icon2.png" width="150px" height="150px">
                 <b id="dealership_icon_company_title">TGH</b>
                 <i id="dealership_flag_icon" class="fa fa-flag-checkered" style="font-size:35px;"></i>
          </div>   


          <div id="dealership_icon_block1">
               <img src="image/bugatti_chiron3.jpg" width="100%" height="100%">
          </div>


          <div id="dealership_icon_block2">
          <img src="image/pagani_huayra.jpg" width="100%" height="100%">
          </div>


          <div id="dealership_icon_block3">
          <img src="image/lamborghini_aventador2.jpg" width="100%" height="100%">
          </div>



          <div id="dealership_icon_block4">
          <img src="image/mclaren_p1_2.jpg" width="100%" height="100%">
          </div>




           </div>





       



              <div id="block5">
                            <div id="block5_1">
                               <h1 class="text-white">This is CAR Information block</h1>
                            </div>


                       <div id="block5_2">
                            
                              <img src="image/lamborghini_veneno2.jpg" 
                              alt="pagani"
                               width="100%"
                              height="500px">
                       </div>
              </div>





              <br><br><br><br><br>
              <br><br><br><br><br>




              <div id="block6">
                            <div id="block6_1" class="w3-hover-sepia">
                            <img src="image/car_wallpaper7.jpg" 
                              alt="pagani"
                               width="100%"
                              height="500px">
                            </div>


                       <div id="block6_2" class="w3-grayscale-min w3-hover-sepia">
                            
                              <img src="image/car_wallpaper6.png" 
                              alt="pagani"
                               width="100%"
                              height="500px">
                       </div>
              </div>


              <br><br>


       

          </main>


        




       <footer>
        
       </footer>
       

       <script src="main_page_slideshow_behavior.js"></script>
       <script src="main_page_modal_behavior.js"></script>
       <script src="main_page_tab_behavior.js"></script>

       
       <script>
            var app1 = angular.module("app1",[]);

            function logout_func(){
    window.location.assign("main_page.php");
    localStorage.removeItem("TGH_user_id");
}




if(localStorage.getItem("User_avatar") == "" || localStorage.getItem("User_avatar") == null ||
localStorage.getItem("User_avatar") == "undefined"
){
       document.getElementById("navtop_block1_user_avatar").src = "image/car_icon2.png"; 
}else{
       document.getElementById("navtop_block1_user_avatar").src =  localStorage.getItem("User_avatar");
}

document.getElementById("navtop_block1_user_name").innerHTML = localStorage.getItem("User_name");

function load_user(){
    if(localStorage.getItem("TGH_user_id") !== "" && localStorage.getItem("TGH_user_id") !== null){
        document.getElementById("login_butt").style.display = "none";
        document.getElementById("signup_butt").style.display = "none";
        document.getElementById("logout_butt").style.display = "block";
        document.getElementById("user_account_butt").style.display = "block";

      

    }else{
        document.getElementById("login_butt").style.display = "block";
        document.getElementById("signup_butt").style.display = "block";
        document.getElementById("logout_butt").style.display = "none";
        document.getElementById("user_account_butt").style.display = "none";

    }
}


       </script>


       <script src="main_page_image_video_behavior.js"></script>
  
     
     
       </body>





     



      


</html>