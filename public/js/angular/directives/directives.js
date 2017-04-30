/*
 =====================================================
       DIRECTIVE <statistic-dashboard> CREATION START
 =====================================================
 */

ApplicationMdl.directive('showTable', function( ) {

    return {

        restrict: 'E',

        scope: {
            addrow: '='
        },

        templateUrl: 'js/angular/partials/statistic.html',

        controller: function($scope) {

            $scope.$on("RefreshStatisticEventStart", function () // on peut mettre [event, data] en parametre si des donnés sont envoyés a l'evenement
            {
                $scope.refreshstatistic = true;

            });

            $scope.$watch('refreshstatistic', function () {

                if ($scope.refreshstatistic == true) {

                    $scope.StatisticLoading = true;

                    var statisticUrl = API_URL + "statistic";

                    $http.get(statisticUrl)

                        .then(function (response) {

                            $scope.gain = response.data.gain;
                            $scope.stock_voiture = response.data.categorie_voiture;
                            $scope.stock_moto = response.data.categorie_moto;
                            $scope.employe_number = response.data.employe_number;

                            $scope.refreshstatistic = false;
                            $scope.StatisticLoading = false;

                        })
                        .catch(function (response) {

                            alert('echec du chargement. Consultez la console.');
                            console.log(response);

                        });

                }

            });

        }
        //Nous pouvons utiliser controller ou link
    };

});

/*
 =====================================================
      DIRECTIVE <statistic-dashboard> CREATION END
 =====================================================
 */
