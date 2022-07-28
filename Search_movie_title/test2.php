




           

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
        placeholder='Search movies...' style='width:100%;;font-size:40px;border:2px solid blue;'
      onkeyup="ShowHints(this.value)">

       <div id='show_hints' style='font-size:40px;border:2px solid blue;background-color:white;color:black'></div>

    </form>
      

       <script>
        var movies_title = [
            "Spiderman",
            'X-men',
            'Captain america',
            'Wonder Woman',
            'Iron Man',
            'Pirate of the Caribean'
        ];
        var movies_img = {
            Spiderman: "<img src='image/spiderman_img1.jpg' alt='Spiderman' width='50px' height='50px'>",
            Xmen:"<img src='image/xmen_img1.jpg' alt='Xmen' width='50px' height='50px'>",
            Captain_america:"<img src='image/captain_america_img1.jpg' alt='Captain america' width='50px' height='50px'>",
            Wonder_woman:"<img src='image/wonder_woman_img1.jpg' alt='Wonder woman' width='50px' height='50px'>",
            Iron_man:"<img src='image/iron_man_img1.jpg' alt='Iron man' width='50px' height='50px'>",
            Pirate_of_the_caribean:"<img src='image/pirate_of_caribean_img1.jpg' alt='Pirate of the caribean' width='50px' height='50px'>"
        }

       
       
        



    
        function Choose_movies(){//this function can not be placed inside 'ShowHints' function.
                var get_hint_item_movies_title_block = 
                document.getElementsByClassName('hint_item_movies_title_block')[0].innerHTML;

                    document.getElementById("input1").value = 
                    movies_title[movies_title.indexOf(get_hint_item_movies_title_block.trim())];
                     //i used trim method because after choosing the hints, it generate a lot of
                    //whitespace at the beginning and ending of the value inside the input field
                                   
                
                    document.getElementById("show_hints").style.display = 'none';
        }



        function ShowHints(val){

            var img_arr  =Object.keys(movies_img);
            //Object.keys() will return an array contains all the properties as elements
        
            console.log(img_arr.indexOf(
                    img_arr.find(
                        v=>v.includes(
                            val.replace(
                                val.charAt(0),
                                function(item){
                                    return item.toUpperCase();
                                }
                            )
                        )
                    )
                )
            );
        //this syntax will return the index of the element that match the keyword have been found from
        //user movies input  first character
        //if user input  's' => index is going to be 0
        //iif user input 'x'  => index is going to be 1 

            if(val == ""){
                document.getElementById("show_hints").innerHTML = "";
                document.getElementById("show_hints").style.display = 'none';
            }else{
                document.getElementById("show_hints").style.display = 'block';

                document.getElementById("show_hints").innerHTML =  
                    `<div class='hint_item_block w3-hover-green w3-hover-text-white' style='border-bottom:2px solid blue;' 
                    onclick='Choose_movies()' >

                        <span class='hint_item_img_block'> 
                        ${Object.values(movies_img)[
                            img_arr.indexOf(
                                img_arr.find(
                                    v=>v.includes(
                                        val.replace(
                                            val.charAt(0),
                                            function(item){
                                                return item.toUpperCase();
                                            }
                                        )
                                    )
                                )
                            )
                        ]}
                        </span>

                        <span class='hint_item_movies_title_block '>
                        ${movies_title.find(
                            v=>v.includes(
                                val.replace(
                                    val.charAt(0),
                                    function(item){
                                        return item.toUpperCase()
                                    }
                                )
                            )
                          )
                        }
                        </span>

                    </div>
                    `
                   
                    ////Object.values() will return an array contains all the properties' values as elements
             

            

             
            }
        }


       </script>

    </body>

  

    <footer>
        
    </footer>



</html>


