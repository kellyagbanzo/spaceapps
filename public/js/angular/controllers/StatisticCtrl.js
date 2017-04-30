APIConst.controller('StatisticCtrl', function ($scope, StatisticFactory) {

    /*
     =====================================================
     REFRESH STATISTIC DASHBOARD START
     =====================================================
     */
    var StatisticFactoryRequest = StatisticFactory.RefreshStatisticDashboard();

    console.log(StatisticFactory);

    $scope.RefreshStatisticDashboard = function () {

        $scope.StatisticLoading = true;

        StatisticFactoryRequest.then(function(response){

            $scope.statistic = {

                gain: response.gain,
                stock_voiture: response.categorie_voiture,
                stock_moto: response.categorie_moto,
                employe_number: response.employe_number

            };
            console.log($scope.statistic.stock_voiture);
            $scope.StatisticLoading = false;

        }).catch(function (response) {

            $scope.StatisticLoading = false;
            alert('echec du chargement. Consultez la console.');
            console.log(response);

        });

    };

    $scope.RefreshStatisticDashboard();

    /*
     =====================================================
     REFRESH STATISTIC DASHBOARD END
     =====================================================
     */


});
