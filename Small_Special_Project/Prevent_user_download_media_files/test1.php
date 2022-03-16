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
         <img id="img1" width="500px" height="450px">
    </div>
   

    <script type="module">
           import img_src from "./test2.js";

          document.getElementById("img1").src = img_src;
    </script>


<script>

    var jq = $.noConflict();
    jq(document).ready(function($){
        $("#img1").mousedown(function(event){
               if(event.button == 2){
                     $(this).contextmenu(function(event){
                            event.preventDefault();
                     })
               }
        })
    });

</script>
       
       <!--

Normally when you add any media file into your website, you or user can download or save it into local computer or smart technology by right click on an image or video on your webpage to open a context menu and then click save as
Javascript and Jquery event can help you to block this feature
Now if you right click on this picture, the context menu is not going to appear because you used JQuery to prevent the default function of the context menu.

The mousedown event will trigger a task when user click the mouse on an element. The event.button will return number 0,1, or 2 represent left mouse, scroll button or right mouse that user clicked


-->

   
          </main>



       
       </body>





       <footer>

       </footer>



</html>
