ApplicationMdl.controller('PanneauCtrl', function ($scope) {

    $scope.showField = false;
    $scope.reponse = false;

    $scope.generate = function (number) {

        if(parseInt(number) == 0) {
            return ;
        }


        var champ = [];

        for (var i=0; i<number; i++) {
            champ.push(i);
        }

        $scope.fieldNumbers = champ;
        $scope.reinitialiser = function() {
            $scope.nbre = 0;
            $scope.showField = false;
            $scope.reponse = false;
        };




        $scope.showField = true;


    }

    $scope.input = { fields: [] };
    $scope.evaluer = function () {

        $scope.input.fields.push('');

        var energieTotal = 0;

        for (var i=0; i< $scope.input.fields.length; i++) {
            energieTotal = energieTotal + $scope.input.fields[i];
        }

        if(parseInt(energieTotal) == 0) {
            return ;
        }

        $scope.energieTotal = parseInt(energieTotal) + parseInt(5);
        $scope.energieTotalConvertit = $scope.energieTotal * 0.001;
        $scope.superficie = $scope.energieTotal / 1.73;

        $scope.reponse = true;


    };
});
