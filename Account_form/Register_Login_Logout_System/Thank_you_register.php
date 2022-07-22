<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">


            <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
            SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


            <meta name="description"   content="THIS IS TGH CAR DEALERSHIP WEBSITE">


            <meta name="author"   content="PHUONG.TRIEU">



            <meta name="viewport"  content="width=device-width, initial-scale=1.0">




            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


                                    
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 

            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>


            <script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            

            <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>

            <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

            <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>





            <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">

                        


            <title>TGH WEBSITE</title>




    </head>




    <body style="background:url('image/car_wallpaper6.png') fixed center no-repeat;background-size:100% 100%;">

    
<?php

/*These syntaxes help upload customer information into MySQL database after customer registered account
successfully!!!
*/


$account_already_exist_message = "";
$account_register_successfully_message = "";



$web_host = 'localhost';
$admin = 'youradmin';
$admin_database_pass ='yourdatabase_password';
$database_name = 'yourdatabase_name';



 function check_func($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}






try{
    $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;


    $conn = new PDO($access_database_info,$admin,$admin_database_pass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $query1 = "SELECT Customer_Username FROM customers WHERE Customer_Username = :seek_username";
          
    $stmt = $conn->prepare($query1);
   
    $stmt->bindParam(':seek_username',$seek_username);



    $conn2 = new PDO($access_database_info,$admin,$admin_database_pass);
    $conn2 -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query2 = 'INSERT INTO customers (Customer_Name,Customer_Username,Customer_Email,Customer_Password,Customer_Phone_Number,Customer_Gender)
    VALUES (:Customer_Name,:Customer_Username,:Customer_Email,:Customer_Password,:Customer_Phone_Number,:Customer_Gender)';
    

    $stmt2 = $conn2->prepare($query2);
    
    $stmt2->bindParam(':Customer_Name',$user_input_fullname);
    $stmt2->bindParam(':Customer_Username',$user_input_username);
    $stmt2->bindParam(':Customer_Email',$user_input_email);
    $stmt2->bindParam(':Customer_Password',$user_input_password);
    $stmt2->bindParam(':Customer_Phone_Number',$user_input_phonenumber);
    $stmt2->bindParam(':Customer_Gender',$user_input_gender);
    
    $user_input_fullname = check_func($_POST["lastname1"]).', '.check_func($_POST["firstname1"]);
    $user_input_username = check_func($_POST["username1"]);
    $user_input_email = check_func($_POST["email1"]);
    $user_input_password = check_func($_POST["password1"]);
    $user_input_phonenumber = check_func($_POST["phonenumber1"]);
    $user_input_gender = check_func($_POST['gender1']);

   
    $seek_username = check_func($_POST['username1']);
   
  
    $stmt ->execute();
   
    $select_result = $stmt->fetch();
    $row = $stmt->rowCount();
   
    if($row>0){

            $account_already_exist_message = "
           <h1 class='text-white'>Sorry Username already exists!!!</h1><br>
           <h1 class='text-white'>Please go back to Register Webpage to register a different Username!!!</h1>
           "; 
    }else{
            $account_register_successfully_message = "
            <b class='text-white' style='font-size:30px;'>THANK YOU FOR REGISTERING AN ACCOUNT ON OUR WEBSITE!!!</b> <br>.
            <img src='image/thankforregister.png' width='600px' height='300px'>.
            <br>.
            <p class='text-white' style='font-size:30px;'>Now you can go back to our main website!!!</p>";
            $stmt2->execute();        
        
         //create a specific user information file with the file name as same as username
            $user_info_page = fopen('User_information_page.php','r') or die ('unable to open and read file!!!');
            $new_user_info_file = fopen(check_func($_POST['username1']).".php",'w+') or die('Unable to open and read test2.php file!!!');
            while(!feof($user_info_page)){
              fwrite($new_user_info_file,fgets($user_info_page));
            }
            fclose($new_user_info_file);
            fclose($user_info_page);
        
    };
         
  


}catch(PDOException $e){
echo 'Error '.$e->getMessage();
}

$conn = null;
$conn2 = null;
                
                
                


?>

    <button id="back_butt" name="butt1" title="back button"
            type="button" class="btn btn-primary text-white w3-hover-green"
            onclick="document.location='main_page.php'" ><i class="fa fa-arrow-left"></i> BACK</button>
    
    
            <div id="block1" class="w3-content" style="border:5px double white;
            background-color:black;box-shadow:2px 2px 12px 12px aqua,-2px -2px 12px 12px aqua">
              
                 <div class="w3-center">

                 <?php
                 
                 echo $account_already_exist_message;
                 echo $account_register_successfully_message;

                 
                 ?>

                 </div>
 
           </div>



    

      
    </body>



    <footer></footer>
</html>
