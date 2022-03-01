
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


    <meta name="description"   content="THIS IS TGH CAR DEALERSHIP WEBSITE">


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
[id="customer_info_table"]{
  width:500px;
}

[id="customer_info_table"] tr,th,td{
  border:6px solid greenyellow;
  font-size:20px;
  padding:20px;

}

[id="customer_info_table"] th{
  text-align:center;
}

[id="customer_info_table"] td{
  text-align:left;
}

[id="car_info_table"] {
  width:500px;
}


[id="car_info_table"] tr,th,td{
  border:3px solid aqua;
  font-size:20px;
  padding:5px;

}

           
         </style>
    </head>


    <body>

      <header>
      </header>


      <main>
 

      <img src="image/car_wallpaper7.jpg" width="100%" height="100%" 
      style="position:fixed;top:0;left:0;right:0;bottom:0;z-index:1;">
      

      <?php
      $name1 = $address1 = $email1 = $phone_number1 = "";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name1 = check_func($_POST["name1"]);
            $address1 = check_func($_POST["address1"]);
            $email1 = check_func($_POST["email1"]);
            $phone_number1 = check_func($_POST["tel1"]);
      }

      function check_func($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      
      ?>

      <div class="w3-black " style="
      width:1000px;border:2px solid aqua;padding:20px;position:fixed;
      left:200px;z-index:2;">
           
            <div class="row" style="border-bottom:4px double aqua;
            box-shadow:0px 0px 6px 6px white;"> 
                <div class="col">
                <img src="image/thank_for_order_logo.png"
                width="300px" height="200px">

               
                </div>

                <div class="col">
                <img src="image/quick_order_logo.png"
                width="300px" height="200px">
                </div>

                <div class="col" style="text-align:center;">
               
                <span >
                <i class="fa fa-shopping-cart w3-text-aqua" style="font-size:40px"></i> 
                <i class="fa fa-calendar-check-o" style="font-size:40px"></i>
                </span>


                <h1 style="color:yellow;">ORDER COMPLETE!!!</h1>

                    <span style="font-size:25px;">
                    <b>Order Date: </b><b id="order_date" ></b><br>
                    <b>Order Time: </b><b id="order_time" ></b>
                    </span>
                </div>

            </div>

            <br>

            <h4 style="text-decoration:underline;text-shadow:3px 3px 5px yellow;
            text-align:center;">
            We are going to deliver your car to your house in 7-10 days
            </h4>
            <br>



            <div class="row">
                  <div class="col">
                       

                        <table id="customer_info_table">
                                <tr>
                                     <th style="color:aqua;">ORDER INFORMATION</th>
                                </tr>

                                <tr>
                                    <td>Customer Name: <?php echo $name1;?> </td>
                                </tr>
                                <tr>
                                    <td>Customer Address: <?php echo $address1;?></td>
                                </tr>
                                <tr>
                                    <td>Customer Email: <?php echo $email1;?></td>
                                </tr>
                                <tr>
                                    <td>Customer Phone Number: <?php echo $phone_number1;?></td>
                                </tr>
                        </table>





                        <table id="car_info_table">
                              

                              <tr>
                                  <td>Car Model: 
                                      <b id="order_car_model">
                                        
                                      </b> 
                                  </td>
                                  <td>Car Price: 
                                       <b id="order_car_price">
                                       
                                      </b> 
                                  </td>
                              </tr>
                             
                             
                      </table>


                     



                  </div>




                  <div class="col">
                         <img id="order_car_image" width="400px" height="300px">
                         
                  </div>
            </div>
          

      </div>



      <script src="protection_secure/security_unlock_content_pass_key.js"></script>
     
                     

              <script>
              document.getElementById("order_date").innerHTML  = new Date().toLocaleDateString();
              document.getElementById("order_time").innerHTML  = new Date().toLocaleTimeString();

              var order_car_model_info = document.getElementById("order_car_model");
              var order_car_price_info = document.getElementById("order_car_price");

              order_car_model_info.innerHTML = localStorage.getItem("car_model");
              order_car_price_info.innerHTML = localStorage.getItem("car_price");



class car_collection{
    constructor(key,pass){
      this.key = key;
      this.pass = pass;
    }
    car_collection_block(pass_para){
      let car_collection = {
           Bugatti: {
                    "Model1":{
                        "Name": "Bugatti chiron V8",
                        "Condition": ["old","new"],
                    
                        "Year": [
                        "2022","2021","2020","2019",
                        "2018","2017","2016","2015",
                        "2014","2013","2012","2011",
                        "2010","2009","2008","2007"    
                        ],
                            "Speed":"261 m/h | 490.484 km/h",

                            "Price":["$3,300,000","","",""],
                            "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti_chiron2.jpg"
                    
                    


                    },



                    "Model2": {
                                    "Name": "Bugatti chiron V9",
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"261 m/h | 490.484 km/h",

                                        "Price":["$4,635,979","","",""],
                                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti_chiron3.jpg"
                                    
                                

                    },



                    "Model3": {
                                "Name": "Bugatti chiron V12",
                                "Condition": ["old","new"],
                            
                                "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                "Speed":"261 m/h | 490.484 km/h",

                                "Price":["$4,670,689","","",""],
                                "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti7.jpg"
                                
                    

                    },


                    "Model4": {
                                "Name": "Bugatti chiron V15",
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                "Speed":"261 m/h | 490.484 km/h",

                                "Price":["$4,973,529","","",""],
                                "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti8.jpg"
                        


                    },



                    "Model5": {
                        "Name": "Bugatti chiron V20",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$4,373,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti5.jpg"



                    },







                    "Model6": {
                        "Name": "Bugatti chiron V23",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$4,343,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti6.jpg"



                    },






                    "Model7": {
                        "Name": "Bugatti chiron V26",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$3,373,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti9.jpg"



                    },







                    "Model8": {
                        "Name": "Bugatti chiron V30",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$4,673,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti_chiron4.jpg"



                    },








                    "Model9": {
                        "Name": "Bugatti chiron V33",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$3,973,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugatti_chiron_pur_sport.jpg"



                    },






                    "Model10": {
                        "Name": "Bugatti chiron V35",
                        "Condition": ["old","new"],
                    
                        "Year": [
                            "2022","2021","2020","2019",
                            "2018","2017","2016","2015",
                            "2014","2013","2012","2011",
                            "2010","2009","2008","2007"    
                            ],
                        "Speed":"261 m/h | 490.484 km/h",

                        "Price":["$4,582,529","","",""],
                        "Image_src": "/web_develop_project/TGH_Car_Dealership/image/bugattilavoiturenoire.jpg"



                    }






            },


           Lamborghini: {
                    "Model1":{
                                    "Name":"Lamborghini Essenza",
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"217 m/h | 350 km/h",

                                        "Price":["$2,500,000","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_essenza.jpg"
                                
                                


                    },



                    "Model2": {
                                    "Name":"Lamborghini Sian 22",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"217 m/h | 350 km/h",

                                        "Price":["$2,640,000","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_sian.jpg"
                                
                                

                    },





                    "Model3": {
                                    "Name":"Lamborghini Veneno 22",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"221 m/h | 355 km/h",

                                        "Price":["$8,270,000","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_veneno.jpg"
                                
                                

                    },



                    "Model4": {
                                    "Name":"Lamborghini Huracan 22",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"201 m/h | 323 km/h",

                                        "Price":["$327,838","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/Lamborghini_Huracan1.jpg"
                                
                                

                    },




                    "Model5": {
                                    "Name":"Lamborghini Aventador 22",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"217 m/h | 350 km/h",

                                        "Price":["$517,770","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_aventador1.jpg"
                                
                                

                    },


                    "Model6": {
                                    "Name":"Lamborghini Veneno 21",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"221 m/h | 355 km/h",

                                        "Price":["$8,270,000","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_veneno2.jpg"
                                
                                

                    },






                    "Model7": {
                                    "Name":"Lamborghini Aventador 21",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"217 m/h | 350 km/h",

                                        "Price":["$517,770","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_aventador2.jpg"
                                
                                

                    },






                    "Model8": {
                                    "Name":"Lamborghini Huracan 21",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"201 m/h | 323 km/h",

                                        "Price":["$327,838","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/Lamborghini_Huracan2.jpg"
                                
                                

                    },




                    "Model9": {
                                    "Name":"Lamborghini Aventador 20",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"217 m/h | 350 km/h",

                                        "Price":["$517,770","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/lamborghini_aventador3.jpg"
                                
                                

                    },






                    "Model10": {
                                    "Name":"Lamborghini Huracan 20",
                            
                                    "Condition": ["old","new"],
                                
                                    "Year": [
                                    "2022","2021","2020","2019",
                                    "2018","2017","2016","2015",
                                    "2014","2013","2012","2011",
                                    "2010","2009","2008","2007"    
                                    ],
                                        "Speed":"201 m/h | 323 km/h",

                                        "Price":["$327,838","","",""],
                                        "Image_src":"/web_develop_project/TGH_Car_Dealership/image/Lamborghini_Huracan3.jpg"
                                
                                

                    }






           } ,


            Mclaren: {
                                                    
                        "Model1":{
                                "Name":"Mclaren 600LT Green",
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"204 m/h | 328 km/h",

                                    "Price":["$256,500","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_600LT_green.jpg"
                            
                            


                        },



                        "Model2": {
                                "Name":"Mclaren 620r",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"200 m/h | 322 km/h",

                                    "Price":["$299,000","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_620r.jpg"
                            
                            

                        },





                        "Model3": {
                                "Name":"Mclaren 720S GT3X",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"212 m/h | 341 km/h",

                                    "Price":["$299,000","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_720S_GT3X.jpg"
                            
                            

                        },



                        "Model4": {
                                "Name":"Mclaren 600LT",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"204 m/h | 328 km/h",

                                    "Price":["$256,500","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_600LT.jpg"
                            
                            

                        },




                        "Model5": {
                                "Name":"Mclaren 720S Spider",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"212 m/h | 341 km/h",

                                    "Price":["$299,000","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_720S_spider.jpg"
                            
                            

                        },


                        "Model6": {
                                "Name":"Mclaren 720S",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"212 m/h | 341 km/h",

                                    "Price":["$299,000","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_720S.jpg"
                            
                            

                        },






                        "Model7": {
                                "Name":"Mclaren P1",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"217 m/h | 350 km/h",

                                    "Price":["$1,999,990","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_p1.jpg"
                            
                            

                        },






                        "Model8": {
                                "Name":"Mclaren P1_2",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"217 m/h | 350 km/h",

                                    "Price":["$1,699,990","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/Mclaren_p1_2.jpg"
                            
                            

                        },




                        "Model9": {
                                "Name":"Mclaren P1_3",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"217 m/h | 350 km/h",

                                    "Price":["$2,199,990","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_p1_3.jpg"
                            
                            

                        },






                        "Model10": {
                                "Name":"Mclaren P1_4",
                        
                                "Condition": ["old","new"],
                            
                                "Year": [
                                "2022","2021","2020","2019",
                                "2018","2017","2016","2015",
                                "2014","2013","2012","2011",
                                "2010","2009","2008","2007"    
                                ],
                                    "Speed":"217 m/h | 350 km/h",

                                    "Price":["$2,399,990","","",""],
                                    "Image_src":"/web_develop_project/TGH_Car_Dealership/image/mclaren_p1_4.jpg"
                            
                            

                        }






            },

            Pagani: {
                    "Model1":{
                                        "Name":"Pagani Huayra Roadster BC",
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"238 m/h | 383 km/h",

                                            "Price":["$4,253,780","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/2020_Pagani_Huayra_Roadster_BC.jpg"
                                    
                                    


                    },



                    "Model2": {
                                        "Name":"Pagani Zonda",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"233 m/h | 375 km/h",

                                            "Price":["$23,640,000","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_zonda.jpg"
                                    
                                    

                    },





                    "Model3": {
                                        "Name":"Pagani Imola 21",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"240 m/h | 386 km/h",

                                            "Price":["$5,570,990","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_imola_21.jpg"
                                    
                                    

                    },



                    "Model4": {
                                        "Name":"Pagani Huayra 21",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"230 m/h | 370 km/h",

                                            "Price":["$2,627,838","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra_21.jpg"
                                    
                                    

                    },




                    "Model5": {
                                        "Name":"Pagani Zonda 2",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"233 m/h | 375 km/h",

                                            "Price":["$23,517,770","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_zonda2.jpg"
                                    
                                    

                    },


                    "Model6": {
                                        "Name":"Pagani Huayra",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"230 m/h | 370 km/h",

                                            "Price":["$3,270,000","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra.jpg"
                                    
                                    

                    },






                    "Model7": {
                                        "Name":"Pagani Huayra 22",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"230 m/h | 370 km/h",

                                            "Price":["$3,517,770","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra_22.jpg"
                                    
                                    

                    },






                    "Model8": {
                                        "Name":"Pagani Huayra BC Roadster 2",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"238 m/h | 383 km/h",

                                            "Price":["$4,227,838","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra_bc_roadster_2.jpg"
                                    
                                    

                    },




                    "Model9": {
                                        "Name":"Pagani Huayra BC Roadster 3",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"238 m/h | 383 km/h",

                                            "Price":["$4,127,770","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra_bc_roadster_3.jpg"
                                    
                                    

                    },






                    "Model10": {
                                        "Name":"Pagani Huayra Lultimo",
                                
                                        "Condition": ["old","new"],
                                    
                                        "Year": [
                                        "2022","2021","2020","2019",
                                        "2018","2017","2016","2015",
                                        "2014","2013","2012","2011",
                                        "2010","2009","2008","2007"    
                                        ],
                                            "Speed":"236 m/h | 380 km/h",

                                            "Price":["$3,327,838","","",""],
                                            "Image_src":"/web_develop_project/TGH_Car_Dealership/image/pagani_huayra_lultimo.jpg"
                                    
                                    

                    }



            }
        }

        Object.defineProperties(car_collection,{
            Bugatti:{
                enumerable:true,
                configurable:false,
                writable:false
            },
            Lamborghini:{
                enumerable:true,
                configurable:false,
                writable:false
            },
            Mclaren:{
                enumerable:true,
                configurable:false,
                writable:false
            },
            Pagani:{
                enumerable:true,
                configurable:false,
                writable:false
            }

        });
        if(security_pass.includes(pass_para) == true){
            return car_collection;
        }
    }
}
var car_collection_obj = new car_collection(Math.floor(Math.random()*1000000000)+1);





console.log(car_collection_obj.car_collection_block('2304').Bugatti.Model1.Name);

           
          
            
              if(order_car_model_info.innerHTML == 'Bugatti Chiron V8'){
                   document.querySelectorAll("#order_car_image")[0].src =
                   car_collection_obj.car_collection_block('2304').Bugatti.Model1.Image_src;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V9'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model2.Image_src;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V12'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model3.Image_src;


              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V15'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model4.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V20'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model5.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V23'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model6.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V26'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model7.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V30'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model8.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V33'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model9.Image_src;

              }else if(order_car_model_info.innerHTML == 'Bugatti Chiron V35'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Bugatti.Model10.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Essenza'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model1.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Sian 22'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model2.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Veneno 22'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model3.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Huracan 22'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model4.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Aventador 22'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model5.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Veneno 21'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model6.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Aventador 21'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model7.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Huracan 21'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model8.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Aventador 20'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model9.Image_src;


              }else if(order_car_model_info.innerHTML == 'Lamborghini Huracan 20'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Lamborghini.Model10.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren 600LT Green'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model1.Image_src;



              }else if(order_car_model_info.innerHTML == 'Mclaren 620r'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model2.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren 720S GT3X'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model3.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren 600LT'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model4.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren 720S Spider'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model5.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren 720S'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model6.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren P1'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model7.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren P1_2'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model8.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren P1_3'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model9.Image_src;


              }else if(order_car_model_info.innerHTML == 'Mclaren P1_4'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Mclaren.Model10.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra Roadster BC'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model1.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Zonda'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model2.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Imola 21'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model3.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra 21'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model4.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Zonda 2'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model5.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model6.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra 22'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model7.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra BC Roadster 2'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model8.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra BC Roadster 3'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model9.Image_src;


              }else if(order_car_model_info.innerHTML == 'Pagani Huayra Lultimo'){
                document.querySelectorAll("#order_car_image")[0].src =
                car_collection_obj.car_collection_block('2304').Pagani.Model10.Image_src;


              
              }else{
                document.querySelectorAll("#order_car_image")[0].src =
                 "image/car_wallpaper1.jpg";
              }

            
          
          </script>

             

        
         
          
          
   


     </main>

 

   
     
      
    </body>


   


    <footer>


    </footer>




</html>
        








