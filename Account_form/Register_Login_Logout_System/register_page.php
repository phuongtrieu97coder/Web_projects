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


                        
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                  

               <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 

               <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>


               <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>

               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  
               
               <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>

               <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
               
               <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>






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
                      grid-template-columns:650px 800px;
                      position:relative;
                      top:-20px;
                      z-index:2;
               }

               [id="block1_1"]{
                      margin:40px 40px;
                      color:white;
                      width:100%;font-size:20px;padding:20px;
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
       top:80px;
       left:130px;
       z-index:1;
       font-size:20px;
       color:aquamarine;
       letter-spacing:10px;
       text-shadow:6px 6px 10px greenyellow;
       border-bottom:5px double yellowgreen;
       
}


[id="company_flag_icon"]{
       position:absolute;
       top:80px;
       left:200px;
       z-index:1;
       text-shadow:6px 6px 10px greenyellow;
       color:aqua;
       border-top:5px dotted white;
       font-size:25px;
}    








[id="avatar_register_form_block"] h1{
       display:inline-block;
}

[id="register_name_block"]{
       display:grid;
       grid-template-columns:280px 325px;
}


[id="lastname_block"]{
       margin-left:10px;
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
              method="post" target="_self"
              
       >  
 
       




      


        
          <div id="block1_1">
            


              <div id="avatar_register_form_block" class="w3-center">
                     
              
                 <img src="image/car_icon2.png" width="80px" height="80px">
                 <b id="company_title">TGH</b>
                 <i id="company_flag_icon" class="fa fa-flag-checkered" 
                 ></i>
           
                     <b class="w3-text-aqua" style="margin-left:20px;font-size:40px;">Register Account</b>
                     <h1><i class="text-success fa fa-user-circle"></i></h1>
                     
              </div>


              <br>

              <label for="username_input"><b>Username:</b></label>
          
 
               
                  <br>
                 <input id="username_input" type="text" name="username1" 
                 placeholder="Enter your username..." maxlength="1000"
                 style="width:100%" required >
                

                 <br>

       

                 <label for="email_input"><b>Email:</b></label>
             
               
                  <br>

                 <input id="email_input" type="email" name="email1" 
                 placeholder="Enter your email..." pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" maxlength="200"
                 style="width:100%" required>
                

                 <br>

                 <div id="register_name_block">
                       <div id="firstname_block">
                             <label for="firstname_input"><b>Firstname:</b></label>
                            

                             <br>
                             <input id="firstname_input" type="text" name="firstname1" 
                             placeholder="Enter your firstname..." maxlength="200"
                             style="width:100%" required>
                       </div>

                       <div id="lastname_block">
                            <label for="lastname_input"><b>Lastname:</b></label>
                            
                            
                            <br>
                            <input id="lastname_input" type="text" name="lastname1" 
                            placeholder="Enter your lastname..." maxlength="200"
                            style="width:100%" required>
                       </div>


                 </div>
              
            
                






              


                 <label for="password_input"><b>Password:</b></label>
               
               
                  <br>
                 <input id="password_input" type="password" name="password1" 
                 placeholder="Enter your password..." maxlength="200"
                 style="width:100%" required>
                

                 <br>




                 <label for="phone_input"><b>Phone number:</b></label>
                 
               
                  <br>
                 <input id="phonenumber_input" type="tel" name="phonenumber1"  
                 placeholder="Ex: (619)-345-5647" maxlength="12"
              
                 style="width:100%" required>
                

                 <br>



                 


                 <label><b>Gender:</b></label><br>
                 <span id="gender_error" class="text-danger"></span>

                 <input id="male_check" name="gender1" type="checkbox" value="male">
                 <label for="male_check"><b>Male</b></label>


                 <input id="female_check" name="gender1" type="checkbox" value="female" >
                 <label for="female_check"><b>Female</b></label>


                 <input id="other_check" name="gender1" type="checkbox" value="other" >
                 <label for="other_check"><b>Other</b></label>



               

                 <br><br>

                 <button id="submit_butt" class="w3-button w3-ripple w3-green 
                 w3-text-white w3-hover-aqua w3-hover-text-white" type="submit" 
                  style="width:100%;text-align:center;"><i class="fa fa-user-plus"></i> SIGN-UP</button>


                
              


              



          </div>
         


          <script>
             
                    
                    $(document).ready(function(){


                         $("#firstname_input").change(function(){
                                var first_name_input_array = $(this).val().split(" ");
                                var first_name_input_txt = "";
                                for(let first_name_input_i = 0;first_name_input_i<first_name_input_array.length;first_name_input_i++){
                                   first_name_input_txt += 
                                   first_name_input_array[first_name_input_i].charAt(0).toUpperCase()+
                                   first_name_input_array[first_name_input_i].slice(1)+" ";
                                   $(this).val(first_name_input_txt);
                                }
                         });
                         $("#lastname_input").change(function(){
                                var last_name_input_array = $(this).val().split(" ");
                                var last_name_input_txt = "";
                                for(let last_name_input_i = 0;last_name_input_i<last_name_input_array.length;last_name_input_i++){
                                   last_name_input_txt += 
                                   last_name_input_array[last_name_input_i].charAt(0).toUpperCase()+
                                   last_name_input_array[last_name_input_i].slice(1)+" ";
                                   $(this).val(last_name_input_txt);
                                }
                         });


                            $("#phonenumber_input").on("keyup",function(event){
                                                                      
                                   if($(this).val().length>2 && $(this).val().length<4){
                                          $(this).val($(this).val()+"-");
                                   }
                                   if($(this).val().length>6 && $(this).val().length<9){
                                          $(this).val($(this).val()+"-");
                                   }
                                                                      
                                   if($(this).val().length=12){
                                          $(this).val($(this).val().slice(0,12));
                                   }
                                                        
                            });



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
