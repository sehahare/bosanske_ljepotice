var animateApp = angular.module('animateApp', ['ngRoute', 'ngAnimate']);


animateApp.config(function($routeProvider) {

    $routeProvider

        .when('/', {
            
                templateUrl: 'page-home.html',
                controller: 'mainController'
    })
    
         
        .when('/main', {
            
                templateUrl: 'page-home.html',
                controller: 'mainController'
    })
    
        .when('/rivers', {
            
                templateUrl: 'page-rivers.html',
                controller: 'listOfRivers'
    })

        .when('/mountains', {
        
                    templateUrl: 'page-mountains.html',
                    controller: 'listOfMountains'

        })

        .when('/contact', {

            templateUrl: 'page-contact.html',

            controller: 'contactController'

        });


});

animateApp.controller('listOfRivers',['$scope','$http', function($scope, $http){
    $http.get('rivers.json').then(function(response){
    $scope.rivers = response.data;
    
   $scope.pageClass ='page-rivers'; 
    }
    )}
]);




animateApp.controller('mainController', function($scope) {

    $scope.pageClass = 'page-home';

});





animateApp.controller('listOfMountains',['$scope','$http', function($scope, $http){
    $http.get('mountains.json').then(function(response){
    $scope.mountains = response.data;
    });
    $http.get('skiing.json').success(function(data) {
        $scope.skiing = data;
    });
    
   $scope.pageClass ='page-mountains'; 
    }
    
]);

animateApp.controller('contactController',['$scope', '$http', function($scope, $http) {
      $scope.insertdata=function(){
        $http.post('insert.php',{'fname': $scope.fname, 'lname': $scope.lname, 'city': $scope.city, 'number': $scope.number})
                .success(function(data){
                    console.log("data inserted successfully");
                });
        };
        
    
   $scope.pageClass = 'page-contact';

}]);

