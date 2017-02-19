scotchApp.config(function($routeProvider) {
    $routeProvider
            .when("/", {
                templateUrl: "home.html",
                controller: 'mainController',
            })

            .when('/about', {
                templateUrl: 'about.html',
                controller: 'aboutController'
            })
            .when('/contact', {
                templateUrl: 'contact.html',
                controller: 'contactController'
            });

});