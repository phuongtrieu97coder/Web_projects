app.directive("test1",function(){
    return {
        restrict: "E",
        template: "Hello"
    };
});

app.directive("test2",function(){
    return {
        restrict: "A",
        template: "Welcome"
    };
});
