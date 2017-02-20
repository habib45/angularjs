    // create the module and name it scotchApp
    var scotchApp = angular.module('scotchApp', ['ngRoute']);



    // create the controller and inject Angular's $scope
    scotchApp.controller('mainController', function ($scope) {
        // create a message to display in our view
        $scope.message = 'Everyone come and see how good I look!';
    });

    scotchApp.controller('aboutController', function ($scope) {
        $scope.message = 'Look! I am an about page.';
    });

    scotchApp.controller('contactController', function ($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });
    scotchApp.controller('userController', function ($scope,$http) {
       
    $http.post('app/DB/empDetails.php').success(function(data){
    // Stored the returned data into scope
    $scope.details = data;
    // alert(data);
    });
       
      
       
    });
    scotchApp.controller('registrationController', function ($scope,$http) {
 
//        $scope.formModule = {};
    //            $scope.title='registration Page';


//        $scope.onsubmit = function () {
//            if ($scope.myForm.$valid) {
//                alert('our form is amazing');
//                console.log('Ok');
//            }
//        }

$scope.insertInfo = function(info){

$http.post('app/DB/insertDetails.php',{"user_name":info.username,"email":info.email,"password":info.password1,"name":info.name}).success(function(data){
if (data == true) {
$scope.myservice = viewUser;   
// Hide details insertion form
$('#empForm').css('display', 'none');
}
});
}



        $scope.message = 'Contact us! JK. This is just a demo.';



    });