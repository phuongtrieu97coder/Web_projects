var app1 = angular.module("app1",[]);
app1.controller("app1_controller",function($scope,$http){
       $http({
              method: "GET",
              url: "Bugatti_brand.json"
       }).then(function(response){
              $scope.bugatti1 = response.data.Model_collection.Model1;
              $scope.bugatti2 = response.data.Model_collection.Model2;
              $scope.bugatti3 = response.data.Model_collection.Model3;
              $scope.bugatti4 = response.data.Model_collection.Model4;
       },function(response){
              $scope.intro1 = "Sorry, there was an error loading your JSON file!!!";
       });

      $scope.car_price_count = function(){
             if($scope.car_amount_input_model>1){
                    return 3300000*$scope.car_amount_input_model;
             }else if($scope.car_amount_input_model==1){
                    return "3300000";
             }else{
                    return "3300000";
             }
      };
      $scope.car2_price_count = function(){
             if($scope.car_amount_input_model>1){
                    return 4635979*$scope.car_amount_input_model;
             }else if($scope.car_amount_input_model==1){
                    return "4635979";
             }else{
                    return "4635979";
             }
      };
      $scope.car3_price_count = function(){
             if($scope.car_amount_input_model>1){
                    return 4670689*$scope.car_amount_input_model;
             }else if($scope.car_amount_input_model==1){
                    return "4670689";
             }else{
                    return "4670689";
             }
      };
      $scope.car4_price_count = function(){
             if($scope.car_amount_input_model>1){
                    return 4973529*$scope.car_amount_input_model;
             }else if($scope.car_amount_input_model==1){
                    return "4973529";
             }else{
                    return "4973529";
             }
      };
});



