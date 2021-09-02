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
     


     <link rel="stylesheet" type='text/css' href="test1.css">
           
  


         <style>
       
         </style>
    </head>


    <body >

    <header>
          
    </header>
    
   
        

    <main>

    
   
  
      
    <form id="form1" action="test2.php" method="post" title="form1" target="_blank">
        
        
           <div id="form1_item_intro_block">
               <b>SHOPPING LIST</b><br>
               <i>YOUR ORDER: </i><br>
               <em id="order_code"></em> <br>

               <img id="car_img_item" 
               width="400px" height="300px">
               <br>
               
               <b id="car_name_intro"></b>  <b id="car_price_intro"></b>

           </div>



           <label for="name_input"><b>Name:</b></label><br>
           <input id="name_input" type="text" name="name1" placeholder="Enter name..."><br>


           <label for="email_input"><b>Email:</b></label><br>
           <input id="email_input" type="email" name="email1" placeholder="Enter email..."><br>

           <label for="phone_input"><b>Phone Number:</b></label><br>
           <input id="phone_input" type="tel" name="phone_num1" placeholder="Enter phone number..."><br>

           <label for="address_input"><b>Address:</b></label><br>
           <input id="address_input" type="text" name="address1" placeholder="Enter address..."><br>

           <br>
           <label><b>Gender:</b></label>

           <input type="radio" id="radio_check" name="male1" value="male">
           <label for="radio_check">Male</label>
           <input type="radio" id="radio_check2" name="female1" value="female">
           <label for="radio_check2">Female</label><br>

           <br>

           <label for="car_selection"><b>CAR SELECTION</b></label><br>
           <select id="car_selection" name="car_collection">
             <option value="McLaren Speedtail">McLaren Speedtail</option>
             <option value="Ferrari Laferrari Perta">Ferrari LaFerrari Aperta</option>
             <option value="Bugatti Chiron Pur Sport" >Bugatti Chiron Pur Sport</option>
             <option value="Pagani Huayra Bc Roadster" >Pagani Huayra BC Roadster</option>
             <option value="Lamborghini Sian" >Lamborghini Sian</option>
             <option value="Lamborghini Veneno" >Lamborghini Veneno</option>
             <option value="Bugatti La Voiture Noire" >Bugatti La Voiture Noire</option>
           </select>

           <br>
           <br>

           <label for="deliver_message"><b>Deliver Message:</b></label><br>
           <textarea id="deliver_message" name="message1"></textarea>

           <br>
           <br>
           


           <input id="order_submit_butt" type="submit" value="ORDER"><br>


           <br><br><br>

       

      </form>



      <script src="test1.js"></script>
 
   
       






    </main>

 

   
      
    </body>


   


    <footer>

    </footer>




</html>
        
