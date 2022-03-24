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
     
     <title>PHUONG WEB</title>

     <link rel="shortcut icon"   href="image/js_logo.png" type="image/x-icon">

     <link rel="stylesheet" type="text/css"  href="test2.css">
           
  


         <style>

          
         </style>
    </head>


    <body>

      <header>
    
      </header>

     <main>


       <div id="block1">
            <div id="block1_1">
                 <div id="block1_1_1" class="w3-display-container">
                     <img src="company1.jpg" alt="company1" 
                     title="company1" width="250px" height="150px">

                     <p id="company_intro" class="w3-display-middle"><i class="fa fa-building"></i> PHUONG A.I COMPANY</p>
                     
                 </div>



                 <div id="block1_1_2">
                     <b id="user_card_icon"><i class="fa fa-address-card"></i></b><br>
                     <p>ID: <i id="employee_id"></i></p>
                     <b><?php echo $_POST["name1"];?></b>
                 </div>
            </div>

            <br><br>



            <div id="block1_2">
                <div id="block1_2_1">
                     <p id="email_intro">Email: <?php echo $_POST["email1"];?></p>
                     <p id="age_gender_intro">Age: <?php echo $_POST["age1"];?> , Gender: <?php echo $_POST["radio1"]?></p>
                </div>




                <div id="block1_2_2">
                    <b id="card_id">5964-2583-1468-<span id="card_id_last_num"></span></b><br>
                    <i id="expiration_date">Exp: 09/2024</i>
                </div>




                <div id="block1_2_3">
                     <b id="card_icon"><i class="fa fa-credit-card"></i></b>
                </div>
            </div>
       </div>


       <script>
            var info = {
                id_info: 14836478210,
                card_id_info : 723
            }

            
            Object.defineProperty(info,"sum",{ 

            set : function (val) {this.id_info+=val;} 

            }) 

            info.sum = 1;


            Object.defineProperty(info,"sum2",{ 

            set : function (val2) {this.card_id_info+=val2;} 

            }) 

            info.sum2 = 1;


            var text= "";
               

                  
              
                   text += info.id_info;
                    
                    document.getElementById("employee_id").innerHTML = text;
               


                var text2 ="";


               text2 += info.card_id_info ;
                    document.getElementById("card_id_last_num").innerHTML = text2;
              


        
       </script>
        
      </main>
 
   
       



     
      
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








