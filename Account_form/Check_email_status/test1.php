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
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              <link rel="stylesheet"  type="text/css" href="test1.css">


              <style>

           
              
              </style>
       </head>




       <body>

    
          <header>

          </header>



          <main>
           

        <form id="form1_block" name="form1"
         action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
         method="post" title="form1 block"
          target="_self" enctype="multipart/form-data"
          style="width:600px;border:2px solid blue;padding:20px"
          ng-app="app1" ng-controller="app1_controller"
          ng-init="
          email_input='but@gmail.com';
          code_input = ['er45464','76uyu7ity','cb645nbm78978hgj4564'];
          special_char_input = [{char:'()^%%$#%',pass:'ge'},{char:'65y65uu6i75i',pass:'yu'}]
          ">


          <div class="w3-center">
                 <img id="avatar_img"  src="image/avatar/avatar1.png"  alt="avatar"
                 style="border:2px solid orange;border-radius:300px 300px;width:200px;height:200px;">
          </div>

          <br>
       

          <div class="w3-center">
              <b test2></b><br><br>
              <test1></test1><br><br>

              <p ng-init="num1=0">
                     <b>Code: {{code_input[1]+num1+num2}}</b>
              </p>
          </div>
         

          <button id="change code button" class="btn btn-danger text-white w3-hover-aqua" 
          type="button" title="change code button" ng-click="num1 = num1+1;change_num2()">Change Code</button>


          <button id="change account button" class="btn btn-primary text-white w3-hover-red" 
          type="button" title="change account button" ng-click="change_account()">Change Account</button>
         
         
          <button id="change email button" class="btn btn-success text-white w3-hover-yellow" 
          type="button" title="change email button" onclick="change_email()">Change Email</button>



          <button id="change avatar button" class="btn btn-dark text-white w3-hover-yellow" 
          type="button" title="change avatar button" onclick="change_avatar()">Change avatar</button>


          <hr>


          <label><b>Account: </b> <i ng-repeat="x in special_char_input" ng-bind="x.char + '.' + x.pass + x2 +x3"></i></label>

          <br>

          <br>

          <label for="email1_input"><b>Email:</b></label>
          <span ng-show="form1.email1.$error.email" class="text-danger">Invalid email!!!</span>
          <br>

          <input id="email1_input" type="email" name="email1" ng-model="email_input" style="width:100%;">
          <br>
          <b>Change email to see the changing of status below....</b>


          <br><br>

          <hr>
          <p>
                 <b>STATUS</b>
          </p>


          <p>Valid: {{form1.email1.$valid}} {if true, emaill meets all criteria.}</p>
          <p>Dirty: {{form1.email1.$dirty}} {if true, email field has been changed.}</p>
          <p>Touched: {{form1.email1.$touched}} {if true, email field has been in focus.}</p>

       
       
       
       
       
       </form>

       <script>
           var email_block = ["terr@gmail.com","GT@gmail.com","VDS@gmail.com"];   

           var n = 0;

           function change_avatar(){
                  if(n==0){
                         document.getElementById("avatar_img").src="image/avatar/avatar2.png";
                         n = 1;
                  }else if(n == 1){
                         document.getElementById("avatar_img").src="image/avatar/avatar3.png";
                         n = 2;
                  
                  }else if(n == 2){
                         document.getElementById("avatar_img").src="image/avatar/avatar4.png";
                         n = 3;
                  }else if(n == 3){
                         document.getElementById("avatar_img").src="image/avatar/avatar5.png";
                         n = 4;
                  }else if(n == 4){
                         document.getElementById("avatar_img").src="image/avatar/avatar6.png";
                         n = 5;
                  }else{
                     document.getElementById("avatar_img").src="image/avatar/avatar1.png";
                         n = 0;
                  }
           }



              var app = angular.module("app1",[]);
              app.controller("app1_controller",function($scope){
                     $scope.num2 = 0;
                     $scope.x2 = "EW%$YY^%UJI&I&";
                     $scope.x3 = 0;
                    
                     $scope.change_num2 = function(){
                            $scope.num2++;
                     }
                     $scope.change_account = function(){
                            $scope.x3++;
                     }
                    
              });


              var n2 = 0;

              function change_email(){
                     if(n2 == 0){
                            document.getElementById("email1_input").value = email_block[0];
                            n2 = 1;
                     }else if(n2 == 1){
                            document.getElementById("email1_input").value = email_block[1];
                            n2 = 2;
                     }else if(n2 == 2){
                            document.getElementById("email1_input").value = email_block[2];
                            n2 = 3;
                     }else{
                            document.getElementById("email1_input").value = "but@gmail.com";
                            n2 = 0;
                     }
              }
       </script>

       <script src="test1.js"></script>

         

         



           
            



           
         
          </main>


          



         

           
      

       </body>





       <footer>

       
       

       </footer>



</html>
