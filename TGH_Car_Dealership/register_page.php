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
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              





              <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">


              <title>TGH WEBSITE</title>





              <style>
   [id="background_img"]{
          position:fixed;
          top:0;left:0;right:0;bottom:0;
          z-index:0;
   }

               [id="block1"]{
                      display:grid;
                      grid-template-columns:600px 800px;
                      position:relative;
                      top:-20px;
                      z-index:2;
               }

               [id="block1_1"]{
                      margin:40px 40px;
                      color:white;
                      width:600px;font-size:20px;padding:20px;
                      border:2px solid blue;background-color:black;

               }
               [id="block1_2"]{
                      margin:40px 100px;
                      border:2px solid green;
                      padding:20px;
                      background-color:black;
                      color:white;
                      
               }


               [id="avatar_order_form_block"] {
                     border-bottom:3px dotted aqua;
                     position:relative;top:0;
               }

              

               
      [id="company_title"]{
       position:absolute;
       top:20px;
       left:50px;
       z-index:1;
       font-size:20px;
       color:aquamarine;
       letter-spacing:10px;
       text-shadow:6px 6px 10px greenyellow;
       border-bottom:5px double yellowgreen;
       
}


[id="company_flag_icon"]{
       position:absolute;
       top:20px;
       left:110px;
       z-index:1;
       text-shadow:6px 6px 10px greenyellow;
       color:aqua;
       border-top:5px dotted white;
       font-size:25px;
}    




               [id="avatar_order_form_block"] h1{
                    display:inline-block;
               }

               [id="account_intro_block"]{
                      background-image: url("image/wallpaper2.jpg");
               }

               [id="account_intro_block_avatar"]{
                      background: url("image/avatar1.png") no-repeat center;
                      background-size: 150px 150px;
                      width:100px;height:100px;
                      position:relative;
                      left:230px;
                      z-index:0;
                      
                      
                      
               }

               [id="account_intro_block_avatar_caption"]{
                      position:absolute;
                      top:80px;left:0px;
                      z-index:2;
                      background-color:black;
                      border:2px solid aqua;
                      text-align:center;
                      width:100%;
                      font-size:12px;
               }


               [id="account_info_block"]{
                      display:grid;
                      grid-template-columns: 300px 250px;
               }

               [id="account_info_block_1"]{
                    border-top:1px solid purple;
                    border-bottom:1px solid purple;
                    border-right:1px solid purple;
                    margin-right:30px;
               }

               [id="account_info_block_2"]{
                      height:200px;
                      border:1px solid aqua;
                      position:relative;
                      top:0;
               }
               [id="account_info_block_2"] b{
                     font-size:20px;
                     position:absolute;
                     top:10px;
                     left:50px;
                     color:yellow;
               }

               [id="car_select_block1"],
               [id="car_select_block2"],
               [id="car_select_block3"],
               [id="car_select_block4"],
               [id="car_select_block5"]{
                      position:relative;
                      top:0;
               }
               [id*="car_price"]{
                      position:absolute;
                      top:200px;
                      left:100px;
                      font-size:30px;
               }  
           
              
              </style>
       </head>




       <body>

    
          <header>

          </header>



          <main>

          <image id="background_img" src="image/car_wallpaper0.jpg" width="100%"
          height="100%" alt="background_img">

       <form id="block1" name="form1" title="form 1 block"
              action="<?php echo htmlspecialchars('Thank_you_register.php')?>"
              method="post" target="_self" enctype="multipart/form-data" 
              onsubmit="check_save_info()"
       >  


        <?php
        
        $lastname= $firstname = $email = $password = $gender = $phonenumber  = "";
        $lastname_error= $firstname_error = $email_error = $password_error = $phonenumber_error  = "";




        if($_SERVER["REQUEST_METHOD"] == "POST"){
               if(empty($_POST["lastname1"])){
                     $lastname_error = "Last name is required!!!";
               }else{
                     $lastname = check_func($_POST["lastname1"]);
               }


               if(empty($_POST["firstname1"])){
                     $firstname_error = "First name is required!!!";
               }else{
                     $firstname = check_func($_POST["firstname1"]);
               }


               if(empty($_POST["email1"])){
                     $email_error = "Email is required!!!";
              }else{
                      $email = check_func($_POST["email1"]);
               }


               if(empty($_POST["password1"])){
                     $password_error = "Password is required!!!";
              }else{
                      $password = check_func($_POST["password1"]);
               }


               if(empty($_POST["phonenumber1"])){
                     $phonenumber_error = "Phone number is required!!!";
              }else{
                      $phonenumber = check_func($_POST["phonenumber1"]);
               }
              
              

              
        }

        function check_func($data){
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
       }
        
        ?>

        
          <div id="block1_1">
            


              <div id="avatar_order_form_block" class="w3-center">
                     
              
                 <img src="image/car_icon2.png" width="80px" height="80px">
                 <b id="company_title">TGH</b>
                 <i id="company_flag_icon" class="fa fa-flag-checkered" 
                 ></i>
           
                     <b class="w3-text-aqua" style="margin-left:20px;font-size:40px;">Register Account</b>
                     <h1><i class="text-success fa fa-user-circle"></i></h1>
                     
              </div>


              <br>


              
              <label for="firstname_input"><b>Firstname:</b></label>
                 <span id="firstname_error" class="text-danger"><?php echo $firstname_error;?></span>
               
                  <br>
                 <input id="firstname_input" type="text" name="firstname1" 
                 placeholder="Enter your firstname..." maxlength="200"
                 style="width:100%" required>
                

                 <br>


                 <label for="lastname_input"><b>Lastname:</b></label>
                 <span id="lastname_error" class="text-danger"><?php echo $lastname_error;?></span>
               
                  <br>
                 <input id="lastname_input" type="text" name="lastname1" 
                 placeholder="Enter your lastname..." maxlength="200"
                 style="width:100%" required>
                

                 <br>





                 <label for="email_input"><b>Email:</b></label>
                 <span id="email_error" class="text-danger"><?php echo $email_error;?></span>
               
                  <br>

                 <input id="email_input" type="email" name="email1" 
                 placeholder="Enter your email..." pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" maxlength="200"
                 style="width:100%" required>
                

                 <br>


                 <label for="password_input"><b>Password:</b></label>
                 <span id="password_error" class="text-danger"><?php echo $password_error;?></span>
               
                  <br>
                 <input id="password_input" type="password" name="password1" 
                 placeholder="Enter your password..." maxlength="200"
                 style="width:100%" required>
                

                 <br>




                 <label for="phone_input"><b>Phone number:</b></label>
                 <span id="phonenumber_error" class="text-danger"><?php echo $phonenumber_error;?></span>
               
                  <br>
                 <input id="phonenumber_input" type="tel" name="phonenumber1"  
                 placeholder="Ex: (619)-345-5647" maxlength="10"
              
                 style="width:100%" required>
                

                 <br>



                 


                 <label><b>Gender:</b></label><br>
                 <span id="gender_error" class="text-danger"></span>

                 <input id="male_check" name="gender1" type="checkbox" value="male" onclick="gender_check()">
                 <label for="male_check"><b>Male</b></label>


                 <input id="female_check" name="gender1" type="checkbox" value="female" onclick="gender_check2()">
                 <label for="female_check"><b>Female</b></label>


                 <input id="other_check" name="gender1" type="checkbox" value="other"  onclick="gender_check3()">
                 <label for="other_check"><b>Other</b></label>



               

                 <br><br>

                 <button id="submit_butt" class="w3-button w3-ripple w3-green 
                 w3-text-white w3-hover-aqua w3-hover-text-white" name="submit1" type="submit" 
                  style="width:100%;text-align:center;"><i class="fa fa-user-plus"></i> SIGN-UP</button>


                
              


              



          </div>
         


          <script>
                 var get_lastname_value = document.getElementById("lastname_input");
                 var get_firstname_value = document.getElementById("firstname_input");
                 var get_email_value = document.getElementById("email_input");
                 var get_password_value = document.getElementById("password_input");
                 var get_phonenumber_value = document.getElementById("phonenumber_input");
                 var get_male_value = document.getElementById("male_check");
                 var get_female_value = document.getElementById("female_check");
                 var get_other_value = document.getElementById("other_check");
                 






                 var get_lastname_error = document.getElementById("lastname_error");
                 var get_firstname_error = document.getElementById("firstname_error");
                 var get_email_error = document.getElementById("email_error");
                 var get_password_error = document.getElementById("password_error");
                 var get_phonenumber_error = document.getElementById("phonenumber_error");
                 var get_gender_error = document.getElementById("gender_error");
                 
                    
                    $(document).ready(function(){
                        var n = 1;
                       $("#male_check").click(function(){
                              if(n==1){
                                   $("#female_check").attr("disabled","true");
                                  $("#other_check").attr("disabled","true");
                                  n=2;
                              }else {
                                   $("#female_check").removeAttr("disabled");
                                  $("#other_check").removeAttr("disabled");
                                  n=1;
                              }
                           
                       });


                       $("#female_check").click(function(){
                              if(n==1){
                                   $("#male_check").attr("disabled","true");
                                  $("#other_check").attr("disabled","true");
                                  n=2;
                              }else {
                                   $("#male_check").removeAttr("disabled");
                                  $("#other_check").removeAttr("disabled");
                                  n=1;
                              }
                           
                       });


                       $("#other_check").click(function(){
                              if(n==1){
                                   $("#female_check").attr("disabled","true");
                                  $("#male_check").attr("disabled","true");
                                  n=2;
                              }else {
                                   $("#female_check").removeAttr("disabled");
                                  $("#male_check").removeAttr("disabled");
                                  n=1;
                              }
                           
                       });
                 });
                    
                


                 if(get_male_value.checked == true){
                     get_female_value.setAttribute("disabled","true");
                     get_other_value.setAttribute("disabled","true");
                 }



              function check_save_info(){
                       if(!get_lastname_value.checkValidity() && !get_firstname_value.checkValidity()){
                              get_lastname_error.innerHTML = get_lastname_value.validationMessage;
                              get_firstname_error.innerHTML = get_firstname_value.validationMessage;

                       }else if(!get_lastname_value.checkValidity()){
                            get_lastname_error.innerHTML = get_lastname_value.validationMessage;
                       
                       }else if(!get_firstname_value.checkValidity()){
                            get_firstname_error.innerHTML = get_firstname_value.validationMessage;
                       
                       }else{
                              localStorage.setItem("User_name",get_lastname_value.value + "," + get_firstname_value.value);
                       }





                       if(!get_email_value.checkValidity()){
                              get_email_error.innerHTML = get_email_value.validationMessage;
                       }else{
                              localStorage.setItem("User_email",get_email_value.value);
                       }


                       if(!get_password_value.checkValidity()){
                              get_password_error.innerHTML = get_password_value.validationMessage;
                       }else{
                              localStorage.setItem("User_password",get_password_value.value);
                       }



                       if(!get_phonenumber_value.checkValidity()){
                             
                              get_phonenumber_error.innerHTML = 
                              get_phonenumber_value.validationMessage;
                       }else{
                              localStorage.setItem("User_phonenumber",get_phonenumber_value.value);
                       }





                     

                       if(get_male_value.checked == true){
                              localStorage.setItem("User_gender",get_male_value.value);


                       }else if(get_female_value.checked == true){
                              localStorage.setItem("User_gender",get_female_value.value);


                       }else if(get_other_value.checked == true){
                              localStorage.setItem("User_gender",get_other_value.value);
                       }else{
                              console.log("");
                       }


                       

                       var today_datetime = new Date().toLocaleDateString() + "; " + new Date().toLocaleTimeString();

                                                 
                        localStorage.setItem("User_register_date1",today_datetime);


                        var TGH_user_id = Math.floor(Math.random()*10000);

                        localStorage.setItem("TGH_user_id",TGH_user_id);
                        localStorage.setItem("TGH_user_main_id",TGH_user_id);

                     


              }
          </script>



              <div id="block1_2">

                     <div id="company_branch_slideshow_block" 
                     class="w3-display-container">
                           
                           
                    


                                          


                            <div class="company_branch_slideshow_block_slide"  id="TGH_San_Diego_Dealership_block"
                            style=" position:relative;top:0;">


                                   <img id="TGH_San_Diego_Dealership_block_img"
                                   src="image/car_wallpaper1.jpg"
                                   title="slide_image 1" name="slide_img1" alt="wallpaper1" 
                                          width="100%" height="600px">


                                   <div style="position:absolute;top:0;left:80px;
                                   padding:20px;text-align:center;border:10px double aqua;
                                   
                                   clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                                   width:400px;z-index:1;background-color:black">
                                          <p style=" color:aqua;letter-spacing:5px;
                                          text-shadow:10px 10px 10px blue;font-size:20px;font-weight:bold">
                                          TGH San Diego Dealership
                                          </p>
                                   </div>


                                 

                            </div>






                            <div  class="company_branch_slideshow_block_slide"  id="TGH_Los_Angeles_Dealership_block">
                                                        
                                   <img id="TGH_Los_Angeles_Dealership_block_img"
                                   src="image/car_wallpaper2.jpg"
                                   title="slide_image 2" name="slide_img2" alt="wallpaper2" 
                                   width="100%" height="600px">



                                   <div style="position:absolute;top:0;left:80px;
                                   padding:20px;text-align:center;border:10px double yellowgreen;
                                   
                                   clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                                   width:400px;z-index:1;background-color:black">
                                          <p style=" color:yellowgreen;letter-spacing:5px;
                                          text-shadow:10px 10px 10px yellowgreen;font-size:20px;font-weight:bold">
                                          TGH Los Angeles Dealership
                                          </p>
                                   </div>


                                  

                            </div>



                            <div class="company_branch_slideshow_block_slide" id="TGH_San_Jose_Dealership_block">
                                                        
                                   <img id="TGH_San_Jose_Dealership_block_img"
                                   src="image/car_wallpaper3.jpg"
                                   title="slide_image 3" name="slide_img3" alt="wallpaper3" 
                                   width="100%" height="600px">



                                   <div style="position:absolute;top:0;left:80px;
                                   padding:20px;text-align:center;border:10px double rgb(89, 241, 89);
                                   
                                   clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                                   width:400px;z-index:1;background-color:black">
                                          <p style=" color:rgb(89, 241, 89);letter-spacing:5px;
                                          text-shadow:10px 10px 10px rgb(89, 241, 89);font-size:20px;font-weight:bold">
                                          TGH San Jose Dealership
                                          </p>
                                   </div>


                                  

                            </div>



                            <div class="company_branch_slideshow_block_slide" id="TGH_San_Francisco_Dealership_block">
                                                        
                                   <img id="TGH_San_Francisco_Dealership_block_img"
                                   src="image/car_wallpaper4.jpg"
                                   title="slide_image 4" name="slide_img4" alt="wallpaper4" 
                                   width="100%" height="600px" >



                                   <div style="position:absolute;top:0;left:80px;
                                   padding:20px;text-align:center;border:10px double orange;
                                   
                                   clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                                   width:400px;z-index:1;background-color:black">
                                          <p style=" color:orange;letter-spacing:5px;
                                          text-shadow:10px 10px 10px orange;font-size:20px;font-weight:bold">
                                          TGH San Francisco Dealership
                                          </p>
                                   </div>


                                

                            </div>




                            <div class="company_branch_slideshow_block_slide" id="TGH_Sacramento_Dealership_block">

                                   <img id="TGH_Sacramento_Dealership_block_img"
                                   src="image/car_wallpaper5.jpg"
                                   title="slide_image 5" name="slide_img5" alt="wallpaper5" 
                                   width="100%" height="600px">


                                   <div style="position:absolute;top:0;left:80px;
                                   padding:20px;text-align:center;border:10px double white;
                                   
                                   clip-path:polygon(0 0, 20% 100%, 80% 100%, 100% 0);
                                   width:400px;z-index:1;background-color:black">
                                          <p style=" color:white;letter-spacing:5px;
                                          text-shadow:10px 10px 10px white;font-size:20px;font-weight:bold">
                                          TGH Sacramento Dealership
                                          </p>
                                   </div>


                                

                            </div>





                                   
                            <button id="prvb"   type="button"
                            onclick="company_branch_slideshow_block_slide_func1(-1)" class="w3-display-left
                            btn w3-transparent text-white w3-hover-aqua"
                            style="font-size:50px;">
                            <i class="fa fa-angle-double-left"></i>
                            </button>

                            <button id="frwb"  type="button"
                            onclick="company_branch_slideshow_block_slide_func1(1)" class="w3-display-right
                            btn w3-transparent text-white w3-hover-aqua"
                            style="font-size:50px;">
                            <i class="fa fa-angle-double-right"></i>
                            </button>






                            </div>


                   
                     </div>


                     <script src="register_page_slideshow_behavior.js"></script>

              </div>

       </form>





         


  

         

          </main> 

           
          
          </main>



        
          



     

           
       
       
       </body>





       <footer>

       
       

       </footer>



</html>