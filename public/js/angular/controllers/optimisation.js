ApplicationMdl.controller('OptimisationCtrl', function ($scope) {
    function refresh() {
        $scope.app = {
            name: '',
            power: '',
            priorite: 1
        };
    }
    
    $scope.panneau = {
        sperficie: '',
        eff: ''
    };

    $scope.apps = [];

    $scope.app = {
        name: '',
        power: '',
        priorite: 1
    };

    $scope.add = function () {
        $scope.apps.push(angular.copy($scope.app));
        refresh();
    }
});