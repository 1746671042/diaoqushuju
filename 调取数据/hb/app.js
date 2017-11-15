//模块化
var app = angular.module("myApp", []);
app.controller("listControler",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/listImage.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);
app.controller("searchController",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/listImage.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);



//自定义指令
app.directive("imageList",[function(){
    return {
        restrict:"EAC",
        templateUrl:"template/imageList.html",
        replace:true,
        scope:{
           image:"@forImage",
           title:"@forTitle",
           date:"=forDate"
        },
        transclude:true,
        controller:function($scope){
            $scope.getTitle = function(){
                alert($scope.title);
            }
        },
        link:function(scope,iElement,iAttr){
            var div = "<div>"+scope.title+"</div>";
            $(iElement[0]).append(div);
        }
    };    
}]);

