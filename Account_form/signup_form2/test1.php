<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
   
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
   
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     

           
  


         <style>
             [id="block1"]{
                 display:grid;
                 grid-template-columns:auto auto;
             }
             [id="form1"]{
                 font-size:20px;
                 width:700px;
             }

             [id="form1_intro_block"]{
                 padding:40px;
                 text-align:center;
                 font-size:40px;
             }

           [id="name_input"],[id="age_input"],
           [id="email_input"],[id="password_input"]{
               width:100%;
               padding:20px;
               font-size:20px;
           }

           [id="name_input"]:focus,[id="age_input"]:focus,
           [id="email_input"]:focus,[id="password_input"]:focus{
               background-color:aqua;
               color:white;
           }

           [id="submit_button"]{
               font-size:30px;
               padding:20px;
               
           }
         </style>
    </head>


    <body >

    <header>
          
    </header>
    
    <div id="main_content">
               
    
    <div id="block1">



             <form id="form1" action="test2.php" method="post" target="iframe1"
              title="account form1" style="padding:20px;border:2px solid blue">

                 <div id="form1_intro_block">
                      <p><i class="fa fa-user"></i> SIGN UP</p>
                 </div>
                   
                    <label for="name_input"><b>NAME :</b></label><br>
                    <input type="text" id="name_input" name="name1" placeholder="Enter your name..."><br>



                    <label for="age_input"><b>Age :</b></label><br>
                    <input type="number" id="age_input" name="age1" placeholder="Enter your age..."><br>



                    <label for="email_input"><b>EMAIL :</b></label><br>
                    <input type="email" id="email_input" name="email1" placeholder="Enter your email..."><br>




                    <label for="password_input"><b>PASSWORD :</b></label>
                    <input type="password" id="password_input" name="password1" placeholder="Enter your password..."><br>



                    <input type="radio" id="male_checkradio" name="radio1" value="male">

                    <label for="male_checkradio"> MALE</label>



                    <input type="checkbox" id="female_checkbox" name="checkbox1" value="female">

                    <label for="female_checkbox"> FEMALE</label>


                    <br><br>

                    <input class="w3-button w3-ripple w3-blue w3-hover-aqua" id="submit_butt" type="submit" >
                   
             </form>


             <iframe id="iframe_block" src="test2.php" 
             width="650px" height="300px" name="iframe1" title="company_card"></iframe>




    </div>


    <script>
       
    </script>







    <div id="block2"></div>
   
      <script>
      
 
    
        </script>

        



    
          
      
     
            
     





    </div>

      
    </body>


   


    <footer>

    </footer>




</html>
        