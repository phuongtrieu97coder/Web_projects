<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

       <head>
              <meta charset="UTF-8">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">



              <style>

[id="navtop"]{
       position:fixed;
       top:0;
       z-index:1;
}

[id="navtop_rightside"]{
       position:absolute;
       right:0;
}



         
              </style>
       </head>



       <body style="background-color:black;" >


                    <div id="navtop_rightside" class="nav">

                    
                  <?php require('navtop_rightside.php');?>




                    </div>



       
          </nav>
       




          </header>



           
            
          <main>
 
         <div id='login_form_container'>

                <?php require('Login_form.php');?>

         </div>



          <script>
              
 var get_login_form_overlay = document.getElementById("login_form_overlay"),
        get_login_form = document.getElementById("login_form_container");

;

 
 function open_login_form(){
    get_login_form.style.display = "block";
    get_login_form_overlay.style.display = "block";
}
function close_login_form(){
    get_login_form.style.display = "none";
    get_login_form_overlay.style.display = "none";
}


          </script>



       

       
  
     
     
       </body>



      

     


      

</html>
