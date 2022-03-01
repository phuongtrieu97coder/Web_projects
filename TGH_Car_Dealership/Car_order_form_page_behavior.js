$(document).ready(function(){
    $("[class='car_info_block']").css({
        "padding":"20px",
        "border-bottom":"2px solid green"
    });
    
});




var get_car_info_model_name =document.getElementById("car_info_block_model_name");
get_car_info_model_name.innerHTML = localStorage.getItem("car_model");

if(get_car_info_model_name.innerHTML == "Bugatti Chiron V8"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti1.Price[0]}}";


}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V9"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti2.Price[0]}}";



}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V12"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti3.Price[0]}}";


}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V15"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V23"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V26"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V30"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V33"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Bugatti Chiron V35"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count.bugatti_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{bugatti10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{bugatti10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{bugatti10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Essenza"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini1.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Sian 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini2.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Veneno 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini3.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Veneno 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Aventador 20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Lamborghini Huracan 20"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count2.lamborghini_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{lamborghini10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{lamborghini10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{lamborghini10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 600LT Green"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car1_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren1.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren1.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren1.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 620r"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car2_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren2.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren2.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren2.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S GT3X"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car3_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren3.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren3.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren3.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 600LT"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car4_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren4.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren4.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren4.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S Spider"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car5_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren5.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren5.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren5.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren 720S"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car6_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren6.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren6.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren6.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car7_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren7.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren7.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren7.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car8_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren8.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren8.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren8.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_3"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car9_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren9.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren9.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren9.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Mclaren P1_4"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count3.mclaren_car10_price() | currency}}";
  document.getElementById("car_info_image").src = "{{mclaren10.Image_src}}";
  document.getElementById("car_info_block_model_speed").innerHTML = "{{mclaren10.Speed}}";
  document.getElementById("car_info_block_model_price").innerHTML = "{{mclaren10.Price[0]}}";

  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra Roadster BC"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car1_price() | currency}}";
 function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model1.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model1.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model1.Price[0];
     
 }

  
}else if(get_car_info_model_name.innerHTML == "Pagani Zonda"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car2_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model2.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model2.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model2.Price[0];
     
 }
  
}else if(get_car_info_model_name.innerHTML == "Pagani Imola 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car3_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model3.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model3.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model3.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra 21"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car4_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model4.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model4.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model4.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Zonda 2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car5_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model5.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model5.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model5.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car6_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model6.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model6.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model6.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra 22"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car7_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model7.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model7.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model7.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra BC Roadster 2"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car8_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model8.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model8.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model8.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra BC Roadster 3"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car9_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model9.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model9.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model9.Price[0];
     
 }
  
  
}else if(get_car_info_model_name.innerHTML == "Pagani Huayra Lultimo"){
document.getElementById("total_car_order_price").innerHTML =  "{{car_price_count4.pagani_car10_price() | currency}}";
function load_data(parse_data){
       document.getElementById("car_info_image").src = parse_data.Model_collection.Model10.Image_src;
       document.getElementById("car_info_block_model_speed").innerHTML =parse_data.Model_collection.Model10.Speed;
       document.getElementById("car_info_block_model_price").innerHTML =parse_data.Model_collection.Model10.Price[0];
     
 }
  
  
}else {
  document.getElementById("car_info_image").src = "";
  document.getElementById("car_info_block_model_speed").innerHTML = "";
  document.getElementById("car_info_block_model_price").innerHTML = "";

  
}






function save_total_price(){
       var get_car_total_price = document.getElementById("total_car_order_price");
       if(typeof(Storage)!=="undefined"){
              localStorage.setItem("car_price",get_car_total_price.innerHTML);
       }
}



       var orderFormApp = angular.module("car_order_form_app",[]);
