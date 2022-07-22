<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TGH CAR DEALERSHIP WEBSITE">


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


[id="user_avatar_block"]{
       position:relative;left:0px;
       width:200px;height:200px;
       clip-path:circle(50% at 50% 50%);
       background-color:black;
}

[id="user_avatar_block_avatar_img"]{
       position:absolute;top:0;bottom:0;
       left:0;right:0;z-index:1;cursor:pointer;
}
  
[id="user_avatar_block_avatar_upload_button"]{
       position:absolute;top:160px;bottom:0;left:0;right:0;z-index:2;
}


[id="display_avatar_overlay1"]{
       position:fixed;top:0;left:0;
       display:none;width:100%;height:100%;
       right:0;bottom:0;z-index:2;
       background-color:rgba(0, 0, 0, 0.637);
}

[id="display_avatar_overlay2"]{
       display:none;width:100%;height:100%;position:fixed;top:0;left:0;
       right:0;bottom:0;z-index:2;background-color:rgba(0, 0, 0, 0.637);
}

[id="display_avatar_block"]{
       position:fixed;top:20px;
       background-color:white;display:none;
       width:800px;border:10px double aqua;
       box-shadow:2px 2px 8px 8px yellowgreen,-2px -2px 8px 8px yellowgreen;
       left:300px;z-index:3;
}

[id="close_avatar_block_butt"]{
       position:absolute;top:0;right:0;font-size:100px;
}

[id="display_avatar_gallery_block"]{
       position:fixed;top:20px;
       display:none;width:800px;
       border:10px double aqua;
       box-shadow:2px 2px 8px 8px yellowgreen,-2px -2px 8px 8px yellowgreen;
       left:300px;z-index:3;
}


[id="display_avatar_gallery_block_childblock1"]{
       position:relative;top:0;margin-bottom:-10px;
}


   [id="block1_1"]{
          background-color:black;
          border:4px double greenyellow;
          height:100%;
          width:230px;
          margin-left:30px;
          padding:10px;
          position:fixed;top:0;
   }

   [id="home_button"]{
          position:absolute;
          top:-15px;left:0px;
          color:turquoise;
          font-size:40px;
          border-right:4px double greenyellow;
          border-bottom:4px double greenyellow;
   }
   [id="home_button"]:hover{
          background-color:blueviolet;
          color:white;
   }

   [id="block1_1_2"]{
          border-top:4px double aqua;
          margin-top:20px;
   }



   [id="block1_2"]{
          margin-left:490px; 
          position:relative;top:0;z-index:1;

   }


   [id="block1_2_account_table"],[id="block1_2_info_table"],
   [id="block1_2_address_table"],[id="block1_2_payment_method_table"]{
          width:100%;
          background-color:white;
          
   }

   [id="block1_2_account_table"]{
          box-shadow:1px 1px 6px 6px #ccccff, -1px -1px 6px 6px #ccccff
   }

   [id="block1_2_account_table"] td{
          text-align:center;
          font-size:30px;
          padding:20px 0;
          border:5px double blue;
   }

   [id="account_title"]{
          font-weight:bold;
          color:#4dff4d;
          text-shadow:3px 3px 5px green;
   }

   [id="block1_2_info_block"]{
       position:relative;top:0;
       z-index:1;
   }

   [id="block1_2_info_table"]{
          margin-top:25px;
          box-shadow:3px 3px 3px 3px #ffeecc,
          -3px -3px 3px 3px #ffeecc;
        
   }

   [id="block1_2_info_table"], [id="block1_2_info_table"] tr, [id="block1_2_info_table"] td{
          border:5px double orange;
          padding:20px;
   }

   [id="block1_2_info_table"] td{
          font-size:20px;
          width:550px;
   }


   [id="name_update_area"],
   [id="password_update_area"],
   [id="email_update_area"],
   [id="phonenumber_update_area"],
   [id="gender_update_area"],
   [id="address_update_area"],
   [id="apartment_update_area"],
   [id="city_update_area"],
   [id="zipcode_update_area"],
   [id="state_update_area"],
   [id="country_update_area"],
   [id="card_name_update_area"],
   [id="card_number_update_area"],
   [id="card_exp_update_area"],
   [id="cv_code_update_area"]



   {
          display:none;
          
   }
   

  

