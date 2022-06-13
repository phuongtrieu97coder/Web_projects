<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


     <meta name="description"   content="TGH CAR DEALERSHIP WEBSITE">


     <meta name="author"   content="PHUONG.TRIEU">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script> 
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.js"></script>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
          
  

     

     <link rel="shortcut icon" href="image/car_icon2.png" type="image/x-icon">


<title>TGH WEBSITE</title>





         <style>
       

[id="bugatti_car_collection_tab"]{
       display:grid;
       grid-template-columns:270px 270px 270px 270px 270px;
}




[id="bugatti_car_collection_car1"]{
       box-shadow:2px 2px 8px 8px gray,-2px -2px 4px 4px gray;
       
       margin-left:20px;
}
[id="bugatti_car_collection_car2"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection_car3"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection_car4"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection_car5"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}



[id="bugatti_car_collection_car1_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection_car1_info_block"] div{
       border-bottom:2px solid green;
}





[id="bugatti_car_collection_car2_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection_car2_info_block"] div{
       border-bottom:2px solid green;
}




[id="bugatti_car_collection_car3_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection_car3_info_block"] div{
       border-bottom:2px solid green;
}



[id="bugatti_car_collection_car4_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection_car4_info_block"] div{
       border-bottom:2px solid green;
}



[id="bugatti_car_collection_car5_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection_car5_info_block"] div{
       border-bottom:2px solid green;
}




        









[id="bugatti_car_collection2_tab"]{
       display:grid;
       grid-template-columns:270px 270px 270px 270px 270px;
}




[id="bugatti_car_collection2_car6"]{
       box-shadow:2px 2px 8px 8px gray,-2px -2px 4px 4px gray;
       
       margin-left:20px;
}
[id="bugatti_car_collection2_car7"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection2_car8"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection2_car9"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="bugatti_car_collection2_car10"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}



[id="bugatti_car_collection2_car6_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection2_car6_info_block"] div{
       border-bottom:2px solid green;
}





[id="bugatti_car_collection2_car7_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection2_car7_info_block"] div{
       border-bottom:2px solid green;
}




[id="bugatti_car_collection2_car8_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection2_car8_info_block"] div{
       border-bottom:2px solid green;
}



[id="bugatti_car_collection2_car9_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection2_car9_info_block"] div{
       border-bottom:2px solid green;
}



[id="bugatti_car_collection2_car10_info_block"]{
       padding:20px;
}

[id="bugatti_car_collection2_car10_info_block"] div{
       border-bottom:2px solid green;
}




        
       
         </style>
    </head>


    <body>

<header></header>



<main>






<div id="change_page_button_block" class="w3-center">



<button id="previous_button" title="previous button" type="button" 
class=" btn btn-dark w3-hover-blue w3-hover-text-white"
style="font-weight:bold;color:yellowgreen;font-size:15px;
padding:0 10px;border:2px solid aqua;
border-radius:50px 0px 0px 50px" onclick="slide(-1)">
<i class="fa fa-angle-double-left"></i>
</button>




<button id="change_to_page1_butt" title="change_to_page1_butt" type="button"
 class="changepage_button btn btn-dark w3-hover-blue w3-hover-text-white"
style="font-weight:bold;color:yellowgreen;font-size:15px;
padding:0 10px;border:2px solid aqua;" onclick="changepage(1)">
  1
</button>


<button id="change_to_page2_butt" title="change_to_page2_butt" type="button" 
class="changepage_button btn btn-dark w3-hover-blue w3-hover-text-white"
style="font-weight:bold;color:yellowgreen;font-size:15px;
padding:0 10px;border:2px solid aqua;" onclick="changepage(2)">
 2
</button>



<button id="next_button" title="next button" type="button" 
class=" btn btn-dark w3-hover-blue w3-hover-text-white"
style="font-weight:bold;color:yellowgreen;font-size:15px;
padding:0 10px;border:2px solid aqua;
border-radius:0px 50px 50px 0px" onclick="slide(+1)">
<i class="fa fa-angle-double-right"></i>
</button>


</div>


<br>


<div id="bugatti_car_collection" class="bugatti_car_collection w3-animate-top">
        <div id="bugatti_car_collection_tab">
                                                   
                        
        
                    <div id="bugatti_car_collection_car1">
                            <img id="bugatti_car1_img" 
                             width="100%" height="200px">
                                                   
                             
                            <div id="bugatti_car_collection_car1_info_block">
                                                        <div id="bugatti_car_collection_car1_info_block_model_info_block">
                                                             
                                                             <h5 id="bugatti_car1_model_name" style="color:blue;"></h5>
                                                        </div>



                                                        <div  id="bugatti_car_collection_car1_info_block_year_info_block">
                                                             <b>Year:</b>
                                                             <span id="bugatti_car1_model_year"></span>
                                                        </div>




                                                        <div  id="bugatti_car_collection_car1_info_block_price_info_block">
                                                             <b>Price:</b>
                                                             <span id="bugatti_car1_model_price"></span>
                                                        </div>



                                                        <div  id="bugatti_car_collection_car1_info_block_maxspeed_info_block">
                                                             <b>Max-Speed:</b><br>
                                                             <span id="bugatti_car1_model_speed"></span>
                                                        </div>
                                                        <br>


                                                        <section>
                                                             <a id="explore_bugatti_car1_button"
                                                             title="Explore Car"
                                                             name="explore_car_butt" type="button"
                                                             class="btn btn-success text-white w3-hover-blue">
                                                             <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                             <a id="order_bugatti_car1_button"
                                                             title="Order Car"  target="_blank" href="Car_order_form.php"
                                                             name="order_car_butt" type="button"
                                                             class="btn btn-info text-white w3-hover-orange w3-right"
                                                             onclick="open_order_form_page('Bugatti chiron V8')">
                                                             <i class="fa fa-shopping-cart"></i> ORDER</a>
                                                        </section>
                            </div>
                    </div>




                                 
                    <div id="bugatti_car_collection_car2">
                                <img id="bugatti_car2_img" 
                                width="100%" height="200px">



                            <div id="bugatti_car_collection_car2_info_block">
                                                         <div id="bugatti_car_collection_car2_info_block_model_info_block">
                                                              
                                                              <h5 id="bugatti_car2_model_name" style="color:green;"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection_car2_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car2_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car2_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car2_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car2_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car2_model_speed"></span>
                                                         </div>



                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car2_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car2_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V9')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>
                    </div>




                    <div id="bugatti_car_collection_car3">
                                                    <img id="bugatti_car3_img"
                                                     width="100%" height="200px">


                            <div id="bugatti_car_collection_car3_info_block">
                                                         <div id="bugatti_car_collection_car3_info_block_model_info_block">
                                                              
                                                              <h5 id="bugatti_car3_model_name" style="color:darkseagreen"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection_car3_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car3_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car3_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car3_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car3_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car3_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car3_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car3_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V12')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>


                    </div>


                    <div id="bugatti_car_collection_car4">
                                                    <img id="bugatti_car4_img" 
                                                    width="100%" height="200px">



                            <div id="bugatti_car_collection_car4_info_block">
                                                         <div id="bugatti_car_collection_car4_info_block_model_info_block">
                                                             
                                                              <h5 id="bugatti_car4_model_name" style="color:darkturquoise"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection_car4_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car4_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car4_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car4_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car4_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car4_model_speed"></span>
                                                         </div>




                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car4_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car4_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V15')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>


                            </div>
                    </div>




                    <div id="bugatti_car_collection_car5">
                                                    <img id="bugatti_car5_img" 
                                                     width="100%" height="200px">


                            <div id="bugatti_car_collection_car5_info_block">
                                                         <div id="bugatti_car_collection_car5_info_block_model_info_block">
                                                            
                                                              <h5 id="bugatti_car5_model_name" style="color:deepskyblue"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection_car5_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car5_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car5_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car5_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection_car5_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car5_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car5_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car5_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V20')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>



                            </div>
                    </div>








                                         
        </div>
 </div>





















 
<div id="bugatti_car_collection2"  class="bugatti_car_collection w3-animate-top">
        <div id="bugatti_car_collection2_tab">
                                                   
                        
        
                    <div id="bugatti_car_collection2_car6">
                            <img id="bugatti_car6_img" 
                             width="100%" height="200px">
                                                   
                             
                            <div id="bugatti_car_collection2_car6_info_block">
                                                        <div id="bugatti_car_collection2_car6_info_block_model_info_block">
                                                             
                                                             <h5 id="bugatti_car6_model_name" style="color:blue;"></h5>
                                                        </div>



                                                        <div  id="bugatti_car_collection2_car6_info_block_year_info_block">
                                                             <b>Year:</b>
                                                             <span id="bugatti_car6_model_year"></span>
                                                        </div>




                                                        <div  id="bugatti_car_collection2_car6_info_block_price_info_block">
                                                             <b>Price:</b>
                                                             <span id="bugatti_car6_model_price"></span>
                                                        </div>



                                                        <div  id="bugatti_car_collection2_car6_info_block_maxspeed_info_block">
                                                             <b>Max-Speed:</b><br>
                                                             <span id="bugatti_car6_model_speed"></span>
                                                        </div>
                                                        <br>


                                                        <section>
                                                             <a id="explore_bugatti_car6_button"
                                                             title="Explore Car"
                                                             name="explore_car_butt" type="button"
                                                             class="btn btn-success text-white w3-hover-blue">
                                                             <i class="fa fa-search-plus"></i> EXPLORE</a>



                                                             <a id="order_bugatti_car6_button"
                                                             title="Order Car" href="Car_order_form.php" target="_blank"
                                                             name="order_car_butt" type="button"
                                                             class="btn btn-info text-white w3-hover-orange w3-right"
                                                             onclick="open_order_form_page('Bugatti chiron V23')">
                                                             <i class="fa fa-shopping-cart"></i> ORDER</a>
                                                        </section>
                            </div>
                    </div>




                                 
                    <div id="bugatti_car_collection2_car7">
                                <img id="bugatti_car7_img" 
                                width="100%" height="200px">



                            <div id="bugatti_car_collection2_car7_info_block">
                                                         <div id="bugatti_car_collection2_car7_info_block_model_info_block">
                                                              
                                                              <h5 id="bugatti_car7_model_name" style="color:green;"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection2_car7_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car7_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car7_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car7_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car7_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car7_model_speed"></span>
                                                         </div>



                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car7_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car7_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V26')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>
                    </div>




                    <div id="bugatti_car_collection2_car8">
                                                    <img id="bugatti_car8_img"
                                                     width="100%" height="200px">


                            <div id="bugatti_car_collection2_car8_info_block">
                                                         <div id="bugatti_car_collection2_car8_info_block_model_info_block">
                                                              
                                                              <h5 id="bugatti_car8_model_name" style="color:darkseagreen"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection2_car8_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car8_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car8_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car8_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car8_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car8_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <button id="explore_bugatti_car8_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</button>


                                                            <a id="order_bugatti_car8_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V30')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>


                    </div>


                    <div id="bugatti_car_collection2_car9">
                                                    <img id="bugatti_car9_img" 
                                                    width="100%" height="200px">



                            <div id="bugatti_car_collection2_car9_info_block">
                                                         <div id="bugatti_car_collection2_car9_info_block_model_info_block">
                                                             
                                                              <h5 id="bugatti_car9_model_name" style="color:darkturquoise"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection2_car9_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car9_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car9_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car9_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car9_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car9_model_speed"></span>
                                                         </div>




                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car9_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car9_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V33')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>


                            </div>
                    </div>




                    <div id="bugatti_car_collection2_car10">
                                                    <img id="bugatti_car10_img" 
                                                     width="100%" height="200px">


                            <div id="bugatti_car_collection2_car10_info_block">
                                                         <div id="bugatti_car_collection2_car10_info_block_model_info_block">
                                                            
                                                              <h5 id="bugatti_car10_model_name" style="color:deepskyblue"></h5>
                                                         </div>

                                                         <div  id="bugatti_car_collection2_car10_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="bugatti_car10_model_year"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car10_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="bugatti_car10_model_price"></span>
                                                         </div>


                                                         <div  id="bugatti_car_collection2_car10_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="bugatti_car10_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_bugatti_car10_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_bugatti_car10_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Bugatti chiron V35')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>



                            </div>
                    </div>








                                         
        </div>
 </div>





 <script>




load_data("Bugatti_brand.json");

async function load_data(file){
    var obj1 = await fetch(file);
    var data = await obj1.text();
    var parse_data = JSON.parse(data);
    document.getElementById("bugatti_car1_img").src = parse_data.Model_collection.Model1.Image_src;
    document.getElementById("bugatti_car1_model_name").innerHTML = parse_data.Model_collection.Model1.Name;
    document.getElementById("bugatti_car1_model_year").innerHTML = parse_data.Model_collection.Model1.Year[0];
    document.getElementById("bugatti_car1_model_price").innerHTML = parse_data.Model_collection.Model1.Price[0];
    document.getElementById("bugatti_car1_model_speed").innerHTML = parse_data.Model_collection.Model1.Speed;




    document.getElementById("bugatti_car2_img").src = parse_data.Model_collection.Model2.Image_src;
    document.getElementById("bugatti_car2_model_name").innerHTML = parse_data.Model_collection.Model2.Name;
    document.getElementById("bugatti_car2_model_year").innerHTML = parse_data.Model_collection.Model2.Year[0];
    document.getElementById("bugatti_car2_model_price").innerHTML = parse_data.Model_collection.Model2.Price[0];
    document.getElementById("bugatti_car2_model_speed").innerHTML = parse_data.Model_collection.Model2.Speed;



    document.getElementById("bugatti_car3_img").src = parse_data.Model_collection.Model3.Image_src;
    document.getElementById("bugatti_car3_model_name").innerHTML = parse_data.Model_collection.Model3.Name;
    document.getElementById("bugatti_car3_model_year").innerHTML = parse_data.Model_collection.Model3.Year[0];
    document.getElementById("bugatti_car3_model_price").innerHTML = parse_data.Model_collection.Model3.Price[0];
    document.getElementById("bugatti_car3_model_speed").innerHTML = parse_data.Model_collection.Model3.Speed;




    document.getElementById("bugatti_car4_img").src = parse_data.Model_collection.Model4.Image_src;
    document.getElementById("bugatti_car4_model_name").innerHTML = parse_data.Model_collection.Model4.Name;
    document.getElementById("bugatti_car4_model_year").innerHTML = parse_data.Model_collection.Model4.Year[0];
    document.getElementById("bugatti_car4_model_price").innerHTML = parse_data.Model_collection.Model4.Price[0];
    document.getElementById("bugatti_car4_model_speed").innerHTML = parse_data.Model_collection.Model4.Speed;



    document.getElementById("bugatti_car5_img").src = parse_data.Model_collection.Model5.Image_src;
    document.getElementById("bugatti_car5_model_name").innerHTML = parse_data.Model_collection.Model5.Name;
    document.getElementById("bugatti_car5_model_year").innerHTML = parse_data.Model_collection.Model5.Year[0];
    document.getElementById("bugatti_car5_model_price").innerHTML = parse_data.Model_collection.Model5.Price[0];
    document.getElementById("bugatti_car5_model_speed").innerHTML = parse_data.Model_collection.Model5.Speed;






    document.getElementById("bugatti_car6_img").src = parse_data.Model_collection.Model6.Image_src;
    document.getElementById("bugatti_car6_model_name").innerHTML = parse_data.Model_collection.Model6.Name;
    document.getElementById("bugatti_car6_model_year").innerHTML = parse_data.Model_collection.Model6.Year[0];
    document.getElementById("bugatti_car6_model_price").innerHTML = parse_data.Model_collection.Model6.Price[0];
    document.getElementById("bugatti_car6_model_speed").innerHTML = parse_data.Model_collection.Model6.Speed;





    document.getElementById("bugatti_car7_img").src = parse_data.Model_collection.Model7.Image_src;
    document.getElementById("bugatti_car7_model_name").innerHTML = parse_data.Model_collection.Model7.Name;
    document.getElementById("bugatti_car7_model_year").innerHTML = parse_data.Model_collection.Model7.Year[0];
    document.getElementById("bugatti_car7_model_price").innerHTML = parse_data.Model_collection.Model7.Price[0];
    document.getElementById("bugatti_car7_model_speed").innerHTML = parse_data.Model_collection.Model7.Speed;





    document.getElementById("bugatti_car8_img").src = parse_data.Model_collection.Model8.Image_src;
    document.getElementById("bugatti_car8_model_name").innerHTML = parse_data.Model_collection.Model8.Name;
    document.getElementById("bugatti_car8_model_year").innerHTML = parse_data.Model_collection.Model8.Year[0];
    document.getElementById("bugatti_car8_model_price").innerHTML = parse_data.Model_collection.Model8.Price[0];
    document.getElementById("bugatti_car8_model_speed").innerHTML = parse_data.Model_collection.Model8.Speed;





    document.getElementById("bugatti_car9_img").src = parse_data.Model_collection.Model9.Image_src;
    document.getElementById("bugatti_car9_model_name").innerHTML = parse_data.Model_collection.Model9.Name;
    document.getElementById("bugatti_car9_model_year").innerHTML = parse_data.Model_collection.Model9.Year[0];
    document.getElementById("bugatti_car9_model_price").innerHTML = parse_data.Model_collection.Model9.Price[0];
    document.getElementById("bugatti_car9_model_speed").innerHTML = parse_data.Model_collection.Model9.Speed;




    document.getElementById("bugatti_car10_img").src = parse_data.Model_collection.Model10.Image_src;
    document.getElementById("bugatti_car10_model_name").innerHTML = parse_data.Model_collection.Model10.Name;
    document.getElementById("bugatti_car10_model_year").innerHTML = parse_data.Model_collection.Model10.Year[0];
    document.getElementById("bugatti_car10_model_price").innerHTML = parse_data.Model_collection.Model10.Price[0];
    document.getElementById("bugatti_car10_model_speed").innerHTML = parse_data.Model_collection.Model10.Speed;

}



var get_bugatti_car_collection = document.getElementsByClassName("bugatti_car_collection");
var get_changepage_butt  = document.getElementsByClassName("changepage_button");

var index1 = 1;


changepage_structor(index1);


function changepage(n){
    changepage_structor(index1 = n);
}

function slide(n){
    changepage_structor(index1 += n);
}



function changepage_structor(n){
    
     if(n>get_bugatti_car_collection.length){index1 = 1};
     if(n<1){index1 = get_bugatti_car_collection.length};

     for(let i = 0; i<get_bugatti_car_collection.length;i++){
        get_bugatti_car_collection[i].style.display = "none";
     }
     for(let o = 0; o<get_changepage_butt.length;o++){
        get_changepage_butt[o].className = get_changepage_butt[o].className.replace(" w3-green","");
     }
     get_bugatti_car_collection[index1-1].style.display = "block";
     get_changepage_butt[index1 -1].className += " w3-green";
} 







function open_order_form_page(car_model_name){
    if(typeof(Storage)!=="undefined"){
        if(car_model_name == "Bugatti chiron V8"){
                     localStorage.setItem("car_model","Bugatti Chiron V8");
                     localStorage.setItem("car_price","$3,300,000");


        }else if(car_model_name == "Bugatti chiron V9"){
                     localStorage.setItem("car_model","Bugatti Chiron V9");
                     localStorage.setItem("car_price","$4,635,979");



        }else if(car_model_name == "Bugatti chiron V12"){
                     localStorage.setItem("car_model","Bugatti Chiron V12");
                     localStorage.setItem("car_price","$4,670,689");



        }else if(car_model_name == "Bugatti chiron V15"){
                     localStorage.setItem("car_model","Bugatti Chiron V15");
                     localStorage.setItem("car_price","$4,973,529");


        }else if(car_model_name == "Bugatti chiron V20"){
                     localStorage.setItem("car_model","Bugatti Chiron V20");
                     localStorage.setItem("car_price","$4,373,529");



        }else if(car_model_name == "Bugatti chiron V23"){
                     localStorage.setItem("car_model","Bugatti Chiron V23");
                     localStorage.setItem("car_price","$4,343,529");


        }else if(car_model_name == "Bugatti chiron V26"){
                     localStorage.setItem("car_model","Bugatti Chiron V26");
                     localStorage.setItem("car_price","$3,373,529");


        }else if(car_model_name == "Bugatti chiron V30"){
                     localStorage.setItem("car_model","Bugatti Chiron V30");
                     localStorage.setItem("car_price","$4,673,529");


        }else if(car_model_name == "Bugatti chiron V33"){
                     localStorage.setItem("car_model","Bugatti Chiron V33");
                     localStorage.setItem("car_price","$3,973,529");


        }else if(car_model_name == "Bugatti chiron V35"){
                     localStorage.setItem("car_model","Bugatti Chiron V35");
                     localStorage.setItem("car_price","$4,582,529");
        }else{
                     localStorage.setItem("car_model","");
                     localStorage.setItem("car_price","");
        }
    }

    
}


var jq_bugatti_car_collection = $.noConflict();
jq_bugatti_car_collection(document).ready(function($){
     $(`[id='bugatti_car1_img'],[id='bugatti_car2_img'],
     [id='bugatti_car3_img'],[id='bugatti_car4_img'],
     [id='bugatti_car5_img'],[id='bugatti_car6_img'],
     [id='bugatti_car7_img'],[id='bugatti_car8_img'],
     [id='bugatti_car9_img'],[id='bugatti_car10_img']
     `).mousedown(function(event){
          if(event.button == 2){
               $(event.currentTarget).contextmenu(function(event){
                    event.preventDefault();
               })
          }
     })
})

 </script>




</main>



    </body>


   


    <footer>

    </footer>




</html>
        