orderFormApp.controller("car_order_form_app_controller",function($scope,$http){
    $http({
           method: "GET",
           url: "Bugatti_brand.json"
    }).then(function(response){
           $scope.bugatti1 = response.data.Model_collection.Model1;
           $scope.bugatti2 = response.data.Model_collection.Model2;
           $scope.bugatti3 = response.data.Model_collection.Model3;
           $scope.bugatti4 = response.data.Model_collection.Model4;
           $scope.bugatti5 = response.data.Model_collection.Model5;
           $scope.bugatti6 = response.data.Model_collection.Model6;
           $scope.bugatti7 = response.data.Model_collection.Model7;
           $scope.bugatti8 = response.data.Model_collection.Model8;
           $scope.bugatti9 = response.data.Model_collection.Model9;
           $scope.bugatti10 = response.data.Model_collection.Model10;
    },function(response){
           $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
    });

   $scope.car_price_count = {
          bugatti_car1_price: function(){
           if($scope.car_amount_input_model>1 ){
                        return 3300000*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1 ){
                        return "3300000";
                 }else{
                        return "3300000";
                 }
          },

          bugatti_car2_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4635979*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4635979";
                 }else{
                        return "4635979";
                 }
          },




          bugatti_car3_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4670689*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4670689";
                 }else{
                        return "4670689";
                 }
          },



          bugatti_car4_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4973529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4973529";
                 }else{
                        return "4973529";
                 }
          },



          bugatti_car5_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4373529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4373529";
                 }else{
                        return "4373529";
                 }
          },




          bugatti_car6_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4343529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4343529";
                 }else{
                        return "4343529";
                 }
          },




          bugatti_car7_price: function(){
           if($scope.car_amount_input_model>1){
                        return 3373529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "3373529";
                 }else{
                        return "3373529";
                 }
          },





          bugatti_car8_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4673529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4673529";
                 }else{
                        return "4673529";
                 }
          },




          bugatti_car9_price: function(){
           if($scope.car_amount_input_model>1){
                        return 3973529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "3973529";
                 }else{
                        return "3973529";
                 }
          },




          bugatti_car10_price: function(){
           if($scope.car_amount_input_model>1){
                        return 4582529*$scope.car_amount_input_model;
                 }else if($scope.car_amount_input_model==1){
                        return "4582529";
                 }else{
                        return "4582529";
                 }
          }


         
        
   };






   $http({
    method: "GET",
    url: "Lamborghini_brand.json"
    }).then(function success(response){
           $scope.lamborghini1 = response.data.Model_collection.Model1;
           $scope.lamborghini2 = response.data.Model_collection.Model2;
           $scope.lamborghini3 = response.data.Model_collection.Model3;
           $scope.lamborghini4 = response.data.Model_collection.Model4;
           $scope.lamborghini5 = response.data.Model_collection.Model5;
           $scope.lamborghini6 = response.data.Model_collection.Model6;
           $scope.lamborghini7 = response.data.Model_collection.Model7;
           $scope.lamborghini8 = response.data.Model_collection.Model8;
           $scope.lamborghini9 = response.data.Model_collection.Model9;
           $scope.lamborghini10 = response.data.Model_collection.Model10;
    },function error(response){
           $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
    });







    $scope.car_price_count2 = {
           lamborghini_car1_price: function(){
            if($scope.car_amount_input_model>1 ){
                         return 2500000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1 ){
                         return "2500000";
                  }else{
                         return "2500000";
                  }
           },

           lamborghini_car2_price: function(){
            if($scope.car_amount_input_model>1){
                         return 2640000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "2640000";
                  }else{
                         return "2640000";
                  }
           },




           lamborghini_car3_price: function(){
            if($scope.car_amount_input_model>1){
                         return 8270000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "8270000";
                  }else{
                         return "8270000";
                  }
           },



           lamborghini_car4_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           },



           lamborghini_car5_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },




           lamborghini_car6_price: function(){
            if($scope.car_amount_input_model>1){
                         return 8270000*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "8270000";
                  }else{
                         return "8270000";
                  }
           },




           lamborghini_car7_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },





           lamborghini_car8_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           },




           lamborghini_car9_price: function(){
            if($scope.car_amount_input_model>1){
                         return 517770*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "517770";
                  }else{
                         return "517770";
                  }
           },




           lamborghini_car10_price: function(){
            if($scope.car_amount_input_model>1){
                         return 327838*$scope.car_amount_input_model;
                  }else if($scope.car_amount_input_model==1){
                         return "327838";
                  }else{
                         return "327838";
                  }
           }


          
         
    };









    $http({
       method: "GET",
       url: "Mclaren_brand.json"
       }).then(function success(response){
              $scope.mclaren1 = response.data.Model_collection.Model1;
              $scope.mclaren2 = response.data.Model_collection.Model2;
              $scope.mclaren3 = response.data.Model_collection.Model3;
              $scope.mclaren4 = response.data.Model_collection.Model4;
              $scope.mclaren5 = response.data.Model_collection.Model5;
              $scope.mclaren6 = response.data.Model_collection.Model6;
              $scope.mclaren7 = response.data.Model_collection.Model7;
              $scope.mclaren8 = response.data.Model_collection.Model8;
              $scope.mclaren9 = response.data.Model_collection.Model9;
              $scope.mclaren10 = response.data.Model_collection.Model10;
       },function error(response){
              $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
       });
   
   
   
   
   
   
   
       $scope.car_price_count3 = {
              mclaren_car1_price: function(){
               if($scope.car_amount_input_model>1 ){
                            return 265500*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1 ){
                            return "265500";
                     }else{
                            return "265500";
                     }
              },
              mclaren_car2_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car3_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
              mclaren_car4_price: function(){
               if($scope.car_amount_input_model>1){
                            return 256500*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "256500";
                     }else{
                            return "256500";
                     }
              },
   
   
   
              mclaren_car5_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car6_price: function(){
               if($scope.car_amount_input_model>1){
                            return 299000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "299000";
                     }else{
                            return "299000";
                     }
              },
   
   
   
   
              mclaren_car7_price: function(){
               if($scope.car_amount_input_model>1){
                            return 1999990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "1999990";
                     }else{
                            return "1999990";
                     }
              },
   
   
   
   
   
              mclaren_car8_price: function(){
               if($scope.car_amount_input_model>1){
                            return 1699990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "1699990";
                     }else{
                            return "1699990";
                     }
              },
   
   
   
   
              mclaren_car9_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2199990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2199990";
                     }else{
                            return "2199990";
                     }
              },
   
   
   
   
              mclaren_car10_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2399990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2399990";
                     }else{
                            return "2399990";
                     }
              }
   
   
             
            
       };





     




       
       $scope.car_price_count4 = {
              pagani_car1_price: function(){
               if($scope.car_amount_input_model>1 ){
                            return 4253780*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1 ){
                            return "4253780";
                     }else{
                            return "4253780";
                     }
              },
              pagani_car2_price: function(){
               if($scope.car_amount_input_model>1){
                            return 23640000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "23640000";
                     }else{
                            return "23640000";
                     }
              },
   
   
   
   
              pagani_car3_price: function(){
               if($scope.car_amount_input_model>1){
                            return 5570990*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "5570990";
                     }else{
                            return "5570990";
                     }
              },
   
   
   
              pagani_car4_price: function(){
               if($scope.car_amount_input_model>1){
                            return 2627838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "2627838";
                     }else{
                            return "2627838";
                     }
              },
   
   
   
              pagani_car5_price: function(){
               if($scope.car_amount_input_model>1){
                            return 23517770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "23517770";
                     }else{
                            return "23517770";
                     }
              },
   
   
   
   
              pagani_car6_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3270000*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3270000";
                     }else{
                            return "3270000";
                     }
              },
   
   
   
   
              pagani_car7_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3517770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3517770";
                     }else{
                            return "3517770";
                     }
              },
   
   
   
   
   
              pagani_car8_price: function(){
               if($scope.car_amount_input_model>1){
                            return 4227838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "4227838";
                     }else{
                            return "4227838";
                     }
              },
   
   
   
   
              pagani_car9_price: function(){
               if($scope.car_amount_input_model>1){
                            return 4127770*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "4127770";
                     }else{
                            return "4127770";
                     }
              },
   
   
   
   
              pagani_car10_price: function(){
               if($scope.car_amount_input_model>1){
                            return 3327838*$scope.car_amount_input_model;
                     }else if($scope.car_amount_input_model==1){
                            return "3327838";
                     }else{
                            return "3327838";
                     }
              }
   
   
             
            
       };







  
});



