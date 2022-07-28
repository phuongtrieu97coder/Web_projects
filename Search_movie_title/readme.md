# ![image](https://img.shields.io/badge/PHP-white?style=for-the-badge&logo=php) ![image](https://img.shields.io/badge/JavaScript-black?style=for-the-badge&logo=javascript) ![image](https://img.shields.io/badge/HTML5-black?style=for-the-badge&logo=html5)  ![image](https://img.shields.io/badge/jQuery-black?style=for-the-badge&logo=jquery) ![image](https://img.shields.io/badge/CSS3-black?style=for-the-badge&logo=css3) ![image](https://img.shields.io/badge/JSON-black?style=for-the-badge&logo=json) 


# SEARCH MOVIE TITLES
> This project is used to study jQuery, JavaScript, AJAX to help users find out movie titles as hints after any user input any character into the input field.

> The hints are going to contains a poster of the movie and movie title.

> Users can click movie title hints option to fill out the input field with movie title faster.

> Movie titles and movie poster images hints are taken from data of JSON file

# Technologies:

> Html, CSS, JavaScript, jQuery, JSON, AJAX.

> Html
```
<form> , <input>, <div>, <span>, <img> 
```

> jQuery 
```
.filter(), .hover(), .html(), .val(), .text(), selectors  $("[id='']")   $("[class='']") ,  
.attr(),  $.getJSON(),  var jq = $.noConflict(), jq(document).ready(function($){}),   
.on(), keyup event, .css(), .toggle(), .toLowerCase(), .click(), .hide(), .indexOf(), $(this)   
```

> JavaScript
```
array, array filter, array find, array includes, array indexOf,  for loop, object, Object.keys(),
Object.values(), XMLHttpRequest(), string replace(), string charAt(), string toUpperCase(),
if else if else, document.getElementById('').innerHTML, document.getElementById('').value,
string trim(), function, document.getElementById("").style.display, onkeyup  event
```

> CSS
```
background-color, color, font-size, border, box-shadow,padding, width, height, position, top, left
```

# Files: test1.php, data_json1.json, test2.php

# Think to notice:

> I don't upload images into this repositories. If you spend time doing research on this repository, please download or copy images from the internet.

> I used jQuery to get data from JSON file, using JavaScript XMLHttpRequest can work just fine.

> I can apply this project to built a movie online streaming service web application, software, mobile application in the future.\

> It took me 3 days to finish two different kind of projects in this document.

> This project took a lot of algorithm syntaxes that I created by myself.

> Using jQuery is a good choice for this project since the .filter() method filter between data input and show hints faster than JavaScript.

> Using JavaScript from start to the end is a bad idea because it made me find more syntaxes and algorithm to solve problems. 


# Method1

### Syntax in 'test1.php'

```html


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
```

### Syntax in 'data_json1.json'

```html
[
  
    {
        "id":"mov_1",
        "title":"Iron man",
        "image":"<img src='image/iron_man_img1.jpg' alt='Iron man' width='50px' height='50px'>"
    },
   
  
    {
        "id":"mov_2",
        "title":"Wonder Woman",
        "image":"<img src='image/wonder_woman_img1.jpg' alt='Wonder woman' width='50px' height='50px'>"
    },
  
    {
        "id":"mov_3",
        "title":"Captain America",
        "image":"<img src='image/captain_america_img1.jpg' alt='Captain america' width='50px' height='50px'>"
    },
 
    {
        "id":"mov_4",
        "title":"Spider man",
        "image":"<img src='image/spiderman_img1.jpg' alt='Spiderman' width='50px' height='50px'>"
    },
   
    {
        "id":"mov_5",
        "title":"X-men",
        "image":"<img src='image/xmen_img1.jpg' alt='Xmen' width='50px' height='50px'>"
    },

    {
        "id":"mov_6",
        "title":"Pirate Of The Caribean",
        "image":"<img src='image/pirate_of_caribean_img1.jpg' alt='Pirate of the caribean' width='50px' height='50px'>"
    }


]
```

# Output
![image](https://user-images.githubusercontent.com/82598726/181651188-d355fdb2-1574-44d8-ae32-6d9b2ce54b6b.png)


![image](https://user-images.githubusercontent.com/82598726/181651216-4b9ddb9a-fbe4-4fa6-a786-5757bd1c1480.png)


![image](https://user-images.githubusercontent.com/82598726/181651232-b81b83e4-64aa-4d3a-a8b2-0fcedeff74c3.png)


![image](https://user-images.githubusercontent.com/82598726/181651259-c92adbef-2826-4b2a-9293-981ce1f4eb8c.png)


![image](https://user-images.githubusercontent.com/82598726/181651275-2c399ad7-7192-4336-a2a4-cd91d95b8705.png)


![image](https://user-images.githubusercontent.com/82598726/181651297-c8da79f7-32ad-4c28-bb5c-1649b3b0c431.png)


![image](https://user-images.githubusercontent.com/82598726/181651322-c1f55e23-5d58-40c8-8656-11d146deb9f4.png)


![image](https://user-images.githubusercontent.com/82598726/181651498-a6d311f5-5888-4b1d-a62b-15b25efcf780.png)


![image](https://user-images.githubusercontent.com/82598726/181651344-87a2b539-0c36-41fa-af46-f5899e1cc8c2.png)

