<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 




<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>
              

<script src="https://cdn.plot.ly/plotly-2.8.3.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<link rel="stylesheet" type='text/css' href="Sass_Css_file/test1.css">


    </head>




    <body >


    <input class="add_item_field text-primary"
                 id="add_item_field" title="add item input field" name="add_item_field"
                type="text"  data-add-item-field="shopping item add item input field data"
                style="width:600px;font-size:40px;"
                placeholder="Enter your car model..."
               
              >




    <script>
       
    </script>

   <script>
       var jq = $.noConflict();
       jq(document).ready(function($){
        $("#add_item_field").change(function(){
            var arr1 = $(this).val().split(" ");
             var txt = "";
             for(let i = 0;i<arr1.length;i++){
                  txt+= arr1[i].charAt(0).toUpperCase()+arr1[i].slice(1) + " ";
                  $(this).val(txt);
             }
        })
            
       });

/*
Normally when user input something into input field, webpage tend to show us the thing that user input. User can provide uppercase letter or lowercase letter. What if we want the input change into uppercase for the first letter of each word that separated by a whitespace?

In this case, we can not just use onchange event and convert all value inside that input field into uppercase using   .toUpperCase() method of javascript

+ the input text of this input field is a string

+ .split(“ “) convert this string into an array that separates between each word that user has input that separated by a whitespace

Ex: if user input   lamborghini veneno   => it will turn to [‘lamborghini’,”veneno”] in the background

+ using for loop to loop through each element inside the array and get the text inside as string
	take  lamborghini veneno
+arr1[i].charAt(0) take the first character of this string
=>if i = 0,   take   lamborghini.charAt(0)

+arr1[i].slice(1)  take and return the string character that begin at index1 to the end of this string



*/

   </script>


    </body>

   

    <footer>
        
    </footer>



</html>
