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
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 

              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              


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

       <div id="block1" ng-app="app1" ng-controller="app1_controller">  


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
              onsubmit="storage1()">


            

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
                            
                             maxlength="10"
                            ng-model="tel1_mol" required
                            style="width:100%">
                            

                            <br>



                            


                            <label><b>Gender:</b></label><br>
                            <input id="male_check" name="gender1" type="checkbox" value="male" ng-model="male_mol1">
                            <label for="male_check"><b>Male</b></label>
                            <input id="female_check" name="gender1" type="checkbox" value="female" ng-model="female_mol1">
                            <label for="female_check"><b>Female</b></label>
                            <input id="other_check" name="gender1" type="checkbox" value="other" ng-model="other_mol1">
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



                            <label><b>Card Name:</b></label>
                            <span id="card_name_error_message" class="text-danger"
                            ></span>

                            <input id="card_name_input" title="card_name_input_field"
                            name="card_name_input" type="text" 
                            ng-model="card_name_input_model"
                            placeholder="Enter your card name..."
                            style="width:100%;" required>



                            <label><b>Card Number:</b></label>
                            <span id="card_number_error_message" class="text-info"
                            style="font-size:15px;"><b>EX: 0123-4567-8910-1112</b></span>

                            <input id="card_number_input" title="card_number_input_field"
                            name="card_number_input" type="text" 
                            ng-model="card_number_input_model"
                           
                            placeholder="Enter your card number..."
                            style="width:100%;" required>


                            <i class="fa fa-credit-card" style="position:absolute;
                            top:200px;right:15px;color:black;font-size:32px;"></i>



                            <div class="row">
                                   <div class="col-6">
                                                 <label><b>Exp Date:</b></label>
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

                                          <script>
                                                 $(document).ready(function(){
                                                        $("[data-toggle='popover']").popover();
                                                 })
                                          </script>




                                                        <br><br>


                                                 <label for="car_amount_input"><b>Amount:</b></label>
                                                 <input id="car_amount_input" type="number" name="car_amount_input"
                                                 ng-model="car_amount_input_model" style="width:40px;font-size:14px;"
                                                 placeholder="01" required>





                                         

                                   </div>


                                   <div class="col-sml-4" style="margin-left:10px;">
                                           <div style="padding-left:45px;">
                                                 <label><b>CV Code:</b></label>
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

                                          <div>
                                                 <span style="padding:10px;background-color:blue;
                                                 color:white;">Total:</span>

                                                 <span id="total_price_value_block"
                                                  style="background-color:white;color:green;;padding:10px;
                                                  margin-left:-5px;">
                                                  <b>$</b><b>{{car3_price_count()}}</b>
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
              <img id="img1" class="img1" title="image 1"
              name="img1" src="{{bugatti3.Image_src}}"
              alt="car1" width="100%" height="300px">

              <div class="card_info_block">
                      <b>Model: </b> <i>{{bugatti3.Name}}</i>
              </div>

              <div class="card_info_block">
                     <b>Speed: </b> <i>{{bugatti3.Speed}}</i>
              </div>

              <div class="card_info_block">
                     <b>Price: </b> <i>{{bugatti3.Price[0]}}</i>
              </div>
             

                     

              <script>
          $(document).ready(function(){
                 $("[class='card_info_block']")
                 .css("padding","20px")
                 .css("border-bottom","2px solid green")
          });


          function storage1(){
                if(typeof(Storage) !== "undefined"){
                     localStorage.setItem("car_model","Bugatti Chiron V12");
                     localStorage.setItem("car_price","$4,670,689");

                }

               

                
          }





        
       

        
          </script>

             
<script src="test1.js"></script>

          </div>
                   



              </div>

         </div>



         <br><br>



         



         <script>
               
                    
                
                  
         </script>
 

  

         

          </main> 

           
          
          </main>



        
          



     

           
       
       
       </body>





       <footer>

       
       

       </footer>



</html>