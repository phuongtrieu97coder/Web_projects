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
          table ,tr ,th, td{
            border:2px solid red;
            width:100%;
            padding:20px;
            text-align:center;
            
          }


          
           
         </style>
    </head>


    <body>

      <header>
    
      </header>

     <main>

     

     <table>

        <tr>
           <th>Avatar:</th>
           <td>
             <?php
             if(isset($_POST["upload1"])){
               $filepath = "image/".$_FILES["file"]["name"];
               if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath)){
                  echo "<img src=".$filepath." height='200px' width='300px'>";
               }else{
                 echo "Error!!!";
               }
             }
             ?>
           </td>
        </tr>

        <tr>
            <th>Name:</th>
            <td><?php echo $_POST["name1"]?></td>
        </tr>


        <tr>
           <th>Password:</th>
            <td><?php echo $_POST["password1"]?></td>
        </tr>



        <tr>
            <th>Email:</th>
            <td><?php echo $_POST["email1"]?></td>
        </tr>



        <tr>
           <th>Address:</th>
            <td><?php echo $_POST["address1"]?></td>
        </tr>



        <tr>
           <th>Phone Number:</th>
            <td><?php echo $_POST["telephone1"]?></td>
        </tr>



        <tr>
           <th>Age:</th>
            <td><?php echo $_POST["age1"]?></td>
        </tr>



        <tr>
           <th>Date Of Birth:</th>
            <td><?php echo $_POST["dob1"]?></td>
        </tr>


        <tr>
           <th>Gender:</th>
            <td>
              <?php
               if(isset($_POST["male1"]) && $_POST["male1"] == "male"){
                 echo "male";
               }else if (isset($_POST["female1"]) && $_POST["female1"] == "female"){
                 echo "female";
               }else{
                 echo "unknown";
               }
            ?></td>
        </tr>



        <tr>
           <th>Service Selection:</th>
            <td><?php echo $_POST["service_sel1"]?></td>
        </tr>



        <tr>
           <th>Register's Reason:</th>
            <td><?php echo $_POST["reason_comment1"]?></td>
        </tr>
                   
                      

                
            </table>
        
     
        
      </main>
 
   

     
       



     
      
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