[id="block1_2_info_table_info_tab"]{
       position:absolute;
       top:0px;left:-205px;
       text-align:center;
       font-size:16px;
       width:200px;
       padding:10px 20px;
       border:4px double white;
      
}




[id="block1_2_address_block"]{
       position:relative;top:0;
       z-index:1;
}

   [id="block1_2_address_table"]{
          margin-top:75px;
          box-shadow:1px 1px 6px 6px #ccffcc,
          -1px -1px 6px 6px #ccffcc;
         
   }

   [id="block1_2_address_table"],[id="block1_2_address_table"] tr,[id="block1_2_address_table"] td{
          border:5px double green;
          padding:20px;
   }

   [id="block1_2_address_table"] td{
          font-size:20px;
          width:550px;
   }
    



   [id="block1_2_address_table_info_tab"]{
       position:absolute;
       top:0px;left:-205px;
       text-align:center;
       font-size:16px;
       width:200px;
       padding:10px 20px;
       border:4px double white;
       background-color:#00cc66;
}






[id="block1_2_payment_method_block"]{
       position:relative;top:0;
       z-index:1;
}

   [id="block1_2_payment_method_table"]{
          margin-top:75px;
          box-shadow:1px 1px 6px 6px #b3ffff,
          -1px -1px 6px 6px #b3ffff;
         
   }

   [id="block1_2_payment_method_table"],[id="block1_2_payment_method_table"] tr,[id="block1_2_payment_method_table"] td{
          border:5px double #00cccc;
          padding:20px;
   }

   [id="block1_2_payment_method_table"] td{
          font-size:20px;
          width:550px;
   }
    



   [id="block1_2_payment_method_table_info_tab"]{
       position:absolute;
       top:0px;left:-205px;
       text-align:center;
       font-size:16px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:#1a8cff;
}




[id='block1_2_info_table_update_button']{
       position:absolute;
       background-color:darksalmon;
       top:60px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       color:white;
       
}

[id='block1_2_info_table_update_button']:hover{
       background-color:green;
       color:white;
}


[id='block1_2_info_table_save_button']{
       position:absolute;
       bottom:0px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:#99cc00;
       display:none;
       color:white;
}

[id='block1_2_info_table_save_button']:hover{
       background-color:purple;
       color:white;
}


[id='block1_2_address_table_update_button']{
       position:absolute;
       top:60px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:#cc99ff;
       color:white;
}
[id='block1_2_address_table_update_button']:hover{
       background-color:blue;
       color:white;
}

[id='block1_2_address_table_save_button']{
       position:absolute;
       bottom:0px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:tomato;
       display:none;
       color:white;
}

[id='block1_2_address_table_save_button']:hover{
       background-color: purple;
       color: white;
}

[id='block1_2_payment_method_table_update_button']{
       position:absolute;
       top:60px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:#99cc00;
       color:white;
}

[id='block1_2_payment_method_table_update_button']:hover{
       background-color: yellow;
       color:white;
}

[id='block1_2_payment_method_table_save_button']{
       position:absolute;
       bottom:0px;left:-205px;
       text-align:center;
       font-size:20px;
       width:200px;
       padding:10px 10px;
       border:4px double white;
       background-color:tomato;
       display:none;
       color:white;
}

