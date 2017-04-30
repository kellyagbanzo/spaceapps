APIConst.controller('ProduitCtrl', function ($scope, $rootScope, $http, API_URL) {


    /*
     =====================================================
             REFRESH STATISTIC EVENT START
     =====================================================
     */
        $scope.RefreshStatisticEvent = function () {

            $rootScope.$broadcast('RefreshStatisticEventStart');

        };
    /*
     =====================================================
             REFRESH STATISTIC EVENT START
     =====================================================
     */



    /*
     =====================================================
             ACTION INDEX START / REFRESH TABLE START
     =====================================================
     */

        //$rootScope.$broadcast('RefreshStatisticEvent', DataToSend);

        $scope.RefreshStatisticAndTable = function () {

            $scope.RefreshStatisticEvent();

            $scope.loading = true;

            var url = API_URL + "produit";

            $http.get(url)
                .then(function (response) {
                    $scope.produits = response.data.produits;
                    $scope.categories = response.data.categories;
                    $scope.loading = false;
                })
                .catch(function (response) {
                    $scope.loading = false;
                    alert(response);
                });
        };

        $scope.RefreshStatisticAndTable();


    /*
     =====================================================
        ACTION INDEX START / REFRESH TABLE END
     =====================================================
     */



    /*
     ===================================================================
     SHOW FORM SWITH CREATE OR EDIT ACTION START / SHOW ACTION
     ===================================================================
     */

        $scope.toggle = function (ModalAction, id, form) {

            //renvois le type d'action et l'id sur le boutton enregistrer du modal dans la fonction save() en parametre
            $scope.ModalAction = ModalAction;
            $scope.id = id;

            switch (ModalAction) {

                case 'ajouter':

                    $scope.forme_action_titre = "Ajouter un nouveau produit";

                    //reset form before displaying
                    form.$setPristine();
                    form.$setUntouched();
                    $scope.produit = {};

                    break;

                case 'modifier':

                    $scope.forme_action_titre = "Modifier un produit";

                    /*
                     =====================================================
                     EDIT ACTION START
                     =====================================================
                     */
                    $http.get(API_URL + "produit/" + id, {}) //pour passer les trucs en parametre pour envoyer {}
                        .success(function (response) {
                            $scope.produit = response.produit;
                        })

                        .error(function (response) {
                            alert(response);
                        });
                    /*
                     =====================================================
                     EDIT ACTION START
                     =====================================================
                     */
                    break;

                default:
                    break;
            }
            $('#ProduitEditModal').modal('show');
        }

    /*
     =====================================================
     SHOW FORM SWITH CREATE OR EDIT ACTION END
     =====================================================
     */


    $scope.onSubmit = function (form, valid, action, id) {

        $scope.CleanForm = function () {

            form.$setPristine();
            form.$setUntouched();
            $scope.produit = {};

        }

        //si le formulaire est valide la requete sera lancé
        if (valid) {

            $scope.loading = true;

            //console.log(action + ' ' + id);
            var url;
            switch (action) {

                case 'ajouter':

                    url = API_URL + "produit";

                    /*
                     ============================================
                     STORE ACTION START
                     ============================================
                     */

                    $http.post(url, $scope.produit)
                        .then(function (response) {

                            $scope.CleanForm();
                            $scope.RefreshStatisticAndTable();

                        })
                        .catch(function (response) {

                            $scope.RefreshStatisticAndTable();
                            alert('Echec de l\'enregistrement, consulter la console.');
                            console.log(response);

                        })
                        .finally(function() {

                            $('#ProduitEditModal').modal('hide');

                        });

                    /*
                     ============================================
                     STORE ACTION END
                     ============================================
                     */


                    break;

                case 'modifier':
                    url = API_URL + "produit/" + id;

                    /*
                     ============================================
                     UPDATE ACTION START
                     ============================================
                     */

                    $http.put(url, $scope.produit)
                        .then(function (response) {

                            $scope.CleanForm();
                            $scope.RefreshStatisticAndTable();

                        })
                        .catch(function (response) {

                            alert('Echec de modification, consulter la console.');
                            console.log(response);

                        })
                        .finally(function() {

                            $('#ProduitEditModal').modal('hide');

                        });

                    /*
                     ============================================
                     UPDATE ACTION END
                     ============================================
                     */
                    break;

                default:
                    break;
            }


        } else {

            console.log('form invalid');

        }

    };

    $scope.ConfirmationSuppression = function (produit_id) {

        url = API_URL + "produit/" + produit_id;

        var confirmer = confirm('Etes-vous sur de vouloir supprimer le produit ' + produit_id + ' ?');
        if (confirmer) {
            $scope.loading = true;
            /*
             ============================================
             DELETE ACTION START
             ============================================
             */

            $http.delete(url)
                .then(function (response) {

                    $scope.RefreshStatisticAndTable();

                })
                .catch(function (response) {
                    $scope.RefreshStatisticAndTable();
                    alert('Echec de suppression, consulter la console.');
                    console.log(response);
                });

            /*
             ============================================
             DELETE ACTION END
             ============================================
             */
        }
        else {
            return 0;
        }

    };

});