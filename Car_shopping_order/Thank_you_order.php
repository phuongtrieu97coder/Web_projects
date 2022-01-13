
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>



     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <title>PHUONG WEB</title>

     <link rel="shortcut icon"   href="image/js_logo.png" type="image/x-icon">

      <link rel="stylesheet" type="text/css" href="Sass_Css_file/test2.css">
           
  


         <style>
[id="customer_info_table"]{
  width:500px;
}

[id="customer_info_table"] tr,th,td{
  border:6px solid greenyellow;
  font-size:20px;
  padding:20px;

}

[id="customer_info_table"] th{
  text-align:center;
}

[id="customer_info_table"] td{
  text-align:left;
}

[id="car_info_table"] {
  width:500px;
}


[id="car_info_table"] tr,th,td{
  border:3px solid aqua;
  font-size:20px;
  padding:5px;

}

           
         </style>
    </head>


    <body>

      <header>
      </header>


      <main>
 

      <img src="image/car_wallpaper7.jpg" width="100%" height="100%" 
      style="position:fixed;top:0;left:0;right:0;bottom:0;z-index:1;">
      

      <?php
      $name1 = $address1 = $email1 = $phone_number1 = "";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name1 = check_func($_POST["name1"]);
            $address1 = check_func($_POST["address1"]);
            $email1 = check_func($_POST["email1"]);
            $phone_number1 = check_func($_POST["tel1"]);
      }

      function check_func($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
      ?>

      <div class="w3-black " style="
      width:1000px;border:2px solid aqua;padding:20px;position:fixed;
      left:200px;z-index:2;">
           
            <div class="row" style="border-bottom:4px double aqua;
            box-shadow:0px 0px 6px 6px white;"> 
                <div class="col">
                <img src="image/thank_for_order_logo.png"
                width="300px" height="200px">

               
                </div>

                <div class="col">
                <img src="image/quick_order_logo.png"
                width="300px" height="200px">
                </div>

                <div class="col" style="text-align:center;">
               
                <span >
                <i class="fa fa-shopping-cart w3-text-aqua" style="font-size:40px"></i> 
                <i class="fa fa-calendar-check-o" style="font-size:40px"></i>
                </span>


                <h1 style="color:yellow;">ORDER COMPLETE!!!</h1>

                    <span style="font-size:25px;">
                    <b>Order Date: </b><b id="order_date" ></b><br>
                    <b>Order Time: </b><b id="order_time" ></b>
                    </span>
                </div>

            </div>

            <br>

            <h4 style="text-decoration:underline;text-shadow:3px 3px 5px yellow;
            text-align:center;">
            We are going to deliver your car to your house in 7-10 days
            </h4>
            <br>



            <div class="row">
                  <div class="col">
                       

                        <table id="customer_info_table">
                                <tr>
                                     <th style="color:aqua;">ORDER INFORMATION</th>
                                </tr>

                                <tr>
                                    <td>Customer Name: <?php echo $name1;?> </td>
                                </tr>
                                <tr>
                                    <td>Customer Address: <?php echo $address1;?></td>
                                </tr>
                                <tr>
                                    <td>Customer Email: <?php echo $email1;?></td>
                                </tr>
                                <tr>
                                    <td>Customer Phone Number: <?php echo $phone_number1;?></td>
                                </tr>
                        </table>





                        <table id="car_info_table">
                              

                              <tr>
                                  <td>Car Model: 
                                      <b id="order_car_model">
                                        
                                      </b> 
                                  </td>
                                  <td>Car Price: 
                                       <b id="order_car_price">
                                       
                                      </b> 
                                  </td>
                              </tr>
                             
                             
                      </table>


                     



                  </div>




                  <div class="col">
                         <img id="order_car_image" width="400px" height="300px">
                         
                  </div>
            </div>
          

      </div>


     
                     

              <script>
              document.getElementById("order_date").innerHTML  = new Date().toLocaleDateString();
              document.getElementById("order_time").innerHTML  = new Date().toLocaleTimeString();

              var order_car_model_info = document.getElementById("order_car_model");
              var order_car_price_info = document.getElementById("order_car_price");

              order_car_model_info.innerHTML = localStorage.getItem("car_model");
              order_car_price_info.innerHTML = localStorage.getItem("car_price");


              var car_img_src = {
                Bugatti_chiron_V8: "image/bugatti_chiron2.jpg",
                Bugatti_chiron_V9: "image/bugatti_chiron3.jpg",
                Bugatti_chiron_V12: "image/bugatti7.jpg",
                Bugatti_chiron_V15: "image/bugatti8.jpg",

              }

          
            
              if(order_car_model_info.innerHTML == 'Bugatti Chiron V8'){
                   document.querySelectorAll("#order_car_image")[0].src =
                    car_img_src.Bugatti_chiron_V8;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V9'){
                document.querySelectorAll("#order_car_image")[0].src =
                 car_img_src.Bugatti_chiron_V9;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V12'){
                document.querySelectorAll("#order_car_image")[0].src =
                 car_img_src.Bugatti_chiron_V12;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V15'){
                document.querySelectorAll("#order_car_image")[0].src =
                 car_img_src.Bugatti_chiron_V15;
              }else{
                document.querySelectorAll("#order_car_image")[0].src =
                 "image/bugatti9.jpg";
              }

            
          
          </script>

             

        
         
          
          
   


     </main>

 

   
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








