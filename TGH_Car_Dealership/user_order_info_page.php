<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TEMPLATE FASHION BLOG">


              <meta name="autdor"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              

              <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>


              <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>

              <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

              <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>




                <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">


                <title>TGH WEBSITE</title>





              <style>

  body{
    background-color:rgba(255, 255, 255, 0);
  }              
     [id="customer_info_table"] , [class*="customer_info_table"]{
  width:500px;
}

[id="customer_info_table"] tr,[id="customer_info_table"] th,[id="customer_info_table"] td{
  border:6px solid greenyellow;
  font-size:20px;
  padding:20px;

}
[class*="customer_info_table"] tr,[class*="customer_info_table"] th,[class*="customer_info_table"] td{
  border:6px solid greenyellow;
  font-size:20px;
  padding:20px;

}

[id="customer_info_table"] th, [class*="customer_info_table"] th{
  text-align:center;
}

[id="customer_info_table"] td, [class="customer_info_table"] td{
  text-align:left;
}

[id="car_info_table"], [class*="car_info_table"] {
  width:500px;
}


[id="car_info_table"] tr,[id="car_info_table"] th,[id="car_info_table"] td{
  border:3px solid aqua;
  font-size:20px;
  padding:5px;

}
    
[class*="car_info_table"] tr,[class*="car_info_table"] th,[class*="car_info_table"] td{
  border:3px solid aqua;
  font-size:20px;
  padding:5px;

}
    
              </style>
       </head>




       <body>
       

       
     
            
   

         <header>
       
      

          </header>


         
     <main id="main_content_block">

  
     <?php
     /*
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


      <?php echo $name1;?>

      <?php echo $address1;?>
<?php echo $email1;?>
<?php echo $phone_number1;?>

     */
    
      
      ?>


<div id="user_order_info_page_block1" class="w3-black " style="
      width:100%;border:2px solid aqua;padding:20px;">
           
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
                                    <td>Customer Name: <b id="customer_ordered_name"></b> </td>
                                </tr>
                                <tr>
                                    <td>Customer Address: <b id="customer_ordered_address"></b></td>
                                </tr>
                                <tr>
                                    <td>Customer Email: <b id="customer_ordered_email"></b></td>
                                </tr>
                                <tr>
                                    <td>Customer Phone Number: <b id="customer_ordered_phonenumber"></b></td>
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




<br><br><br>



     
<div class="user_order_info_page_block w3-black " style="
      width:100%;border:2px solid aqua;padding:20px;margin-bottom:100px;" 
      ng-repeat="user_order_info_page_block_data_storage_server in userordereddata1.user_id_4293_ordered_data">
       
      
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
                    <b>Order Date: </b><b class="order_date" >
                      {{user_order_info_page_block_data_storage_server.order_date}}</b><br>

                    <b>Order Time: </b><b class="order_time" >
                      {{user_order_info_page_block_data_storage_server.order_time}}</b>
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
                       

                        <table class="customer_info_table">
                                <tr>
                                     <th style="color:aqua;">ORDER INFORMATION</th>
                                </tr>

                                <tr>
                                    <td>Customer Name: 
                                      <b class="customer_ordered_name"></b>
                                     </td>
                                </tr>
                                <tr>
                                    <td>Customer Address: 
                                      <b class="customer_ordered_address"></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Customer Email: 
                                      <b class="customer_ordered_email"></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Customer Phone Number: 
                                      <b class="customer_ordered_phonenumber"></b>
                                    </td>
                                </tr>
                        </table>





                        <table class="car_info_table">
                              

                              <tr>
                                  <td>Car Model: 
                                      <b class="order_car_model">
                                      {{user_order_info_page_block_data_storage_server.car_model}}
                                      </b> 
                                  </td>
                                  <td>Car Price: 
                                       <b class="order_car_price">
                                       {{user_order_info_page_block_data_storage_server.total_price}}
                                      </b> 
                                  </td>
                              </tr>
                             
                             
                      </table>


                     



                  </div>




                  <div class="col">
                         <img class="order_car_image" 
                         ng-src=" {{user_order_info_page_block_data_storage_server.car_image}}" 
                         width="400px" height="300px">
                         
                  </div>
            </div>
          
         
         

      </div>


     
                     

     
        




