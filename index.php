<!DOCTYPE html>

<html>

   <head>
       <title>Amazing Bosnia</title>
  <!-- CSS -->
 <!-- load bootstrap (bootswatch version) -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

     <!-- JS -->

    <!-- load angular, ngRoute, ngAnimate -->

    <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-route.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-animate.js"></script>
    <script src="app.js"></script>


    </head>


<!-- apply our angular app -->


<body ng-app="animateApp">

    <!-- inject our views using ng-view -->

    <!-- each angular controller applies a different class here -->

            <div class="page {{ pageClass }}" ng-view></div>

        
            <div id="about">
            
                <h2>Amazing places in Bosnia</h2>

     

     
  
     <img src="img/logobosna.png"  class="img-test" />
 
     
      
    
     
     </div>
            
            
     

   

</body>

</html>

