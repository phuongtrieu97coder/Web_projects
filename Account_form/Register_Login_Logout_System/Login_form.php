<!DOCTYPE html>
<html lang="en">

       <head>
              <meta charset="UTF-8">

              <meta name="viewport"  content="width=device-width, initial-scale=1.0">





              <style>
 [id='login_form_block']{
    display:none;
    position:fixed;
    top:50px;
    left:350px;
    width:700px;
    z-index:2;
    font-size:20px;
    background-color:black;
    color:white;
    border:5px solid yellow;
    box-shadow:3px 3px 6px 6px aqua,-3px -3px 6px 6px aqua;
 }
                      
                     
[id='close_login_form_butt']{
    position:absolute;
    top:0;right:0;font-size:30px;
    font-weight:bold;
}                        

[id='login_form_overlay']{
     display:none;
     width:100%;height:100%;
     position:fixed;top:0;left:0;right:0;
     bottom:0;z-index:1;
     background-color:rgba(0, 0, 0, 0.637)
}




         
              </style>
       </head>



       <body>
   
    
     

           
            
          <main>
<?php


$login_err_message = $username_err_message = $password_err_message = "";

if(isset($_SESSION['user_loggedin_failed'])){
  $login_err_message = "Sorry, your username or password doesn't match our record!!!";
}
if(isset($_SESSION['username_err_message'])){
  $username_err_message = $_SESSION['username_err_message'];
}
if(isset($_SESSION['password_err_message'])){
  $password_err_message = $_SESSION['password_err_message'];
}


?>

          <div id="login_form_block">
          
          
              <button id="close_login_form_butt" name="close_login_form_butt"
               type="button"  onclick="close_login_form()"
               class="btn w3-text-aqua w3-transparent w3-hover-red
                w3-hover-text-white">
                  X
              </button>

              <div class='w3-center'  
               style="background-image:url('image/car_wallpaper2.jpg');
               margin-bottom:20px;padding:20px 0">

                     <i class="fa fa-user-circle w3-text-yellow" style="font-size:20px"></i> <b style="font-size:20px">LOG-IN</b>

               </div>



               <div id="login_form" 
               style="padding:30px;">

               
               <form id='form1' title="login form"
                action="<?php echo htmlspecialchars('Validate_login.php');?>"
               method="post" target="_self">

                   <b class="text-danger"><?php echo $login_err_message;?></b><br/>

                    <label for="username_input"><b>USERNAME:</b></label>
                     <span class="text-danger"><b><?php echo $username_err_message;?></b></span>   
                    <br>
                    <input id="username_input" name="username_input" type="text"
                    placeholder="Enter your username..." style="width:100%" required>


                    <label for="password_input"><b>PASSWORD:</b></label>
                    <span class="text-danger"><b><?php echo $password_err_message;?></b></span>  
                    <br>

                    <input id="password_input" name="password_input" type="password"
                    placeholder="Enter your password..." style="width:100%" required>


                    

                    <button id="user_login_butt" title="user_login_butt" type="submit"
                    class="btn btn-primary text-white w3-hover-green" 
                    style="width:100%;font-size:20px;font-weight:bold;margin-top:30px;">
                      <i class="fa fa-sign-in"></i> LOG-IN
                    </button>
              </form>
              
              
              

            




              </div>
          </div>


          <div id="login_form_overlay" onclick="close_login_form()"></div>

<script>

</script>

     
     
       </body>



      

     


      

</html>
