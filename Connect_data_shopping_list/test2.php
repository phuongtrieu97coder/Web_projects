Syntax in test2.php

 <style>

            [id="block0"]{
                       display:grid;
                       grid-template-columns:500px 500px; 
            }


                [id="block0_2"]{
                     background-color:rgba(216, 221, 221, 0.192);
                       width:500px;
                       font-size:25px;     
                       border:2px solid green;
                       position:relative;
                       top:10px;
                       box-shadow:3px 3px 3px green, -3px -3px 2px green;
                }

                [id="block0_2_1"]{
                       padding:20px;
                }

                [id="block0_2_2"]{
                      background-color:white;
                      padding:10px 20px;
                      list-style-type:none;
                }

                [class="block0_2_2_list"]{
                       position:relative;
                }

                [class="close_button"]{
                       position:absolute;
                       right:0;
                       border:none;
                       background-color:white;
                       margin-right:10px;
                }
                [class="close_button"]:hover{
                       background-color:red;
                }

                [id="block0_2_3"]{
                       padding:20px;
                }


         </style>
    </head>

    <body>

      <header>
      </header>

      <main>
   
     <div id="block0">
         <div id="block0_1">
              <img src="https://i.etsystatic.com/6142468/r/il/93cc24/616296467/il_570xN.616296467_6e18.jpg"
               width="500px" height="600px">
         </div>

         <div id="block0_2">
         <form  title="shopping list form"
            name="shopping_list1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
            method="post" target="_self" enctype="multipart/form-data"
            >
                  <div id="block0_2_1">
                      <h3>My Shopping List</h3>
                  </div>

                  

                  <ul id="block0_2_2" ng-repeat="item1 in data1">
                         <li class="block0_2_2_list">
                                {{item1}}  // call {{item_list1}}
                                <button class="close_button" title="close button" 
                                type="button"
                                ng-click="data3($index)">&times;</button>
                                  //call remove_item_func()
                         </li>
                  </ul>
                  
                  <div id="block0_2_3">
                         




                     <input id="input_shopping_item" type="text" name="shopping_item1"
                     ng-model="data4" //call input_item
                     placeholder="Add shopping items here"
                      style="width:350px;height:50px;padding-left:20px;" required>
                    
                     <button id="add_item_button" 
                     class="w3-btn w3-ripple w3-green w3-text-white w3-hover-blue"
                     type="button" name="add_item1" 
                     ng-click="data2()"  //call add_item_func()
                     style="position:relative;top:-3px;font-size:22px;">Add</button>

                     <b class="text-danger">{{data5}}</b> // call match_item_error

                     <br><br>

                     <input id="order_button" type="submit" name="order_butt1"
                     value="Order Now" class="btn btn-text-white btn-primary 
w3-hover-red btn-block"
                     style="font-size:25px;">

                     <br>
                  </div>

                   
                   

            </form>
         </div>
     </div>


