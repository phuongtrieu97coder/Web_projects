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




              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



             <link rel="stylesheet" type="text/css" href="test1.css">





              <style>
       [id="block1_2_payment_method_table"]{
                            width:600px;
                     }
  [id="block1_2_payment_method_table"] td{
         border:2px solid blue;
  }
        
    
              </style>
       </head>




       <body>
       

       
     
            
   

         <header>
       
      

          </header>


         
     <main>

    <div id="block1">
           <input id="phone_number_input" title="phone_number_input" name="phone_number_input"
           type="tel" maxlength="14" placeholder="EX:(619)-147-6823" style="width:500px;font-size:45px" >
    </div>
   

    <script>
           var jq=$.noConflict();
           jq(document).ready(function($){
              $("#phone_number_input").on("keyup",function(event){
                                                               
                      if($(this).val().length>2 && $(this).val().length<4){
                            $(this).val("("+$(this).val()+")-");
                     }
                     if($(this).val().length>8 && $(this).val().length<10){
                            $(this).val($(this).val()+"-");
                     }
                                                               
                     if($(this).val().length=14){
                            $(this).val($(this).val().slice(0,14));
                     }
                                                 
              });
           })
    </script>


<!--
In this example, we use jQuery to help user automately fill out phone number in the right pattern
When you input the first 3 number, this input field will automatically add symbols “   (   “ before your number and  symbol “    )-   “ after your number
When you add up the next 3 number, symbol “     -    “  will add after your number


-->
   
          </main>



       
       </body>





       <footer>

       </footer>



</html>