[id='block1_2_payment_method_table_save_button']:hover{
       background-color: purple;
       color:white;
}




              </style>
       </head>




       <body style="background:url('image/car_wallpaper8.jpg') center fixed no-repeat;
          background-size:100% 100%;">

      
    
        

         <header>
       

          </header>


   
         
     

           
            
          <main>

    
          <div id="block1">
                    

            <div id="block1_1">

                            <a id="home_button" title="Go to TGH Dealership"
                            name="home_button" type="button" target="_self"
                            href="main_page.php"><i class="fa fa-home"></i></a>




                            <div id="user_avatar_block">
                                   <img id="user_avatar_block_avatar_img"
                                   width="100%" height="100%"
                                   title="Display your Avatar Image" data-toggle="tooltip" data-placement="right"
                                   onclick="open_display_avatar_block(this)">

                                   


                            


                                   <button id="user_avatar_block_avatar_upload_button" type="button" class="w3-button w3-ripple w3-block
                                   w3-blue w3-text-white w3-hover-aqua w3-hover-text-white" 
                                   onclick="open_avatar_gallery_block()">
                                   <i class="fa fa-file-photo-o"></i> AVATAR
                                   </button>

                            


                            </div>





                     <div id="block1_1_2" >
                            
                                                 
                                   <a id="block1_1_2_information_butt" name="update_info_butt" title="update_info_button"
                                   type="button" href="#block1_2"
                                   class="btn btn-info w3-text-white w3-hover-white w3-hover-text-aqua"
                                   style="margin:10px 0;width:100%"><b><i class="fa fa-fa fa-id-card-o"></i> INFORMATION</b></a>


                                   
                                   
                                  
                                   
                                   <button id="block1_1_2_order_butt" name="update_info_butt" title="update_info_button"
                                   type="button" class="btn btn-success w3-text-white w3-hover-white w3-hover-text-green"
                                   style="margin:10px 0;width:100%"
                                   ><b><i class="fa fa-cart-arrow-down"></i> YOUR ORDER</b></button>
                                   
                                   
                                   <a id="block1_1_2_payment_method_butt" name="update_info_butt" title="update_info_button"
                                   type="button" href="#block1_2_payment_method_block"
                                    class="btn btn-primary w3-text-white w3-hover-white w3-hover-text-blue"
                                   style="margin:10px 0;width:100%"><b><i class="fa fa-money"></i> PAYMENT METHOD</b></a>



                                   <button id="block1_1_2_feedback_butt" name="update_info_butt" title="update_info_button"
                                   type="button" class="btn btn-light w3-text-black w3-hover-black w3-hover-text-white"
                                   style="margin:10px 0;width:100%"><b><i class="fa fa-comments-o"></i> FEEDBACK</b></button>



                                   <button id="block1_1_2_signout_account_butt" name="signout_account_butt" title="signout_account_button"
                                   type="button" class="btn btn-warning w3-text-white w3-hover-white w3-hover-text-orange"
                                   style="margin:10px 0;width:100%" onclick="sign_out()"><b><i class="fa fa-sign-out"></i> SIGN-OUT</b></button>



                                   <button id="block1_1_2_deactivate_account_butt" name="deactivate_account_butt" title="deactivate_account_button"
                                   type="button" class="btn btn-danger w3-text-white w3-hover-white w3-hover-text-red"
                                   style="margin:10px 0;width:100%" onclick="deactivate_account()">
                                   <b><i class="fa fa-lock"></i> DEACTIVATE ACCOUNT <i class="fa fa-power-off"></i></b></button>


                     </div>






            </div>







                             <div id="display_avatar_overlay1" onclick="close_display_avatar_block()"></div>

                            <div id="display_avatar_overlay2" onclick="close_avatar_gallery_block()"></div>


                            <div id="display_avatar_block">
                                          <img id="display_avatar_block_avatar_img" width="100%" height="500px">

                                          <button id="close_avatar_block_butt"  title="CLOSE"
                                          type="button" class="w3-button w3-ripple w3-transparent w3-text-red
                                          w3-hover-red w3-hover-text-white"
                                          onclick="close_display_avatar_block()" >&times;</button>
                            </div>





                            

                            <div id="display_avatar_gallery_block">

                                   <div id="display_avatar_gallery_block_childblock1">


                                          <label for="file1" style="
                                          height:50px;
                                          display: inline-block;
                                          padding: 10px 0;cursor: pointer;width:610px;
                                           text-align:center;
                                          background-color:yellowgreen;" class="w3-hover-purple">

                                          <input id="file1" type="file" 
                                          accept="image/*" name="file1"
                                          style="display:none">

                                          <b style="font-size:20px;color:white;position:relative;">
                                          <i class="fa fa-file-image-o"></i>
                                          Upload Avatar from your local folder</b>
                                          </label>
                                          
                                   
                                          <button id="upload_button" type="button" class="w3-button w3-ripple
                                          w3-blue w3-text-white w3-hover-aqua w3-hover-text-white"
                                          style="width:120px;height:50px;position:relative;top:-5px;left:-5px;" onclick="upload_save_avatar()">
                                          <b><i class="fa fa-upload"></i> UPLOAD</b>
                                          </button>
                                   

                                          <button id="close_avatar_block_butt"  title="CLOSE"
                                                 type="button" class="w3-button w3-red w3-ripple
                                                 w3-text-white w3-hover-white w3-hover-text-red"
                                                 style="height:50px;width:50px;font-size:20px;position:absolute;top:0;right:0"
                                                 onclick="close_avatar_gallery_block()" ><b>X</b>
                                          </button>

                                   </div>


                                   <div id="progress_block" class="progress" 
                                   style="display:none;
                                   height:20px">
                                          <div id="progress_bar" class="progress-bar progress-bar-animated progress-bar-striped"
                                          style="background-color:green;color:white;padding-top:5px;height:20px;
                                          text-align:center;font-size:15px;"></div>
                                   </div>



                                   <div id="avatar_uploaded_file_block"
                                   class="w3-center bg-white" style="display:none;
                                   border-bottom:4px double green;">
                                          
                                          <b style="text-decoration:underline;font-size:25px;
                                          text-shadow:4px 2px 4px blue;color:yellow;
                                          background-color:black">Your Avatar Uploaded File</b>
                                          <br>
                                          <img id="display_avatar_gallery_avatar_upload" 
                                          width="200px" height="200px">
                                          

                                          
                                   </div>




                                   <div id="recent_avatar_uploaded_file_block"
                                   class="w3-center bg-white" style="border-bottom:4px double green;">
                                          
                                          <b style="text-decoration:underline;font-size:25px;
                                          text-shadow:4px 2px 4px blue;color:yellow;
                                          background-color:black">Your Recent Avatar File</b>
                                          <br>
                                          <img id="avatar_gallery_recent_avatar_img" 
                                          width="200px" height="200px">
                                          
                     
                                          
                                   </div>

                                


                                   
                            </div>




            <div id="block1_2">

                     <table id="block1_2_account_table">
                            <tr>
                                   <td><i class="fa fa-address-card" style="color:#009999"></i> 
                                  <b id="account_title"> ACCOUNT:</b> 
                                   <i id="account_id"></i>
                                  </td>
                            </tr>

                     </table>



                     <form id="block1_2_info_block" title="block1_2_info_block" 
                     name="block1_2_info_block" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="post" target="_self" enctype="multipart/form-data" 
                     onsubmit="update_info()"
                     >
                    
                     <table id="block1_2_info_table">
                             <tr>
                                   <td id="name_area"><b>Name:</b> <i id="account_name"></i> </td>
                                    
                                   <td id="name_update_area">
                                          <label for="info_firstname"><b>Firstname:</b></label>
                                          <input id="info_firstname" title="info_firstname" name="info_firstname"
                                          type="text" required style="width:600px;">
                                          <span class="text-danger">*Required!!!*</span>
                                          <br><br>

                                          <label for="info_lastname"><b>Lastname:</b></label>
                                          <input id="info_lastname" title="info_lastname" name="info_lastname"
                                          type="text" required style="width:600px;">
                                          <span class="text-danger">*Required!!!*</span>


                                   </td>

                                   <td id="email_area"><b>Email:</b> <i id="account_email"></i>
                                   </td>


                                   <td id="email_update_area">
                                          <label for="info_email"><b>Email:</b></label>
                                          <input id="info_email" title="info_email" name="info_email"
                                          type="email" required style="width:640px;">
                                          <span class="text-danger">*Required!!!*</span>

                                          <br>

                                   </td>
                            </tr>



                            <tr>
                                   <td id="password_area"><b>Password:</b> <i id="account_password"></i></td>

                                   <td id="password_update_area">
                                          <label for="info_password"><b>Password:</b></label>
                                          <input id="info_password" title="info_password" name="info_password"
                                          type="password" required style="width:600px;">
                                          <span class="text-danger">*Required!!!*</span>

                                          <br>

                                   </td>


                                   <td id="phonenumber_area"><b>Phone Number:</b> <i id="account_phone_number"></i></td>

                                   <td id="phonenumber_update_area">
                                          <label for="info_phonenumber"><b>Phone Number:</b></label>
                                          <input id="info_phonenumber" title="info_phonenumber" name="info_phonenumber"
                                          type="tel" maxlength="12" required style="width:550px;">
                                          <span class="text-danger">*Required!!!*</span>

                                          <br>

                                   </td>
                            </tr>


                            <tr>
                                   <td id="gender_area"><b>Gender:</b> <i id="account_gender"></i></td>

                                   <td id="gender_update_area">
                                                 
                                          <label><b>Gender:</b></label><br>
                                          <span id="info_gender_error" class="text-danger"></span>

                                          <input id="info_male_check" name="info_gender1" type="checkbox" value="male">
                                          <label for="info_male_check"><b>Male</b></label>


                                          <input id="info_female_check" name="info_gender1" type="checkbox" value="female">
                                          <label for="info_female_check"><b>Female</b></label>


                                          <input id="info_other_check" name="info_gender1" type="checkbox" value="other">
                                          <label for="info_other_check"><b>Other</b></label>
                                          <span class="text-danger">*Required!!!*</span>

                                   </td>


                                   <td id="register_date_area"><b>Register Date:</b> <i id="account_register_date"></i></td>
                            </tr>


                            <span id="block1_2_info_table_info_tab" class="bg-info text-white">
                                   <b><i class="fa fa-fa fa-id-card-o"></i> INFORMATION</b>
                            </span>

                            <button id="block1_2_info_table_update_button" type="button"
                           
                            onclick="open_update_info_form()">
                                   <b><i class="fa fa-refresh"></i> UPDATE</b>
                            </button>


                            <button id="block1_2_info_table_save_button" type="submit"
                           >
                                   <b><i class="fa fa-save"></i> SAVE</b>
                            </button>

                     </table>

                     </form>




                     <form id="block1_2_address_block" title="block1_2_address_block" 
                     name="block1_2_address_block" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="post" target="_self" enctype="multipart/form-data"
                     onsubmit="update_address()"
                     >

                     <table id="block1_2_address_table">
                             <tr>
                                   <td id="address_area">
                                          
                                   <label for="address_address"><b>Address:</b></label> 
                                 
                            
                                   <i id="account_address"></i>

                                          <span id="address_update_area">
                                          
                                          <input id="address_address" title="address_address" name="address_address"
                                          type="text" required style="width:100%;" placeholder="Enter your address...">

                                          <br>

                                         </span>
                            
                                  </td>

                                


                                   <td id="apartment_area">
                                          <label for="address_apartment"><b>Apartment:</b></label>
                                        

                                           <i id="account_apartment"></i>

                                           <span id="apartment_update_area">
                                          
                                                 <input id="address_apartment" title="address_apartment" name="address_apartment"
                                                 type="text" required style="width:100%;" placeholder="Enter your APT...">
                                                

                                                 <br>

                                          </span>
                                   </td>

                                   
                            </tr>


                            <tr>
                                   <td id="city_area">
                                          <label for="address_city"><b>City:</b></label>
                                          
                                          
                                          <i id="account_city"></i>

                                          <span id="city_update_area">
                                                 
                                                 <input id="address_city" title="address_city" name="address_city"
                                                 type="text" required style="width:100%;" placeholder="Enter your city...">
                                          

                                                 <br>

                                          </span>


                                   </td>



                                   <td id="zipcode_area">
                                          <label for="address_zipcode"><b>Zip Code:</b></label> 
                                          <i id="account_zipcode"></i>


                                          <span id="zipcode_update_area">
                                                 
                                                 <input id="address_zipcode" title="address_zipcode" name="address_zipcode"
                                                 type="number" required style="width:100%;" placeholder="Enter your zipcode...">
                                          

                                                 <br>

                                          </span>
                                   
                                   
                                   </td>
                            </tr>



                            <tr>
                                   <td id="state_area">
                                          <label for="address_state"><b>State:</b></label> 
                                          <i id="account_state"></i>

                                          <span id="state_update_area">
                                                 
                                                 <input id="address_state" title="address_state" name="address_state"
                                                 type="text" required style="width:100%;" placeholder="Enter your state...">
                                          

                                                 <br>

                                          </span>


                                   </td>



                                   <td id="country_area">
                                          <label for="address_country"><b>Country:</b></label>
                                           <i id="account_country"></i>

                                           <span id="country_update_area">
                                                 
                                                 <input id="address_country" title="address_country" name="address_country"
                                                 type="text" required style="width:100%;" placeholder="Enter your country...">
                                          

                                                 <br>

                                          </span>
                                   </td>



                            </tr>


                            
                            <span id="block1_2_address_table_info_tab" class="text-white">
                                   <b><i class="fa fa-map-marker"></i> ADDRESS</b>
                            </span>

                            <button id="block1_2_address_table_update_button" type="button"
                            
                            onclick="open_update_address_form()">
                                   <b><i class="fa fa-refresh"></i> UPDATE</b>
                            </button>


                            <button id="block1_2_address_table_save_button" type="submit"
                           >
                                   <b><i class="fa fa-save"></i> SAVE</b>
                            </button>

                     </table>

                     </form>





                     


                     <form id="block1_2_payment_method_block" title="block1_2_payment_method_block" 
                     name="block1_2_payment_method_block" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                     method="post" target="_self" enctype="multipart/form-data"
                     onsubmit="update_payment_method()"
                     ng-controller="payment_method_block_angularjs_controller">

                             <table id="block1_2_payment_method_table">

                                          <tr>
                                                 <td colspan="2">
                                                               <label for="payment_method_id"><b>Payment Method:</b></label>
                                                        <img src="image/paypal_payment_icon.jpg"
                                                        width="30px" height="25px">
                                                        <img src="image/visa_payment_icon.png"
                                                        width="40px" height="40px">
                                                        <img src="image/mastercard_payment_icon.png"
                                                        width="40px" height="40px">
                                                        <img src="image/discover_payment_icon.png"
                                                        width="40px" height="40px">
                                                        <img src="image/american_express_payment_icon.jpg"
                                                        width="40px" height="40px">
                                                 </td>
                                          </tr>



                                           <tr>


                            
                            



                                                 <td id="card_name_area">
                                                               
                                                        <label for="card_name_input"><b>Card Name:</b></label> 
                                                 
                                                 
                                                        <i id="account_card_name"></i>

                                                               <span id="card_name_update_area">
                                                               
                                                               <input id="card_name_input" title="card_name_input" name="card_name_input"
                                                               type="text" required style="width:100%;" placeholder="Enter your card_name...">

                                                               <br>

                                                        </span>
                                                 
                                                 </td>

                                 
                                


                                                 <td id="card_number_area">
                                                                             
                                                                      <label for="card_number_input"><b>Card Number:</b></label> 
                                                                      <span id="card_number_input_error_message" class="text-info"
                                                                      style="font-size:15px;"><b>EX: 0123-4567-8910-1112</b></span>
                                                               
                                                 
                                                                      <i id="account_card_number"></i>

                                                                      <span id="card_number_update_area" style="position:relative;top:0;">
                                                                      
                                                                             <input id="card_number_input" title="card_number_input" name="card_number_input"
                                                                             type="text" required style="width:100%;padding-right:40px;" 
                                                                             maxlength="19"
                                                                             placeholder="Enter your card_number...">

                                                                             <i class="fa fa-credit-card" style="position:absolute;
                                                                             top:2px;right:5px;color:black;font-size:32px;"></i>

                                                                                    <br>

                                                                      </span>


                                                               
                                                 
                                                 </td>

                                   
                                          </tr>


                                          <tr>
                                                                      <td id="card_exp_area">
                                                                                    
                                                                             
                                   
                                                                             


                                                                             


                                                                                    <label for="card_exp_month_input"><b>Exp Date:</b></label>
                                                                                    <span id="card_exp_error_message" class="text-danger"
                                                                                    ></span>


                                                                                    <i id="account_card_exp_month">Month</i>/<i id="account_card_exp_year">Year</i>
                                                                                    
                                                                                    <br>

                                                                                    <span id="card_exp_update_area" style="position:relative;top:0;">

                                                                                           <select id="card_exp_month_input"
                                                                                           name="card_exp_month_input" style="width:85px;" 
                                                                                           ng-init="months = ['01','02','03','04','05','06','07','08','09','10','11','12'];"
                                                                                           required>
                                                                                           <option disabled selected>Month</option>
                                                                                           <option id="exp_month_input_option" ng-repeat="exvb in months" value="{{exvb}}">{{exvb}}</option>
                                                                                           </select>

                                                                                           <b>/</b>


                                                                                           <input id="card_exp_year_input" name="card_exp_year_input" title="Year: Min:2022,Max:2100"
                                                                                           type="text" maxlength="4" placeholder="Year" data-placement="bottom"
                                                                                           data-toggle="popover" data-trigger="hover"  min="2022" max="2100"
                                                                                           data-content="Format: 4 number. Ex: 2022"
                                                                                           style="width:60px;" required>

                                                                                    
                                                                                    </span>
   <script>

          
   </script>

                                                                             
                                                                      </td>
       



                                                                      <td id="cv_code_area">
                                                                             

                                                                                    <label for="card_cv_code_input"><b>CV Code:</b></label>
                                                                                    <span id="card_cv_code_error_message" class="text-danger"
                                                                                    ></span>



                                                                                    <i id="account_card_cv_code"></i>
                                                                                    
                                                                                    <img src="image/card_cv_number_icon.png"
                                                                                           width="60px" height="40px" style="float:right">
                                                                                    <br>

                                                                                    <span id="cv_code_update_area">
                                                                                           <input id="card_cv_code_input" title="card_cv_code_input_field"
                                                                                           name="card_cv_code_input" type="text"
                                                                                           maxlength="3" 
                                                                                           ng-model="card_cv_code_input_model"
                                                                                           placeholder="Ex:123" min="0"  max="999"
                                                                                           style="width:80px;" required>

                                                                                           <img src="image/card_cv_number_icon.png"
                                                                                           width="60px" height="40px">
                                                                                    </span>
                                                                      
                                                                      
                                                                      </td>
                                          </tr>



                            

                            
                                          <span id="block1_2_payment_method_table_info_tab" class="text-white">
                                                 <b><i class="fa fa-money"></i> PAYMENT METHOD</b>
                                          </span>

                                          <button id="block1_2_payment_method_table_update_button" type="button"
                                         
                                          onclick="open_update_payment_method_form()">
                                                 <b><i class="fa fa-refresh"></i> UPDATE</b>
                                          </button>

<!-- 

 -->
                                          <button id="block1_2_payment_method_table_save_button" type="submit"
                                         >
                                                 <b><i class="fa fa-save"></i> SAVE</b>
                                          </button>

                            </table>

                     </form>





                     
                     
                     <div id="user_order_information_block" 
                       >
                          <?php require('user_order_info_page.php');?>
                            
                     </div>
                     
              </div>
              



          </div>
            
            
          </main>






       
       </body>





       <footer>

       </footer>



</html>
         
