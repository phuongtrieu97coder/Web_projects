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

              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
 


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
                      grid-template-columns:900px 480px;
                      position:relative;
                      top:-20px;
                      z-index:2;
               }

               [id="block1_1"]{
                      margin:40px 10px;
                      color:white;
                      font-size:20px;padding:20px;
                      border:2px solid blue;
                      background-color:black;
                      width:900px;
               }


               [id="form1_block"]{
                      display:grid;
                      grid-template-columns:430px 430px;
                     
                      
               }



               [id="payment_info_form"]{
                      border-left:3px solid purple;
                      margin-left:10px;
                      padding:10px;
                      position:relative;
                      top:0;
               }




               [id="block1_2"]{
                      margin-top:40px;
                      margin-bottom:40px;
                      margin-left:20px;
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
       left:270px;
       z-index:1;
       font-size:15px;
       color:aquamarine;
       letter-spacing:10px;
       text-shadow:6px 6px 10px greenyellow;
       border-bottom:5px double yellowgreen;
       
}


[id="company_flag_icon"]{
       position:absolute;
       top:20px;
       left:320px;
       z-index:1;
       text-shadow:6px 6px 10px greenyellow;
       color:aqua;
       border-top:5px dotted white;
}    




               [id="avatar_order_form_block"] h1{
                    display:inline-block;
               }

              
          

          

             
             

              
           
              
              </style>
       </head>




       <body>

    
          <header>

          </header>



          <main>

          <image id="background_img" src="image/car_wallpaper0.jpg" width="100%"
          height="100%" alt="background_img">

       <div id="block1" ng-app="car_order_form_app" ng-controller="car_order_form_app_controller">  


        <?php
        
        $name = $email = $address = $gender = $telephone = $card_name = 
        $card_number=$card_exp_month = $card_exp_year = $card_cv_code =
        $car_amount = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
               $name = check_func($_POST["name1"]);
               $email = check_func($_POST["email1"]);
               $address = check_func($_POST["address1"]);
               $gender = check_func($_POST["gender1"]);
               $telephone = check_func($_POST["tel1"]);
              
               $card_name = check_func($_POST["card_name_input"]);
              
               $card_number = check_func($_POST["card_number_input"]);
              
               $card_exp_month = check_func($_POST["card_exp_month_input"]);
              
               $card_exp_year = check_func($_POST["card_exp_year_input"]);
              
               $card_cv_code = check_func($_POST["card_cv_code_input"]);
              
               $car_amount = check_func($_POST["car_amount_input"]);
              


              
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
                     
              
                            <img src="image/car_icon2.png" width="50px" height="50px">
                            <b id="company_title">TGH</b>
                            <i id="company_flag_icon" class="fa fa-flag-checkered" style="font-size:15px;"></i>
                     
                         <h1 class="w3-text-aqua" style="margin-left:20px;">Order Form</h1>
                         <h1><i class="text-success fa fa-shopping-cart"></i></h1>
                         
                     </div>


              <form id="form1_block" name="form1" title="form 1 block"
              action="<?php echo htmlspecialchars("Thank_you_order.php")?>"
              method="post" target="_self" enctype="multipart/form-data" 
              onsubmit="save_order_info()"  
              >


            

                     <div id="Customer_info_form">
                            <label for="name_input"><b>Name:</b></label>
                            <span class="text-danger" ng-show="form1.name1.$error.required">Name is required!!!</span>
                            
                            <br>
                            <input id="name_input" type="text" name="name1" 
                            placeholder="Enter your name..." ng-model="name1_mol" required
                            style="width:100%">
                            

                            <br>


                            <label for="email_input"><b>Email:</b></label>
                            <span class="text-danger" ng-show="form1.email1.$error.required">Email is required!!!</span>
                            
                            <br>

                            <input id="email_input" type="email" name="email1" 
                            placeholder="Ex: abc@outlook.com" ng-model="email1_mol" 
                            pattern="[A-Za-z0-9._%+=-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$"
                            required
                            style="width:100%">
                            

                            <br>


                            <label for="address_input"><b>Address:</b></label>
                            <span class="text-danger" ng-show="form1.address1.$error.required">Address is required!!!</span>
                            
                            <br>
                            <input id="address_input" type="text" name="address1" 
                            placeholder="Enter your address..." ng-model="address1_mol" required
                            style="width:100%">
                            

                            <br>




                            <label for="phone_input"><b>Phone number:</b></label>
                            <span class="text-danger" ng-show="form1.tel1.$error.required">Phone number is required!!!</span>
                            
                            <br>
                            <input id="phone_input" type="tel" name="tel1" 
                             placeholder="Ex: (619)-345-5647"
                            
                             maxlength="12"
                            ng-model="tel1_mol" required
                            style="width:100%">
                            

                            <br>



                            


                            <label><b>Gender:</b></label><br>
                            <input id="male_check" name="gender1" type="checkbox" value="male" >
                            <label for="male_check"><b>Male</b></label>
                            <input id="female_check" name="gender1" type="checkbox" value="female" >
                            <label for="female_check"><b>Female</b></label>
                            <input id="other_check" name="gender1" type="checkbox" value="other" >
                            <label for="other_check"><b>Other</b></label>
                          


     

                            <button id="submit_butt" class="w3-green w3-text-white w3-hover-aqua"
                  name="submit1" type="submit" 
                 value="Submit" style="width:100%;text-align:center;"><i class="fa fa-shopping-cart"></i> ORDER</button>

                     </div>



                     <div id="payment_info_form">
                            <label for="payment_method_id"><b>Payment Method:</b></label><br>
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



                            <br>



                            <label for="card_name_input"><b>Card Name:</b></label>
                            <span id="card_name_error_message" class="text-danger"
                            ></span>

                            <input id="card_name_input" title="card_name_input_field"
                            name="card_name_input" type="text" 
                            ng-model="card_name_input_model"
                            placeholder="Enter your card name..."
                            style="width:100%;" required>



                            <label for="card_number_input"><b>Card Number:</b></label>
                            <span id="card_number_error_message" class="text-info"
                            style="font-size:15px;"><b>EX: 0123-4567-8910-1112</b></span>

                            <input id="card_number_input" title="card_number_input_field"
                            name="card_number_input" type="text" 
                            ng-model="card_number_input_model"
                            maxlength="19"
                            placeholder="Enter your card number..."
                            style="width:100%;padding-right:40px;" required>


                            <i class="fa fa-credit-card" style="position:absolute;
                            top:200px;right:15px;color:black;font-size:32px;"></i>



                            <div class="row">
                                   <div class="col-6">
                                                 <label for="card_exp_month_input"><b>Exp Date:</b></label>
                                          <span id="card_exp_error_message" class="text-danger"
                                          ></span><br>

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

                                         




                                                        <br><br>


                                                 <label for="car_amount_input"><b>Amount:</b></label>
                                                 <input id="car_amount_input" type="number" name="car_amount_input"
                                                 ng-model="car_amount_input_model" style="width:40px;font-size:14px;"
                                                 placeholder="01" required>





                                         

                                   </div>


                                   <div class="col-sml-4" style="margin-left:10px;">
                                           <div style="padding-left:45px;">
                                                 <label for="card_cv_code_input"><b>CV Code:</b></label>
                                                 <span id="card_cv_code_error_message" class="text-danger"
                                                 ></span><br>

                                                 <input id="card_cv_code_input" title="card_cv_code_input_field"
                                                 name="card_cv_code_input" type="text"
                                                 maxlength="3" 
                                                 ng-model="card_cv_code_input_model"
                                                 placeholder="Ex:123" min="0"  max="999"
                                                 style="width:80px;" required>

                                                 <img src="image/card_cv_number_icon.png"
                                                 width="60px" height="40px">

                                           </div>

                                          <br>

                                          <div style="margin-left:-40px;">
                                                 <span style="padding:10px;background-color:blue;
                                                 color:white;">Total:</span>

                                                 <span id="total_price_value_block"
                                                  style="background-color:white;color:green;;padding:10px;
                                                  margin-left:-5px;">
                                                  <b id="total_car_order_price"></b>
                                                 </span>
                                          </div>
                                   </div>
                            </div>




                     </div>
             



                   

              


                 <br>

              

                
               </form>


             



          </div>
         



              <div id="block1_2">

              
      <div style="border:2px solid aqua;
      width:100%;">
              <img id="car_info_image" class="img1" title="image 1"
              name="img1"
              alt="car1" width="100%" height="300px">

              <div class="car_info_block">
                      <b>Model: </b> <i id="car_info_block_model_name"></i>
              </div>

              <div class="car_info_block">
                     <b>Speed: </b> <i id="car_info_block_model_speed"></i>
              </div>

              <div class="car_info_block">
                     <b>Price: </b> 
                     <i id="car_info_block_model_price"></i>
              </div>
             

                     

              <script>

