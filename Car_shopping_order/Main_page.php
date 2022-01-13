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


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              <link rel="stylesheet"  type="text/css" href="test1.css">




              <style>
   [id="block1"]{
          display:grid;
          grid-template-columns:350px 350px 350px 350px;
   }


   
    
              </style>
       </head>




       <body>

    
        

         <header>
       
      

          </header>


         


   
         
       

           
            
          <main ng-app="app1" ng-controller="app1_controller">

        <div id="block1">


 
          <div class="w3-card-4" style="border:2px solid aqua;width:100%;">
              <img id="img1" class="img1" title="image 1"
              name="img1" src="{{bugatti1.Image_src}}"
              alt="car1" width="100%" height="300px">

              <div class="card1_info_block">
                      <b>Model: </b> <i>{{bugatti1.Name}}</i>
              </div>

              <div class="card1_info_block">
                     <b>Speed: </b> <i>{{bugatti1.Speed}}</i>
              </div>

              <div class="card1_info_block">
                     <b>Price: </b> <i>{{bugatti1.Price[0]}}</i>
              </div>
             

                     <a id="order_butt1" title="order_butt" name="order_butt"
                     type="button" class="btn btn-block btn-success text-white w3-hover-blue"
                     style="font-size:30px;" href="Order_Bugatti1_form.php" target="_blank">
                     <i class="fa fa-shopping-cart"></i> Order</a>

             

                   

          </div>
         
          


          <div class="w3-card-4" style="border:2px solid aqua;width:100%;">

          <img id="img2" class="img2" title="image 2"
              name="img2" src="{{bugatti2.Image_src}}"
              alt="car2" width="100%" height="300px">

              <div class="card2_info_block">
                      <b>Model: </b> <i>{{bugatti2.Name}}</i>
              </div>

              <div class="card2_info_block">
                     <b>Speed: </b> <i>{{bugatti2.Speed}}</i>
              </div>

              <div class="card2_info_block">
                     <b>Price: </b> <i>{{bugatti2.Price[0]}}</i>
              </div>
             

                     <a id="order_butt2" title="order_butt" name="order_butt"
                     type="button" class="btn btn-block btn-success text-white w3-hover-blue"
                     style="font-size:30px;" href="Order_Bugatti2_form.php" target="_blank">
                     <i class="fa fa-shopping-cart"></i> Order</a>

             
          
          </div>







          <div class="w3-card-4" style="border:2px solid aqua;width:100%;">

          <img id="img3" class="img3" title="image 3"
              name="img3" src="{{bugatti3.Image_src}}"
              alt="car3" width="100%" height="300px">

              <div class="card3_info_block">
                      <b>Model: </b> <i>{{bugatti3.Name}}</i>
              </div>

              <div class="card3_info_block">
                     <b>Speed: </b> <i>{{bugatti3.Speed}}</i>
              </div>

              <div class="card2_info_block">
                     <b>Price: </b> <i>{{bugatti3.Price[0]}}</i>
              </div>
             

                     <a id="order_butt3" title="order_butt" name="order_butt"
                     type="button" class="btn btn-block btn-success text-white w3-hover-blue"
                     style="font-size:30px;" href="Order_Bugatti3_form.php" target="_blank">
                     <i class="fa fa-shopping-cart"></i> Order</a>

             
          
          </div>








          <div class="w3-card-4" style="border:2px solid aqua;width:100%;">

          <img id="img4" class="img4" title="image 4"
              name="img4" src="{{bugatti4.Image_src}}"
              alt="car4" width="100%" height="300px">

              <div class="card4_info_block">
                      <b>Model: </b> <i>{{bugatti4.Name}}</i>
              </div>

              <div class="card4_info_block">
                     <b>Speed: </b> <i>{{bugatti4.Speed}}</i>
              </div>

              <div class="card4_info_block">
                     <b>Price: </b> <i>{{bugatti4.Price[0]}}</i>
              </div>
             

                     <a id="order_butt4" title="order_butt" name="order_butt"
                     type="button" class="btn btn-block btn-success text-white w3-hover-blue"
                     style="font-size:30px;" href="Order_Bugatti4_form.php" target="_blank">
                     <i class="fa fa-shopping-cart"></i> Order</a>

             
          
          </div>






       </div>


          <br>
       

       


    


      


          <script>

                 
          $(document).ready(function(){
                 $("[class='card1_info_block'],[class='card2_info_block'],[class='card3_info_block'],[class='card4_info_block']")
                 .css("padding","20px")
                 .css("border-bottom","2px solid green");

              
          });


         


        
          </script>


<script src="test1.js"></script>



          </main>



       
       </body>





       <footer>

       </footer>



</html>