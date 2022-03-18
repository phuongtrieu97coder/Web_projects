<main ng-app="app1" ng-controller="app1_controller1">

   <test1  data1="item_list1" data2="add_item_func"
   data3 = "remove_item_func" data4="input_item" data5="match_item_error"
   style="width:500px;height:500px;"></test1>

<!--<test1> element will display data from different page that have been provided inside .directive() method
Data1,data2,data3,data4,data5 attributes is used to send data to that page

Ex: data1=”item_list1”  item_list1 can be a variable, object,array, or function that you provided in angular syntax on this site

If you use expression {{}} to call data1 like {{data1}} or use other angular attribute syntax like ng-click, ng-model, and so on and make them =”data1” from test2.php site, then it will take syntax of item_list1 inside angular syntax in test1.php site

If item_list1 is a function, you have to call {{item_list1()}} or ng-click=”item_list1()” on test2.php site

-->
<script>
 
 var app1 = angular.module("app1",[]);
 app1.controller("app1_controller1",function($scope){
      
        $scope.item_list1 = ["Watermelon","Spinach","Beef meat","Belt Pepper"];
                          
       $scope.add_item_func = function(){
              $scope.match_item_error = "";
              if(!$scope.input_item){return ;};
                                 
              if($scope.item_list1.indexOf($scope.input_item) == -1){
                     $scope.item_list1.push($scope.input_item);
              }else{
                     $scope.match_item_error = "Sorry, your item already exist in this list.";
              };
                                
       }
       $scope.remove_item_func = function(s){
                                 
            $scope.item_list1.splice(s,1);
       }
 });

 app1.directive("test1",function(){
      return {
             restrict:"E",
             scope:{
                  info:"=",
                  data1: "=",
                  data2: "=",
                  data3: "=",
                  data4: "=" ,
                  data5: "="

             },
             templateUrl:"test2.php"
      }
 });

   

</script>
