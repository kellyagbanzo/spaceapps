ApplicationMdl.controller('PanneauCtrl', function ($scope) {

    $scope.showField = false;

    $scope.generate = function (number) {


        var champ = [];

        for (var i=0; i<number; i++) {
            champ.push(i);
        }

        $scope.fieldNumbers = champ;
        $scope.reinitialiser = function() {
            $scope.nbre = 0;
            $scope.showField = false;
        };


        $scope.input = { fields: [] };
        $scope.evaluer = function () {

            $scope.input.fields.push('');

            var energieTotal = 0;

            for (var i=0; i< $scope.input.fields.length; i++) {
                energieTotal = energieTotal + $scope.input.fields[i];
            }

            console.log(energieTotal);

        };

        $scope.showField = true;



    }
});