var jq = $.noConflict();
jq(document).ready(function($){
    $("[class='car_info_block']").css({
        "padding":"20px",
        "border-bottom":"2px solid green"
    });

   
                                            
   $("[data-toggle='popover']").popover();
                                        

   $("#phone_input").on("keyup",function(){
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

    $("#card_number_input").on("keyup",function(){
                                                               
       if($(this).val().length>3 && $(this).val().length<5){
       $(this).val($(this).val()+"-");
       }
       if($(this).val().length>8 && $(this).val().length<10){
       $(this).val($(this).val()+"-");
       }

       if($(this).val().length>13 && $(this).val().length<15){
       $(this).val($(this).val()+"-");
       }

       if($(this).val().length>18 && $(this).val().length<20){
       $(this).val($(this).val()+"-");
       }
       
       if($(this).val().length=20){
              $(this).val($(this).val().slice(0,19));
       }

       });


       var get_user_name_from_local_storage = localStorage.getItem("User_name"),
        get_user_email_from_local_storage = localStorage.getItem("User_email"),
        get_user_password_from_local_storage = localStorage.getItem("User_password"),
        get_user_phonenumber_from_local_storage = localStorage.getItem("User_phonenumber"),
        get_user_gender_from_local_storage = localStorage.getItem("User_gender"),
        get_user_address_from_local_storage = localStorage.getItem("User_address"),
        get_user_apartment_from_local_storage = localStorage.getItem("User_apartment"),
        get_user_city_from_local_storage = localStorage.getItem("User_city"),
        get_user_zipcode_from_local_storage = localStorage.getItem("User_zipcode"),
        get_user_state_from_local_storage = localStorage.getItem("User_state"),
        get_user_country_from_local_storage = localStorage.getItem("User_country"),
        get_user_card_name_from_local_storage = localStorage.getItem("User_card_name"),
        get_user_card_number_from_local_storage = localStorage.getItem("User_card_number"),
        get_user_card_exp_month_from_local_storage = localStorage.getItem("User_card_exp_month"),
        get_user_card_exp_year_from_local_storage = localStorage.getItem("User_card_exp_year"),
        get_user_card_cv_code_from_local_storage = localStorage.getItem("User_card_cv_code");


        
    if(get_user_gender_from_local_storage == "male"){
       $("[id='male_check']").attr("checked","true");
       $("#female_check").attr("disabled","true");
       $("#other_check").attr("disabled","true");

       $("[id='male_check']").click(function(){
              return false;
       });
       /* 
       This line of code is going to prevent user to click to check this checkbox
       We can not use disabled attribute to disable a checkbox
        and still get the value to GET or POST to server.
       We either can not use readonly attribute

        $("[id='male_check']").attr("checked","true"); this line help automatically check this
        box if the localStorage has user gender as male
       */
    
    }else if(get_user_gender_from_local_storage == "female"){
       $("[id='female_check']").attr("checked","true");
       $("#male_check").attr("disabled","true");
       $("#other_check").attr("disabled","true");

       $("[id='female_check']").click(function(){
              return false;
       });
      
    }else if(get_user_gender_from_local_storage == "other"){
       $("[id='other_check']").attr("checked","true");
       $("#male_check").attr("disabled","true");
       $("#female_check").attr("disabled","true");

       $("[id='other_check']").click(function(){
              return false;
       });
       
    }else{
           console.log(get_user_gender_from_local_storage);
    }

  if(get_user_gender_from_local_storage == "" || get_user_gender_from_local_storage == null
  || get_user_gender_from_local_storage == "undefined"){
       var n = 1;
                       $("#male_check").click(function(){
                              if(n==1){
                                   $("#female_check").removeAttr("disabled");
                                  $("#other_check").removeAttr("disabled");
                                 
                                  n=2;
                              }else {
                                   $("#female_check").attr("disabled","true");
                                  $("#other_check").attr("disabled","true");
                                  n=1;
                              }
                           
                       });


                       $("#female_check").click(function(){
                              if(n==1){
                                   $("#male_check").removeAttr("disabled");
                                  $("#other_check").removeAttr("disabled");
                                 
                                  n=2;
                              }else {
                                   $("#male_check").attr("disabled","true");
                                  $("#other_check").attr("disabled","true");
                                  n=1;
                              }
                           
                       });


                       $("#other_check").click(function(){
                              if(n==1){
                                   $("#female_check").removeAttr("disabled");
                                  $("#male_check").removeAttr("disabled");
                                  n=2;
                              }else {
                                  
                                  $("#female_check").attr("disabled","true");
                                  $("#male_check").attr("disabled","true");
                                  n=1;
                              }
                           
                       });
   

  }

    

      if(get_user_name_from_local_storage !== "" && get_user_name_from_local_storage !== null){
             $("[id='name_input']").val(get_user_name_from_local_storage);
             $("[id='name_input']").attr("readonly","readonly");
             /* 
             I add attribute readonly to prevent user from add or change their information, but
             the input field still remain the value to submit

             I don't add attribute disable because when we disable a input field, although we
             can still display the value to user, they can not be sent by GET POST to server
             for storing information
             */
            
      }


      if(get_user_email_from_local_storage !== "" && get_user_email_from_local_storage !== null){
             $("[id='email_input']").val(get_user_email_from_local_storage);
             $("[id='email_input']").attr("readonly","readonly");
           
      }


      if(get_user_address_from_local_storage !== "" && get_user_address_from_local_storage !== null
      && get_user_apartment_from_local_storage !== "" && get_user_apartment_from_local_storage !== null
      && get_user_city_from_local_storage !== "" && get_user_city_from_local_storage !== null
      && get_user_zipcode_from_local_storage !== "" && get_user_zipcode_from_local_storage !== null
      && get_user_state_from_local_storage !== "" && get_user_state_from_local_storage !== null
      && get_user_country_from_local_storage !== "" && get_user_country_from_local_storage !== null
      ){
             var output_user_full_address = get_user_address_from_local_storage +", "+
             get_user_apartment_from_local_storage+", "+get_user_city_from_local_storage+", "+
             get_user_zipcode_from_local_storage+", "+get_user_state_from_local_storage+", "+
             get_user_country_from_local_storage
             $("[id='address_input']").val(output_user_full_address);
             $("[id='address_input']").attr("readonly","readonly");
          
      }

      if(get_user_phonenumber_from_local_storage !== "" && get_user_phonenumber_from_local_storage !== null){
             $("[id='phone_input']").val(get_user_phonenumber_from_local_storage);
             $("[id='phone_input']").attr("readonly","readonly");
           
      }

      if(get_user_card_name_from_local_storage !== "" && get_user_card_name_from_local_storage !== null){
             $("[id='card_name_input']").val(get_user_card_name_from_local_storage);
             $("[id='card_name_input']").attr("readonly","readonly");
            
      }
      if(get_user_card_number_from_local_storage!==""&&get_user_card_number_from_local_storage!==null){
             $("[id='card_number_input']").val(get_user_card_number_from_local_storage);
             $("[id='card_number_input']").attr("readonly","readonly");
           
      }
      if(get_user_card_exp_month_from_local_storage!==""&&
      get_user_card_exp_month_from_local_storage!==null){
             $("[id='card_exp_month_input']").val(get_user_card_exp_month_from_local_storage);
             $("[id='card_exp_month_input']").find('option').not(':selected').attr("disabled","true");
       //       Help disable all the option element that doesn't be selected and add disabled attribute
       // to them to make sure user can't select any other option except the expiration month of 
       // card information that they have provided in their account before.
            
      }
      if(get_user_card_exp_year_from_local_storage!==""&&get_user_card_exp_year_from_local_storage!==null){
             $("[id='card_exp_year_input']").val(get_user_card_exp_year_from_local_storage);
             $("[id='card_exp_year_input']").attr("readonly","readonly");
            
      }
      if(get_user_card_cv_code_from_local_storage!==""&&get_user_card_cv_code_from_local_storage!==null){
             $("[id='card_cv_code_input']").val(get_user_card_cv_code_from_local_storage);
             $("[id='card_cv_code_input']").attr("readonly","readonly");
             
      }
     

    
});




function save_order_info(){
       var get_car_total_price = document.getElementById("total_car_order_price");
       if(typeof(Storage)!=="undefined"){

              localStorage.setItem("car_order_image",document.getElementById("car_info_image").getAttribute("src"));
              localStorage.setItem("car_price",get_car_total_price.innerHTML);
              localStorage.setItem("car_order_amount",document.getElementById("car_amount_input").value);

              var today_date = new Date().toLocaleDateString(),
              today_time = new Date().toLocaleTimeString();

              localStorage.setItem("car_order_date",today_date);
              localStorage.setItem("car_order_time",today_time);



              if(document.getElementById("male_check").checked == true){
              
                     localStorage.setItem("User_gender",document.getElementById("male_check").value);
              }else if(document.getElementById("female_check").checked == true){
                     localStorage.setItem("User_gender",document.getElementById("female_check").value);

              
              }else if(document.getElementById("other_check").checked == true){
                     localStorage.setItem("User_gender",document.getElementById("other_check").value);

              }else{
                     localStorage.setItem("User_gender","");

              }
                     

       }

      
}







var get_car_info_model_name =document.getElementById("car_info_block_model_name");
get_car_info_model_name.innerHTML = localStorage.getItem("car_model");

if(get_car_info_model_name.innerHTML == "Bugatti Chiron V8"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti1.Price[0]}}";


}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V9"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti2.Price[0]}}";



}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V12"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti3.Price[0]}}";


}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V15"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V23"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V26"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V30"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V33"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V35"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Essenza"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini1.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Sian 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini2.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Veneno 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini3.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Veneno 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 600LT Green"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren1.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 620r"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren2.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S GT3X"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren3.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 600LT"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S Spider"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_3"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_4"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra Roadster BC"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car1_price() | currency}}";
 function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model1.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model1.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model1.Price[0];
     
 }

  
}else if(get_car_info_model_name.innerHTML == "Pagani Zonda"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car2_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model2.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model2.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model2.Price[0];
     
 }
  
}else if(get_car_info_model_name.innerHTML == "Pagani Imola 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car3_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model3.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model3.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model3.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car4_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model4.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model4.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model4.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Zonda 2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car5_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model5.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model5.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model5.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car6_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model6.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model6.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model6.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car7_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model7.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model7.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model7.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra BC Roadster 2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car8_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model8.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model8.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model8.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra BC Roadster 3"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car9_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model9.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model9.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model9.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra Lultimo"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car10_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model10.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model10.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model10.Price[0];
     
 }
  
  
}else {
  document.getElementById("car_info_image").src = "";
  document.getElementById("car_info_block_model_speed").innerHTML = "";
  document.getElementById("car_info_block_model_price").innerHTML = "";

  
}







       var orderFormApp = angular.module("car_order_form_app",[]);
