/*
 =====================================================
               STATISTIC DASHBOARD FACTORY
 =====================================================
 */

ApplicationMdl.factory('StatisticFactory', function ($http, API_URL) {
    var factory = {

        RefreshStatisticDashboard: function () {

            var url = API_URL + "produit";

            return $http.get(url)
                .then(function (response) {

                    //var StatisticFactoryContent = {
                    //
                    //    gain: response.data.gain,
                    //    stock_voiture: response.data.categorie_voiture,
                    //    stock_moto: response.data.categorie_moto,
                    //    employe_number: response.data.employe_number
                    //
                    //};
                    //
                    //console.log(StatisticFactoryContent);
                    return response.data;
            })
                .catch(function (response) {

                    alert('echec du chargement. Consultez la console.');
                    //console.log(response);
                });

        }
    };

    //console.log(factory.RefreshStatisticDashboard());

    return factory;
});