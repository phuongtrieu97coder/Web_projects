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
       

[id="mclaren_car_collection_tab"]{
       display:grid;
       grid-template-columns:270px 270px 270px 270px 270px;
}




[id="mclaren_car_collection_car1"]{
       box-shadow:2px 2px 8px 8px gray,-2px -2px 4px 4px gray;
       
       margin-left:20px;
}
[id="mclaren_car_collection_car2"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection_car3"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection_car4"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection_car5"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}



[id="mclaren_car_collection_car1_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection_car1_info_block"] div{
       border-bottom:2px solid green;
}





[id="mclaren_car_collection_car2_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection_car2_info_block"] div{
       border-bottom:2px solid green;
}




[id="mclaren_car_collection_car3_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection_car3_info_block"] div{
       border-bottom:2px solid green;
}



[id="mclaren_car_collection_car4_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection_car4_info_block"] div{
       border-bottom:2px solid green;
}



[id="mclaren_car_collection_car5_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection_car5_info_block"] div{
       border-bottom:2px solid green;
}




        









[id="mclaren_car_collection2_tab"]{
       display:grid;
       grid-template-columns:270px 270px 270px 270px 270px;
}




[id="mclaren_car_collection2_car6"]{
       box-shadow:2px 2px 8px 8px gray,-2px -2px 4px 4px gray;
       
       margin-left:20px;
}
[id="mclaren_car_collection2_car7"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection2_car8"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection2_car9"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}
[id="mclaren_car_collection2_car10"]{
       box-shadow:2px 2px 8px 8px gray ,-2px -2px 8px 8px gray;
       margin-left:30px;
}



[id="mclaren_car_collection2_car6_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection2_car6_info_block"] div{
       border-bottom:2px solid green;
}





[id="mclaren_car_collection2_car7_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection2_car7_info_block"] div{
       border-bottom:2px solid green;
}




[id="mclaren_car_collection2_car8_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection2_car8_info_block"] div{
       border-bottom:2px solid green;
}



[id="mclaren_car_collection2_car9_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection2_car9_info_block"] div{
       border-bottom:2px solid green;
}



[id="mclaren_car_collection2_car10_info_block"]{
       padding:20px;
}

[id="mclaren_car_collection2_car10_info_block"] div{
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


<div id="mclaren_car_collection" class="mclaren_car_collection w3-animate-top">
        <div id="mclaren_car_collection_tab">
                                                   
                        
        
                    <div id="mclaren_car_collection_car1">
                            <img id="mclaren_car1_img" 
                             width="100%" height="200px">
                                                   
                             
                            <div id="mclaren_car_collection_car1_info_block">
                                                        <div id="mclaren_car_collection_car1_info_block_model_info_block">
                                                             
                                                             <b id="mclaren_car1_model_name" style="color:blue;font-size:15px"></b>
                                                        </div>



                                                        <div  id="mclaren_car_collection_car1_info_block_year_info_block">
                                                             <b>Year:</b>
                                                             <span id="mclaren_car1_model_year"></span>
                                                        </div>




                                                        <div  id="mclaren_car_collection_car1_info_block_price_info_block">
                                                             <b>Price:</b>
                                                             <span id="mclaren_car1_model_price"></span>
                                                        </div>



                                                        <div  id="mclaren_car_collection_car1_info_block_maxspeed_info_block">
                                                             <b>Max-Speed:</b><br>
                                                             <span id="mclaren_car1_model_speed"></span>
                                                        </div>
                                                        <br>


                                                        <section>
                                                             <a id="explore_mclaren_car1_button"
                                                             title="Explore Car"
                                                             name="explore_car_butt" type="button"
                                                             class="btn btn-success text-white w3-hover-blue">
                                                             <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                             <a id="order_mclaren_car1_button"
                                                             title="Order Car"  target="_blank" href="Car_order_form.php"
                                                             name="order_car_butt" type="button"
                                                             class="btn btn-info text-white w3-hover-orange w3-right"
                                                             onclick="open_order_form_page('Mclaren 600LT Green')">
                                                             <i class="fa fa-shopping-cart"></i> ORDER</a>
                                                        </section>
                            </div>
                    </div>




                                 
                    <div id="mclaren_car_collection_car2">
                                <img id="mclaren_car2_img" 
                                width="100%" height="200px">



                            <div id="mclaren_car_collection_car2_info_block">
                                                         <div id="mclaren_car_collection_car2_info_block_model_info_block">
                                                              
                                                              <b id="mclaren_car2_model_name" style="color:green;font-size:15px"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection_car2_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car2_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car2_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car2_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car2_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car2_model_speed"></span>
                                                         </div>



                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car2_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car2_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren 620r')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>
                    </div>




                    <div id="mclaren_car_collection_car3">
                                                    <img id="mclaren_car3_img"
                                                     width="100%" height="200px">


                            <div id="mclaren_car_collection_car3_info_block">
                                                         <div id="mclaren_car_collection_car3_info_block_model_info_block">
                                                              
                                                              <b id="mclaren_car3_model_name" style="color:darkseagreen;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection_car3_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car3_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car3_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car3_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car3_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car3_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car3_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car3_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren 720S GT3X')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>


                    </div>


                    <div id="mclaren_car_collection_car4">
                                                    <img id="mclaren_car4_img" 
                                                    width="100%" height="200px">



                            <div id="mclaren_car_collection_car4_info_block">
                                                         <div id="mclaren_car_collection_car4_info_block_model_info_block">
                                                             
                                                              <b id="mclaren_car4_model_name" style="color:darkturquoise;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection_car4_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car4_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car4_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car4_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car4_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car4_model_speed"></span>
                                                         </div>




                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car4_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car4_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren 600LT')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>


                            </div>
                    </div>




                    <div id="mclaren_car_collection_car5">
                                                    <img id="mclaren_car5_img" 
                                                     width="100%" height="200px">


                            <div id="mclaren_car_collection_car5_info_block">
                                                         <div id="mclaren_car_collection_car5_info_block_model_info_block">
                                                            
                                                              <b id="mclaren_car5_model_name" style="color:deepskyblue;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection_car5_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car5_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car5_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car5_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection_car5_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car5_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car5_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car5_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren 720S Spider')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>



                            </div>
                    </div>








                                         
        </div>
 </div>





















 
<div id="mclaren_car_collection2"  class="mclaren_car_collection w3-animate-top">
        <div id="mclaren_car_collection2_tab">
                                                   
                        
        
                    <div id="mclaren_car_collection2_car6">
                            <img id="mclaren_car6_img" 
                             width="100%" height="200px">
                                                   
                             
                            <div id="mclaren_car_collection2_car6_info_block">
                                                        <div id="mclaren_car_collection2_car6_info_block_model_info_block">
                                                             
                                                             <b id="mclaren_car6_model_name" style="color:blue;font-size:15px"></b>
                                                        </div>



                                                        <div  id="mclaren_car_collection2_car6_info_block_year_info_block">
                                                             <b>Year:</b>
                                                             <span id="mclaren_car6_model_year"></span>
                                                        </div>




                                                        <div  id="mclaren_car_collection2_car6_info_block_price_info_block">
                                                             <b>Price:</b>
                                                             <span id="mclaren_car6_model_price"></span>
                                                        </div>



                                                        <div  id="mclaren_car_collection2_car6_info_block_maxspeed_info_block">
                                                             <b>Max-Speed:</b><br>
                                                             <span id="mclaren_car6_model_speed"></span>
                                                        </div>
                                                        <br>


                                                        <section>
                                                             <a id="explore_mclaren_car6_button"
                                                             title="Explore Car"
                                                             name="explore_car_butt" type="button"
                                                             class="btn btn-success text-white w3-hover-blue">
                                                             <i class="fa fa-search-plus"></i> EXPLORE</a>



                                                             <a id="order_mclaren_car6_button"
                                                             title="Order Car" href="Car_order_form.php" target="_blank"
                                                             name="order_car_butt" type="button"
                                                             class="btn btn-info text-white w3-hover-orange w3-right"
                                                             onclick="open_order_form_page('Mclaren 720S')">
                                                             <i class="fa fa-shopping-cart"></i> ORDER</a>
                                                        </section>
                            </div>
                    </div>




                                 
                    <div id="mclaren_car_collection2_car7">
                                <img id="mclaren_car7_img" 
                                width="100%" height="200px">



                            <div id="mclaren_car_collection2_car7_info_block">
                                                         <div id="mclaren_car_collection2_car7_info_block_model_info_block">
                                                              
                                                              <b id="mclaren_car7_model_name" style="color:green;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection2_car7_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car7_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car7_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car7_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car7_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car7_model_speed"></span>
                                                         </div>



                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car7_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car7_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren P1')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>
                    </div>




                    <div id="mclaren_car_collection2_car8">
                                                    <img id="mclaren_car8_img"
                                                     width="100%" height="200px">


                            <div id="mclaren_car_collection2_car8_info_block">
                                                         <div id="mclaren_car_collection2_car8_info_block_model_info_block">
                                                              
                                                              <b id="mclaren_car8_model_name" style="color:darkseagreen;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection2_car8_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car8_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car8_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car8_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car8_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car8_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <button id="explore_mclaren_car8_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</button>


                                                            <a id="order_mclaren_car8_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren P1_2')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>
                            </div>


                    </div>


                    <div id="mclaren_car_collection2_car9">
                                                    <img id="mclaren_car9_img" 
                                                    width="100%" height="200px">



                            <div id="mclaren_car_collection2_car9_info_block">
                                                         <div id="mclaren_car_collection2_car9_info_block_model_info_block">
                                                             
                                                              <b id="mclaren_car9_model_name" style="color:darkturquoise;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection2_car9_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car9_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car9_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car9_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car9_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car9_model_speed"></span>
                                                         </div>




                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car9_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car9_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren P1_3')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>


                            </div>
                    </div>




                    <div id="mclaren_car_collection2_car10">
                                                    <img id="mclaren_car10_img" 
                                                     width="100%" height="200px">


                            <div id="mclaren_car_collection2_car10_info_block">
                                                         <div id="mclaren_car_collection2_car10_info_block_model_info_block">
                                                            
                                                              <b id="mclaren_car10_model_name" style="color:deepskyblue;font-size:15px;"></b>
                                                         </div>

                                                         <div  id="mclaren_car_collection2_car10_info_block_year_info_block">
                                                              <b>Year:</b>
                                                              <span id="mclaren_car10_model_year"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car10_info_block_price_info_block">
                                                              <b>Price:</b>
                                                              <span id="mclaren_car10_model_price"></span>
                                                         </div>


                                                         <div  id="mclaren_car_collection2_car10_info_block_maxspeed_info_block">
                                                              <b>Max-Speed:</b><br>
                                                              <span id="mclaren_car10_model_speed"></span>
                                                         </div>


                                                         <br>

                                                       <section>
                                                            <a id="explore_mclaren_car10_button"
                                                            title="Explore Car"
                                                            name="explore_car_butt" type="button"
                                                            class="btn btn-success text-white w3-hover-blue">
                                                            <i class="fa fa-search-plus"></i> EXPLORE</a>


                                                            <a id="order_mclaren_car10_button"
                                                            title="Order Car" href="Car_order_form.php" target="_blank"
                                                            name="order_car_butt" type="button"
                                                            class="btn btn-info text-white w3-hover-orange w3-right"
                                                            onclick="open_order_form_page('Mclaren P1_4')">
                                                            <i class="fa fa-shopping-cart"></i> ORDER</a>



                                                       </section>



                            </div>
                    </div>








                                         
        </div>
 </div>





 <script>




load_data("Mclaren_brand.json");

async function load_data(file){
    var obj1 = await fetch(file);
    var data = await obj1.text();
    var parse_data = JSON.parse(data);
    document.getElementById("mclaren_car1_img").src = parse_data.Model_collection.Model1.Image_src;
    document.getElementById("mclaren_car1_model_name").innerHTML = parse_data.Model_collection.Model1.Name;
    document.getElementById("mclaren_car1_model_year").innerHTML = parse_data.Model_collection.Model1.Year[0];
    document.getElementById("mclaren_car1_model_price").innerHTML = parse_data.Model_collection.Model1.Price[0];
    document.getElementById("mclaren_car1_model_speed").innerHTML = parse_data.Model_collection.Model1.Speed;




    document.getElementById("mclaren_car2_img").src = parse_data.Model_collection.Model2.Image_src;
    document.getElementById("mclaren_car2_model_name").innerHTML = parse_data.Model_collection.Model2.Name;
    document.getElementById("mclaren_car2_model_year").innerHTML = parse_data.Model_collection.Model2.Year[0];
    document.getElementById("mclaren_car2_model_price").innerHTML = parse_data.Model_collection.Model2.Price[0];
    document.getElementById("mclaren_car2_model_speed").innerHTML = parse_data.Model_collection.Model2.Speed;



    document.getElementById("mclaren_car3_img").src = parse_data.Model_collection.Model3.Image_src;
    document.getElementById("mclaren_car3_model_name").innerHTML = parse_data.Model_collection.Model3.Name;
    document.getElementById("mclaren_car3_model_year").innerHTML = parse_data.Model_collection.Model3.Year[0];
    document.getElementById("mclaren_car3_model_price").innerHTML = parse_data.Model_collection.Model3.Price[0];
    document.getElementById("mclaren_car3_model_speed").innerHTML = parse_data.Model_collection.Model3.Speed;




    document.getElementById("mclaren_car4_img").src = parse_data.Model_collection.Model4.Image_src;
    document.getElementById("mclaren_car4_model_name").innerHTML = parse_data.Model_collection.Model4.Name;
    document.getElementById("mclaren_car4_model_year").innerHTML = parse_data.Model_collection.Model4.Year[0];
    document.getElementById("mclaren_car4_model_price").innerHTML = parse_data.Model_collection.Model4.Price[0];
    document.getElementById("mclaren_car4_model_speed").innerHTML = parse_data.Model_collection.Model4.Speed;



    document.getElementById("mclaren_car5_img").src = parse_data.Model_collection.Model5.Image_src;
    document.getElementById("mclaren_car5_model_name").innerHTML = parse_data.Model_collection.Model5.Name;
    document.getElementById("mclaren_car5_model_year").innerHTML = parse_data.Model_collection.Model5.Year[0];
    document.getElementById("mclaren_car5_model_price").innerHTML = parse_data.Model_collection.Model5.Price[0];
    document.getElementById("mclaren_car5_model_speed").innerHTML = parse_data.Model_collection.Model5.Speed;






    document.getElementById("mclaren_car6_img").src = parse_data.Model_collection.Model6.Image_src;
    document.getElementById("mclaren_car6_model_name").innerHTML = parse_data.Model_collection.Model6.Name;
    document.getElementById("mclaren_car6_model_year").innerHTML = parse_data.Model_collection.Model6.Year[0];
    document.getElementById("mclaren_car6_model_price").innerHTML = parse_data.Model_collection.Model6.Price[0];
    document.getElementById("mclaren_car6_model_speed").innerHTML = parse_data.Model_collection.Model6.Speed;





    document.getElementById("mclaren_car7_img").src = parse_data.Model_collection.Model7.Image_src;
    document.getElementById("mclaren_car7_model_name").innerHTML = parse_data.Model_collection.Model7.Name;
    document.getElementById("mclaren_car7_model_year").innerHTML = parse_data.Model_collection.Model7.Year[0];
    document.getElementById("mclaren_car7_model_price").innerHTML = parse_data.Model_collection.Model7.Price[0];
    document.getElementById("mclaren_car7_model_speed").innerHTML = parse_data.Model_collection.Model7.Speed;





    document.getElementById("mclaren_car8_img").src = parse_data.Model_collection.Model8.Image_src;
    document.getElementById("mclaren_car8_model_name").innerHTML = parse_data.Model_collection.Model8.Name;
    document.getElementById("mclaren_car8_model_year").innerHTML = parse_data.Model_collection.Model8.Year[0];
    document.getElementById("mclaren_car8_model_price").innerHTML = parse_data.Model_collection.Model8.Price[0];
    document.getElementById("mclaren_car8_model_speed").innerHTML = parse_data.Model_collection.Model8.Speed;





    document.getElementById("mclaren_car9_img").src = parse_data.Model_collection.Model9.Image_src;
    document.getElementById("mclaren_car9_model_name").innerHTML = parse_data.Model_collection.Model9.Name;
    document.getElementById("mclaren_car9_model_year").innerHTML = parse_data.Model_collection.Model9.Year[0];
    document.getElementById("mclaren_car9_model_price").innerHTML = parse_data.Model_collection.Model9.Price[0];
    document.getElementById("mclaren_car9_model_speed").innerHTML = parse_data.Model_collection.Model9.Speed;




    document.getElementById("mclaren_car10_img").src = parse_data.Model_collection.Model10.Image_src;
    document.getElementById("mclaren_car10_model_name").innerHTML = parse_data.Model_collection.Model10.Name;
    document.getElementById("mclaren_car10_model_year").innerHTML = parse_data.Model_collection.Model10.Year[0];
    document.getElementById("mclaren_car10_model_price").innerHTML = parse_data.Model_collection.Model10.Price[0];
    document.getElementById("mclaren_car10_model_speed").innerHTML = parse_data.Model_collection.Model10.Speed;

}



var get_mclaren_car_collection = document.getElementsByClassName("mclaren_car_collection");
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
    
     if(n>get_mclaren_car_collection.length){index1 = 1};
     if(n<1){index1 = get_mclaren_car_collection.length};

     for(let i = 0; i<get_mclaren_car_collection.length;i++){
        get_mclaren_car_collection[i].style.display = "none";
     }
     for(let o = 0; o<get_changepage_butt.length;o++){
        get_changepage_butt[o].className = get_changepage_butt[o].className.replace(" w3-green","");
     }
     get_mclaren_car_collection[index1-1].style.display = "block";
     get_changepage_butt[index1 -1].className += " w3-green";
} 







function open_order_form_page(car_model_name){
    if(typeof(Storage)!=="undefined"){
        if(car_model_name == "Mclaren 600LT Green"){
                     localStorage.setItem("car_model","Mclaren 600LT Green");
                     localStorage.setItem("car_price","$256,500");


        }else if(car_model_name == "Mclaren 620r"){
                     localStorage.setItem("car_model","Mclaren 620r");
                     localStorage.setItem("car_price","$299,000");



        }else if(car_model_name == "Mclaren 720S GT3X"){
                     localStorage.setItem("car_model","Mclaren 720S GT3X");
                     localStorage.setItem("car_price","$299,000");



        }else if(car_model_name == "Mclaren 600LT"){
                     localStorage.setItem("car_model","Mclaren 600LT");
                     localStorage.setItem("car_price","$256,500");


        }else if(car_model_name == "Mclaren 720S Spider"){
                     localStorage.setItem("car_model","Mclaren 720S Spider");
                     localStorage.setItem("car_price","$299,000");



        }else if(car_model_name == "Mclaren 720S"){
                     localStorage.setItem("car_model","Mclaren 720S");
                     localStorage.setItem("car_price","$299,000");


        }else if(car_model_name == "Mclaren P1"){
                     localStorage.setItem("car_model","Mclaren P1");
                     localStorage.setItem("car_price","$1,999,990");


        }else if(car_model_name == "Mclaren P1_2"){
                     localStorage.setItem("car_model","Mclaren P1_2");
                     localStorage.setItem("car_price","$1,699,990");


        }else if(car_model_name == "Mclaren P1_3"){
                     localStorage.setItem("car_model","Mclaren P1_3");
                     localStorage.setItem("car_price","$2,199,990");


        }else if(car_model_name == "Mclaren P1_4"){
                     localStorage.setItem("car_model","Mclaren P1_4");
                     localStorage.setItem("car_price","$2,399,990");
        }else{
                     localStorage.setItem("car_model","");
                     localStorage.setItem("car_price","");
        }
    }

    
}

 </script>




</main>



    </body>


   


    <footer>

    </footer>




</html>
        