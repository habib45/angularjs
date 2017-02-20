// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'page/home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/about', {
				templateUrl : 'page/about.html',
				controller  : 'aboutController'
			})

			// route for the contact page
			.when('/viewUser', {
				templateUrl : 'page/viewUser.php',
				controller  : 'userController'
			})
			// route for the contact page
			.when('/contact', {
				templateUrl : 'page/contact.html',
				controller  : 'contactController'
			})
			// route for the registration page
			.when('/registration', {
				templateUrl : 'page/registration.html',
				controller  : 'registrationController'
			});
	});