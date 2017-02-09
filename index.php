<!DOCTYPE html>
<html lang="en" ng-app="foodMeApp">
  <head>
    <title>Hello World</title>
<link rel="stylesheet" href="asset/css/bootstrap-theme.css">
<link rel="stylesheet" href="asset/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="asset/js/bootstrap.min.js" ></script>
<script src="asset/js/bootstrap.js" ></script>
<script src="asset/js/npm.js" ></script>
<script src="asset/js/app.js" ></script>
<script src="asset/js/angular.min.js"></script>
    <style type="text/css">
        .hb-maincontent{
            border: 1px #EEE solid;
            min-height: 500px;
            width: 100%;
            padding: 0px;
        }
        .padding0{
            padding: 0px;
           
        }
        .header{

           
        }
        .middle{
           min-height: 400px; 
           background-color: white;
        }
        .footer{
        min-height: 80px;
        background-color: slategrey;
        }
        </style>
  </head>
<body>
<my-app>
    <div  class="row">
        <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 hb-maincontent">
                <div class="col-md-12 col-sm-12 padding0 header">
                    <nav class="navbar navbar-default" ng-controller="NavbarController" style="border-radius: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
           </button>
        <a class="navbar-brand" href="#/"><i class="glyphicon glyphicon-home"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" ng-class="{active: routeIs('/')}"><a href="#/">Home</a></li>
        <li ng-class="{active: routeIs('/how-it-works')}"><a href="#/how-it-works">How it works</a></li>
        <li ng-class="{active: routeIs('/who-we-are')}"><a href="#/who-we-are">Who we are</a></li>
      
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li ng-class="{active: routeIs('/help')}"><a href="#/help">Help</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                </div>
                <div class="col-md-12 col-sm-12 padding0 middle">
                    <p style="text-align: center">Habib</p>
                </div>
                <div class="col-md-12 col-sm-12 padding0 footer">
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    
</my-app>
</body>
</html>
