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
   
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
          
        





        <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


        <title>PHUONG WEBSITE</title>



        <link rel="stylesheet"  type="text/css" href="test1.css">


        <style>
                 [id="order_block"]{
                     border:2px solid green;
                     padding:20px;
                     text-align:center;
                     position:relative;
                     top:0;
                     
              }

              [id="refresh_butt"]{
                     position:absolute;
                     top:20px;
                     left:20px;
                     font-size:30px;
                     border:2px solid blue;
              }



              [id="intro_car_order"]{
                     font-size:40px;
                     color:rgb(34, 133, 116);
              }

              [id="car_list_block"]{
                     display:grid;
                     grid-template-columns:310px 310px 310px;
                     grid-template-rows:280px;
              }

              [id="car_list_block_1"] ,
              [id="car_list_block_2"],
              [id="car_list_block_3"]
              {
                 background-color:darkcyan;
                 position:relative;
              }

              [id="car_list_block_1"]{
                     margin-right:10px;
              }
              [id="car_list_block_2"]{
                     margin-right:10px;
              }

              [id="car1"],[id="car2"],[id="car3"]{
                     position:relative;
                     z-index:1;
              }

              [id="car_image_word1"],[id="car_image_word2"],[id="car_image_word3"]{
                     font-size:50px;
                     color:white;
                     position:absolute;
                     top:100px;
                     left:20px;
                     z-index:0;

              }



              [id="sort_car_block"]{
                     display:grid;
                     grid-template-columns:310px 310px 310px;
              }

              [id="sort_car_block1"],[id="sort_car_block2"],[id="sort_car_block3"]{
                     border:2px solid blue;
                     height:320px;
                     
              }

              [id="sort_car_block1"]{
                     margin-right:10px;
              }
              [id="sort_car_block2"]{
                     margin-right:10px;
              }

              [id="sort_car_block1_number1_img_block"],
              [id="sort_car_block1_number2_img_block"],
              [id="sort_car_block1_number3_img_block"]{
                     background:url("image/car/car_icon.png");
                     height:280px;
                     
              }

              [id="sort_car_block1_number1_order_block"],
              [id="sort_car_block1_number2_order_block"],
              [id="sort_car_block1_number3_order_block"]{
                     width:100%;
                     font-size:30px;
                     background-color:black;
                     color:white;
              }
        </style>
 </head>




 <body>
        <header>
               
        </header>


        <main>
             
     
          <form id="order_block" class="w3-content"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
          title="order_block_form"
           method="post"
           target="_self"
           enctype="multipart/form-data"
          >


          <?php
          $car1 =$car2 = $car3 = "";
          if($_SERVER["REQUEST_METHOD"] == "POST"){
               $car1 = check_func($_POST["car1"]);
               $car2 = check_func($_POST["car2"]);
               $car3 = check_func($_POST["car3"]);
          }

          function check_func($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          
          
          ?>
         

          

              <button class="w3-button w3-ripple w3-black w3-text-yellow w3-hover-aqua w3-hover-text-white" id="refresh_butt"
              type="button" title="refresh the page" onclick="document.location='test1.php'"><i class="fa fa-refresh"></i> REFRESH</button>

              <b id="intro_car_order">CAR ORDER NUMBER LIST</b><br><br>


              <div id="car_list_block">

                     <div id="car_list_block_1">
                            <b id="car_image_word1">CAR IMAGE</b>

                           
                                   <img id="car1" src="image/car/2020_Pagani_Huayra_Roadster_BC.jpg" alt="pagani"
                                   ondragstart="drag_func(event)"  draggable="true" width="100%" height="100%">
              
                           
                           
                     </div>


                     <div id="car_list_block_2">
                            <b id="car_image_word2">CAR IMAGE</b>


                            <img id="car2" src="image/car/bugatti_chiron_pur_sport.jpg" alt="bugatti_chiron"
                            ondragstart="drag_func(event)"  draggable="true" width="100%" height="100%">
       
                     </div>
                    
                   
                     <div id="car_list_block_3" >
                            <b id="car_image_word3">CAR IMAGE</b>


                            <img id="car2" src="image/car/lamborghini_veneno.jpg" alt="lamborghini_veneno"
                            ondragstart="drag_func(event)"  draggable="true" width="100%" height="100%">
                     </div>
                  
              </div>

              <br>
              <b>PLEASE DRAG AND DROP THE CAR OF THIS LIST TO EVERY BLOCK BELOW IN ORDER NUMBER</b><br><br>

              <div id="sort_car_block">
                     <div  class="w3-display-container" id="sort_car_block1">

                            <div id="sort_car_block1_number1_img_block"
                             ondrop="drop_func(event)" ondragover="allowDrop_func(event)" name="car1"></div>

                            <div class="w3-display-bottommiddle" id="sort_car_block1_number1_order_block">
                                   <b>Number 1</b>
                            </div>
                     </div>

                     <div class="w3-display-container" id="sort_car_block2">

                            <div id="sort_car_block1_number2_img_block"
                            ondrop="drop_func(event)" ondragover="allowDrop_func(event)" name="car2"></div>

                            <div class="w3-display-bottommiddle" id="sort_car_block1_number2_order_block">
                                   <b>Number 2</b>
                            </div>
                     </div>


                     <div class="w3-display-container" id="sort_car_block3">

                            <div id="sort_car_block1_number3_img_block"
                            ondrop="drop_func(event)" ondragover="allowDrop_func(event)" name="car3"></div>

                            <div class="w3-display-bottommiddle" id="sort_car_block1_number3_order_block">
                                   <b>Number 3</b>
                            </div>
                     </div>

                     
              </div>

              <br><br>

              <button class="w3-button w3-xxlarge w3-block w3-ripple w3-red w3-text-white w3-hover-blue"
               type="submit" id="submit_butt" name="submit_butt">SUBMIT</button>

              <br>
          </form>
           

         <script>
              function drag_func(ev){
                     ev.dataTransfer.setData("text",ev.target.id);
              }
              function allowDrop_func(ev){
                     ev.preventDefault();
              }
              function drop_func(ev){
                     ev.preventDefault();
                     var data = ev.dataTransfer.getData("text");
                     ev.target.appendChild(document.getElementById(data));
              }

              function allowDrop_func2(ev){
                     ev.preventDefault();
              }
              function drop_func2(ev){
                     ev.preventDefault();
                     var data = ev.dataTransfer.getData("text");
                     ev.target.appendChild(document.getElementById(data));
              }
         </script>





     


        </main>

        

 </body>





 <footer>

   
 

</footer>


</html>
