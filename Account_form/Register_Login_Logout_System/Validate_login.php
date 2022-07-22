<?php
session_start();
?>
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
            

         




            <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">

                        


            <title>TGH WEBSITE</title>




    </head>




    <body style="background:url('image/car_wallpaper6.png') fixed center no-repeat;background-size:100% 100%;">


    <?php


$web_host = 'localhost';
$admin = 'youradmin_name';
$admin_database_pass='youradmin_password';
$database_name = 'yourdatabase_name';

try{
 $access_database_info = 'mysql:host='.$web_host.';dbname='.$database_name;
 $conn = new PDO($access_database_info,$admin,$admin_database_pass);
 $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

       
 
 }catch(PDOException $e){
     echo 'ERROR: '.$e->getMessage();
 } 


 function validate_login_func($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }


   
 $username_login = $pass_login = "";


      
 if($_SERVER["REQUEST_METHOD"] == "POST"){


$query1 = 'SELECT Customer_Username,Customer_Password,Customer_Avatar 
FROM customers WHERE Customer_Username = :seek_username AND Customer_Password = :seek_password' ;
      
 $stmt = $conn->prepare($query1);
     
 $stmt->bindParam(':seek_username',$seek_username);
 $stmt->bindParam(':seek_password',$seek_password);

 
    if(empty($_POST['username_input'])){
      $username_err_message = 'Username is required!!!';
    }

    if(empty($_POST['password_input'])){
      $password_err_message = 'Password is required!!!';
    } 
    
    if(isset($_POST['username_input']) && isset($_POST['password_input'])){
      $username_login = validate_login_func($_POST["username_input"]);
      $seek_username =  $username_login;
      $pass_login = validate_login_func($_POST["password_input"]);
      $seek_password = $pass_login;



      $stmt ->execute();
      $row = $stmt->rowCount();
                     
                 $select_result = $stmt->fetch(); 

                 if($row>0){
                     $_SESSION['user_loggedin'] = true;
                     $_SESSION['tgh_car_dealership_username'] = $username_login;
                     header('location: main_page.php');
                     
                 }else{
                     $_SESSION['user_loggedin_failed'] = true;
                     header('location: main_page.php');
                     
                 }
                      
                 $conn = null;
             




    }


    
     
   
                     
            
 }

?>






    

      
    </body>



    <footer></footer>
</html>
