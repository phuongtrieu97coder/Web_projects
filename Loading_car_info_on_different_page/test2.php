
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


     <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <title>PHUONG WEB</title>

     <link rel="shortcut icon"   href="image/js_logo.png" type="image/x-icon">

        
  


         <style>

        


         </style>
    </head>


    <body>

      <header>
      </header>


      <main>
   
    
                  
      <div class="row">
                <div class="col-4 order_block" ng-repeat="item1 in data1.car_list1" 
                  style="border:5px double blue;padding:40px;width:600px">     
                               
                               <img ng-src="{{item1.image}}" width="100%" height="400px">
                               <div style="border:5px double green;font-size:30px">
                                   <b>{{item1.title}}</b>
                               </div>
                  </div>
      </div>

              
                  
           

    



            <script>
                
            </script>


      <script>




      </script>
    
     </main>

 

   
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








