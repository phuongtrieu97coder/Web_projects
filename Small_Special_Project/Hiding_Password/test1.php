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
  


   
    
              </style>
       </head>




       <body>


       <form id="form1" title="form1" name="form1"
       action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
       method="post" target="_self" enctype="multipart/form-data"
       style="border:5px double green;padding:20px;width:600px;font-size:30px;">

               <label for="password_input"><b>Enter your password:</b></label>

               <input id="password_input" title="password input"
               name="pass1" type="password" placeholder="Enter your password"
                style="width:100%;">


                <div>
                       <b>Your password is: <i id="password_result"></i></b>

                </div>

                <button id="submit_input" title="submit input"
               name="submit1" type="submit" class="btn btn-block btn-primary text-white w3-hover-green"
               onclick="save_pass_func()"><i class="fa fa-check-circle"></i> SUBMIT</button>

                <button id="delete_input" title="delete input"
               name="delete1" type="button" class="btn btn-block btn-danger w3-text-white
                w3-hover-orange w3-hover-text-white"
               onclick="remove_pass_func()"><i class="fa fa-trash"></i> DELETE PASSWORD</button>

       </form>
      


       <script>

      function save_pass_func(){
       var get_pass = document.getElementById("password_input").value;
      var get_pass_length_except_last_two = get_pass.length-2;
      var special_symbol = "*";
      var special_password = special_symbol.repeat(get_pass_length_except_last_two)+
             get_pass.substring(get_pass_length_except_last_two,get_pass.length);

             localStorage.setItem("pass1",special_password);
      }
      document.querySelectorAll("#password_result")[0].innerHTML = localStorage.getItem("pass1");


      function remove_pass_func(){
             localStorage.removeItem("pass1");
      }
       </script>
        

         <header>
       
      

          </header>


         
     <main>

    
   
    <script>
     

    </script>






          </main>



       
       </body>





       <footer>

       </footer>



</html>