</main>

<script>


document.getElementById("order_date").innerHTML  = localStorage.getItem("car_order_date");
document.getElementById("order_time").innerHTML  = localStorage.getItem("car_order_time");

var order_car_model_info = document.getElementById("order_car_model");
var order_car_price_info = document.getElementById("order_car_price");

order_car_model_info.innerHTML = localStorage.getItem("car_model");
order_car_price_info.innerHTML = localStorage.getItem("car_price");


document.getElementById("order_car_image").src = localStorage.getItem("car_order_image");
document.getElementById("customer_ordered_name").innerHTML = localStorage.getItem("User_name");
document.getElementById("customer_ordered_address").innerHTML = localStorage.getItem("User_full_address");
document.getElementById("customer_ordered_email").innerHTML = localStorage.getItem("User_email");
document.getElementById("customer_ordered_phonenumber").innerHTML = localStorage.getItem("User_phonenumber");

var get_customer_ordered_name_element_promise = new Promise((resolve,reject)=>{

  var get_customer_ordered_name_element_class_name = document.getElementsByClassName("customer_ordered_name");
  for(let i_c_o_n_e_c_n = 0;i_c_o_n_e_c_n<get_customer_ordered_name_element_class_name.length;i_c_o_n_e_c_n++){
    resolve(get_customer_ordered_name_element_class_name[i_c_o_n_e_c_n].innerHTML=localStorage.getItem("User_name"));
  }
  reject("Get customer ordered name element promise occured an error!!!");
});

var get_customer_ordered_address_element_class_name_promise = new Promise((resolve,reject)=>{

  var get_customer_ordered_address_element_class_name = document.getElementsByClassName("customer_ordered_address");
  for(let i_c_o_a_e_c_n = 0;i_c_o_a_e_c_n<get_customer_ordered_address_element_class_name.length;i_c_o_a_e_c_n++){
    resolve(get_customer_ordered_address_element_class_name[i_c_o_a_e_c_n].innerHTML=localStorage.getItem("User_full_address"));
  }
  reject("Get customer ordered address element class name promise occured an error!!!");
});


var get_customer_ordered_email_element_class_name_promise = new Promise((resolve,reject)=>{

  var get_customer_ordered_email_element_class_name = document.getElementsByClassName("customer_ordered_email");
  for(let i_c_o_e_e_c_n = 0;i_c_o_e_e_c_n<get_customer_ordered_email_element_class_name.length;i_c_o_e_e_c_n++){
    resolve(get_customer_ordered_email_element_class_name[i_c_o_e_e_c_n].innerHTML=localStorage.getItem("User_email"));
  }
  reject("Get customer ordered email element class name promise occured an error!!!");
});


var get_customer_ordered_phonenumber_element_class_name_promise = new Promise((resolve,reject)=>{
  
  var get_customer_ordered_phonenumber_element_class_name = document.getElementsByClassName("customer_ordered_phonenumber");
  for(let i_c_o_p_e_c_n = 0;i_c_o_p_e_c_n<get_customer_ordered_phonenumber_element_class_name.length;i_c_o_p_e_c_n++){
    resolve(get_customer_ordered_phonenumber_element_class_name[i_c_o_p_e_c_n].innerHTML=localStorage.getItem("User_phonenumber"));
  }
  reject("Get customer ordered phonenumber element class name promise occured an error!!!");
});


Promise.all([
  get_customer_ordered_name_element_promise,
  get_customer_ordered_address_element_class_name_promise,
  get_customer_ordered_email_element_class_name_promise,
  get_customer_ordered_phonenumber_element_class_name_promise
]).then(
  (val)=>{
    val[0];
    val[1];
    val[2];
    val[3];
  }
).catch(
  (err)=>{
    console.log(err[0]);
    console.log(err[1]);
    console.log(err[2]);
    console.log(err[3]);
  }
)
       
     

          
</script>


       </body>





       <footer>

       </footer>



</html>