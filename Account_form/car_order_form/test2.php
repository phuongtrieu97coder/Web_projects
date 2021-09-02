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

      <link rel="stylesheet" type="text/css" href="Sass_Css_file/test2.css">
           
  


         <style>
[id="order_block"]{
    width:600px;
    outline:2px solid blue;
    padding:20px;
}

[id="item_intro_block"]{
    text-align:center;
    font-size:30px;
}

[id="item_intro_block"] i {
  text-decoration:underline;
}

[id="order_code"]{
  color:green;
}

[id="order_code"]::before{
  content: "#";
}

[id="info_table"], tr, th, td{
    border:2px solid blue;
    border-collapse:collapse;
    width:100%;
    font-size:25px;
}

[id="info_table"] th{
  text-align:center;
  color:red;
}

[id="info_table"] th, td{
  padding:20px;
}
          
         </style>
    </head>


    <body>

      <header>
    
      </header>

     <main>



     <div id="order_block">
        <div id="item_intro_block">
          <b>SHOPPING LIST</b><br>
          <i>YOUR ORDER: </i><br>
          <em id="order_code" ></em> <br>
          <br>

          <img id="car_img_item" 
          width="400px" height="300px">
          <br>
          
          <b id="car_name_intro"><?php echo $_POST["car_collection"];?></b>  <b id="car_price_intro"></b>

       </div>

       <br><br>

          <table id="info_table">
              <tr>
                <th>Info</th>
                <th>Details</th>
              </tr>

              <tr>
                  <td>Name:</td>
                  <td><?php echo $_POST["name1"];?></td>
              </tr>
              <tr>
                  <td>Email:</td>
                  <td><?php echo $_POST["email1"];?></td>
              </tr>
              <tr>
                  <td>Phone Number:</td>
                  <td><?php echo $_POST["phone_num1"];?></td>
              </tr>
              <tr>
                  <td>Address:</td>
                  <td><?php echo $_POST["address1"];?></td>
              </tr>
              <tr>
                  <td>Gender:</td>
                  <td><?php echo $_POST["male1"];?></td>
              </tr>
              <tr>
                  <td>Deliver Message:</td>
                  <td><?php echo $_POST["message1"];?></td>
              </tr>
          </table>
      </div>
        
     
        
      </main>
 
   

      <script src="test2.js"></script>
       



     
      
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