orderFormApp.controller("car_order_form_app_controller",function($scope,$http){
    $http({
           method: "GET",
           url: "Bugatti_brand.json"
    }).then(function(response){
           $scope.bugatti1 = response.data.Model_collection.Model1;
           $scope.bugatti2 = response.data.Model_collection.Model2;
           $scope.bugatti3 = response.data.Model_collection.Model3;
           $scope.bugatti4 = response.data.Model_collection.Model4;
           $scope.bugatti5 = response.data.Model_collection.Model5;
           $scope.bugatti6 = response.data.Model_collection.Model6;
           $scope.bugatti7 = response.data.Model_collection.Model7;
           $scope.bugatti8 = response.data.Model_collection.Model8;
           $scope.bugatti9 = response.data.Model_collection.Model9;
           $scope.bugatti10 = response.data.Model_collection.Model10;
    },function(response){
           $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
    });

   $scope.car_price_count = {
          bugatti_car1_price: function(){
           if($scope.car_amount_input_model>1 ){
                        return 3300000*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1 ){
                        return "3300000";
                 }else{
                        return "3300000";
                 }
          },

          bugatti_car2_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4635979*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4635979";
                 }else{
                        return "4635979";
                 }
          },




          bugatti_car3_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4670689*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4670689";
                 }else{
                        return "4670689";
                 }
          },



          bugatti_car4_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4973529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4973529";
                 }else{
                        return "4973529";
                 }
          },



          bugatti_car5_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4373529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4373529";
                 }else{
                        return "4373529";
                 }
          },




          bugatti_car6_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4343529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4343529";
                 }else{
                        return "4343529";
                 }
          },




          bugatti_car7_price: function(){
           if($scope.car_amount_input_model>1){
                        return 3373529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "3373529";
                 }else{
                        return "3373529";
                 }
          },





          bugatti_car8_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4673529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4673529";
                 }else{
                        return "4673529";
                 }
          },




          bugatti_car9_price: function(){
           if($scope.car_amount_input_model>1){
                        return 3973529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "3973529";
                 }else{
                        return "3973529";
                 }
          },




          bugatti_car10_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4582529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4582529";
                 }else{
                        return "4582529";
                 }
          }


         
        
   };






   $http({
    method: "GET",
    url: "Lamborghini_brand.json"
    }).then(function success(response){
           $scope.lamborghini1 = response.data.Model_collection.Model1;
           $scope.lamborghini2 = response.data.Model_collection.Model2;
           $scope.lamborghini3 = response.data.Model_collection.Model3;
           $scope.lamborghini4 = response.data.Model_collection.Model4;
           $scope.lamborghini5 = response.data.Model_collection.Model5;
           $scope.lamborghini6 = response.data.Model_collection.Model6;
           $scope.lamborghini7 = response.data.Model_collection.Model7;
           $scope.lamborghini8 = response.data.Model_collection.Model8;
           $scope.lamborghini9 = response.data.Model_collection.Model9;
           $scope.lamborghini10 = response.data.Model_collection.Model10;
    },function error(response){
           $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
    });







    $scope.car_price_count2 = {
           lamborghini_car1_price: function(){
            if($scope.car_amount_input_model>1 ){
                         return 2500000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1 ){
                         return "2500000";
                  }else{
                         return "2500000";
                  }
           },

           lamborghini_car2_price: function(){
            if($scope.car_amount_input_model>1){
                         return 2640000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "2640000";
                  }else{
                         return "2640000";
                  }
           },




           lamborghini_car3_price: function(){
            if($scope.car_amount_input_model>1){
                         return 8270000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "8270000";
                  }else{
                         return "8270000";
                  }
           },



           lamborghini_car4_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           },



           lamborghini_car5_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },




           lamborghini_car6_price: function(){
            if($scope.car_amount_input_model>1){
                         return 8270000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "8270000";
                  }else{
                         return "8270000";
                  }
           },




           lamborghini_car7_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },





           lamborghini_car8_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           },




           lamborghini_car9_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },




           lamborghini_car10_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           }


          
         
    };









    $http({
       method: "GET",
       url: "Mclaren_brand.json"
       }).then(function success(response){
              $scope.mclaren1 = response.data.Model_collection.Model1;
              $scope.mclaren2 = response.data.Model_collection.Model2;
              $scope.mclaren3 = response.data.Model_collection.Model3;
              $scope.mclaren4 = response.data.Model_collection.Model4;
              $scope.mclaren5 = response.data.Model_collection.Model5;
              $scope.mclaren6 = response.data.Model_collection.Model6;
              $scope.mclaren7 = response.data.Model_collection.Model7;
              $scope.mclaren8 = response.data.Model_collection.Model8;
              $scope.mclaren9 = response.data.Model_collection.Model9;
              $scope.mclaren10 = response.data.Model_collection.Model10;
       },function error(response){
              $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
       });
   
   
   
   
   
   
   
       $scope.car_price_count3 = {
              mclaren_car1_price: function(){
               if($scope.car_amount_input_model>1 ){
                            return 265500*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1 ){
                            return "265500";
                     }else{
                            return "265500";
                     }
              },
              mclaren_car2_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car3_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
              mclaren_car4_price: function(){
               if($scope.car_amount_input_model>1){
                            return 256500*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "256500";
                     }else{
                            return "256500";
                     }
              },
   
   
   
              mclaren_car5_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car6_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car7_price: function(){
               if($scope.car_amount_input_model>1){
                            return 1999990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "1999990";
                     }else{
                            return "1999990";
                     }
              },
   
   
   
   
   
              mclaren_car8_price: function(){
               if($scope.car_amount_input_model>1){
                            return 1699990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "1699990";
                     }else{
                            return "1699990";
                     }
              },
   
   
   
   
              mclaren_car9_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2199990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2199990";
                     }else{
                            return "2199990";
                     }
              },
   
   
   
   
              mclaren_car10_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2399990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2399990";
                     }else{
                            return "2399990";
                     }
              }
   
   
             
            
       };





     




       
       $scope.car_price_count4 = {
              pagani_car1_price: function(){
               if($scope.car_amount_input_model>1 ){
                            return 4253780*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1 ){
                            return "4253780";
                     }else{
                            return "4253780";
                     }
              },
              pagani_car2_price: function(){
               if($scope.car_amount_input_model>1){
                            return 23640000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "23640000";
                     }else{
                            return "23640000";
                     }
              },
   
   
   
   
              pagani_car3_price: function(){
               if($scope.car_amount_input_model>1){
                            return 5570990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "5570990";
                     }else{
                            return "5570990";
                     }
              },
   
   
   
              pagani_car4_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2627838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2627838";
                     }else{
                            return "2627838";
                     }
              },
   
   
   
              pagani_car5_price: function(){
               if($scope.car_amount_input_model>1){
                            return 23517770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "23517770";
                     }else{
                            return "23517770";
                     }
              },
   
   
   
   
              pagani_car6_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3270000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3270000";
                     }else{
                            return "3270000";
                     }
              },
   
   
   
   
              pagani_car7_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3517770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3517770";
                     }else{
                            return "3517770";
                     }
              },
   
   
   
   
   
              pagani_car8_price: function(){
               if($scope.car_amount_input_model>1){
                            return 4227838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "4227838";
                     }else{
                            return "4227838";
                     }
              },
   
   
   
   
              pagani_car9_price: function(){
               if($scope.car_amount_input_model>1){
                            return 4127770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "4127770";
                     }else{
                            return "4127770";
                     }
              },
   
   
   
   
              pagani_car10_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3327838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3327838";
                     }else{
                            return "3327838";
                     }
              }
   
   
             
            
       };







  
});






              </script>
   



</div>

<script src="Pagani_brand.php"></script>  



              </div>

         </div>



         <br><br>



         



        
 

  

         

          </main> 

           
          
         



        
          



     

           
       
       
       </body>





       <footer>

       
       

       </footer>



</html>