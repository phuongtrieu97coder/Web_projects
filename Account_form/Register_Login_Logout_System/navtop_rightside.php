<!DOCTYPE html>
<html lang="en">

       <head>
              <meta charset="UTF-8">

       </head>



       <body style="background-color:black;" >
      



           
            
          <main>

<?php
if(isset($_SESSION['user_loggedin'])){
       echo "
       <span id='logout_account_block'>
       <a id='logout_butt' name='logout_butt' title='logout_button'
        type='button' class='btn text-white w3-hover-green'
        href='Logout_page.php'>
        <i class='fa fa-sign-out text-danger'></i> LOG-OUT
       </a>";


        echo " <a id='user_account_butt' title='Your account'
         type='button' class='btn text-white w3-hover-green'
         href='".$_SESSION['tgh_car_dealership_username'].".php'"." target='_self' >".

         "<i class='fa fa-user text-info'></i>".$_SESSION['tgh_car_dealership_username']."</a>";

         echo "</span>";
       
}

if(!isset($_SESSION['user_loggedin'])){
       echo "
       <span id='login_signup_block'>
       <a id='login_butt' name='login_butt' title='login_button'
        type='button' class='btn text-white w3-hover-green'
        onclick='open_login_form()' >
        <i class='fa fa-sign-in text-info'></i> LOG-IN</a>

        <a id='signup_butt' name='signup_butt' title='signup_button'
        type='button' class='btn text-white w3-hover-green'
        href='register_page.php' target='_self'>
        <i class='fa fa-user text-warning'></i> SIGN-UP</a>
        </span>
       ";
}

?>
       
                     

                

       <script>
      

       </script>

       
  
     
     
       </body>



      

     


      

</html>
