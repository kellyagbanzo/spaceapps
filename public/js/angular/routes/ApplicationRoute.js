ApplicationMdl.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'js/angular/views/home.html',
        })
        .when('/accueil', {
            templateUrl: 'js/angular/views/home.html',
        })
        .when('/panneaux', {
            templateUrl: 'js/angular/views/panneaux/searchForm.html',
            controller: 'PanneauCtrl'
        })
        .when('/optimisation', {
            templateUrl: 'js/angular/views/optimisation/index.html',
            controller: 'OptimisationCtrl'
        })
        .otherwise({redirectTo: '/'})
});