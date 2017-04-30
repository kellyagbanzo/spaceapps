/*Create API*/
var ApplicationMdl = angular.module('sunshine', ['ngRoute','ngResource','alexjoffroy.angular-loaders']);

var APIConst = ApplicationMdl.constant('API_URL','http://127.0.0.1:8000/api/');


//ApplicationMdl.run(function($rootScope) {
//        $rootScope.refreshstatistic = false;
//});
