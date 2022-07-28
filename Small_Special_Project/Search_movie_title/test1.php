<?php 
declare(strict_types=1);
session_start();

?>
<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS Web TEMPLATE ">


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
                  
               
            



              <title>PHUONG WEBSITE</title>








              <style>
  
    
              </style>
       </head>




       <body>
                
     
  <div id="block1"></div>
  <div id="block2"></div>
 
  <form id='form1' name='form1' title='form1'
   action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>'
   method='post' target='_self' enctype='multipart/form-data'
   style='width:600px;border:2px solid green;padding:20px;font-size:25px;background-color:black;
   border:5px double yellowgreen;box-shadow:3px 3px 8px 8px aqua, -3px -3px 8px 8px aqua;
   position:fixed;top:50px;left:400px;'
   data-form1='form1_data' >

         <div class='w3-center'>
                <img src='image/movietime.png' alt='movie_time' width='150px' height='150px;'>
         </div>

       <input id='input1' name='input1' type='text'
        placeholder='Enter movies...' style='width:100%;font-size:40px;'
       >
                     
        <div id='hints_block' style='background-color:white;color:black'></div>


     </form>
       
    <script>





    var jq = $.noConflict();

    jq(document).ready(function($){


      


       $(`[id='input1']`).on('keyup',function(){
              var search_value = $(this).val().toLowerCase();


          

              if(search_value == ""){
                     $("[id='hints_block']").html("");
              }else{
                    //use getJSON to get data from json file
                     $.getJSON('data_json1.json',function(result,status,xhr){



                      



                            //loop through data to show a list of movies result
                            var text = "";
                            for(let i= 0; i<result.length;i++){

                                text += `
                                
                                <div  class='hint_item_block' 
                                style='border-bottom:2px solid green;' 
                                  data_movie_title_data='${result[i].title}'>
                                  
                                 

                                          <span class='hint_item_img_block' >
                                           
                                              ${result[i].image}
                                          </span>


                                          <span class='hint_item_movies_title_block' >
                                          
                                               ${result[i].title}
                                          </span>
                                 </div>
                                
                                `;

                            }
                           

                            $("[id='hints_block']").html(text); 

                            //filter out the necessary movie titles as long as users input more letter characters
                      
                            
                            
                            
                            $("[class='hint_item_block']").filter(function(){
                                 $(this).toggle(
                                   $(this).attr('data_movie_title_data').toLowerCase().indexOf(search_value) > -1
                                 )
                                 .hover(
                                   
                                          function(){
                                                 $(this).css({
                                                        "background-color":"green",
                                                        "color":"white"
                                                 });
                                          },
                                          function(){
                                                 $(this).css({
                                                        "background-color":"white",
                                                        "color":"black"
                                                 });
                                          }
                                   
                                 )

                                 .click(function(){
                                       $("[id='input1']").val($(this).attr('data_movie_title_data'));
                                       $("[class='hint_item_block']").hide();
                                 });
                            });


                           
                          
                     });
                                  

                      
                            
                     
                   
              }
       });
      
        
    });
        
          
      
      

         
        
      
    </script>
       
       

  
      
       </body>




       <footer>
              
       </footer>



</html>
