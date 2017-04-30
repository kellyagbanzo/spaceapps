APIConst.controller('ProduitCtrl', function ($scope, $rootScope, $http, API_URL, ProductFactory) {


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

        //Refresh statistic
        $scope.RefreshStatisticEvent();


        //Refresh table
        $scope.loading = true;

        var ProduitUrl = API_URL + "produit";

        ProductFactory.all().$promise.then(function(response) {

            $scope.produits = response[0];
            $scope.categories = response[1];
            $scope.loading = false;

        }).catch(function() {

            alert('echec de l\'enregistrement. Consultez la console.');
            $scope.loading = false;
            console.log(error);

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

        $scope.resetForm = function () {

            form.$setPristine();
            form.$setUntouched();
            $scope.produit = {};

        };

        //renvois le type d'action et l'id sur le boutton enregistrer du modal dans la fonction save() en parametre
        $scope.ModalAction = ModalAction;
        $scope.id = id;

        switch (ModalAction) {

            case 'ajouter':

                $scope.forme_action_titre = "Ajouter un nouveau produit";

                //reset form before displaying
                $scope.resetForm();

                break;

            case 'modifier':

                $scope.forme_action_titre = "Modifier un produit";

                /*
                 =====================================================
                            EDIT ACTION START
                 =====================================================
                 */

                ProductFactory.get({ id: id }, function(response) {

                    $scope.produit = response[0];

                }, function(error) {

                    alert('echec du chargement du produit. Consultez la console.');
                    $scope.loading = false;
                    console.log(error);

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

                    /*
                     ============================================
                                 STORE ACTION START
                     ============================================
                     */


                    ProductFactory.create($scope.produit, function(response) {

                        $scope.CleanForm();
                        $scope.RefreshStatisticAndTable();
                        $('#ProduitEditModal').modal('hide');

                    }, function(error) {

                        $scope.CleanForm();
                        $('#ProduitEditModal').modal('hide');
                        alert('Echec de l\'enregistrement, consulter la console.');
                        console.log(error);

                    });

                    /*
                     ============================================
                                    STORE ACTION END
                     ============================================
                     */


                    break;

                case 'modifier':

                    /*
                     ============================================
                                 UPDATE ACTION START
                     ============================================
                     */

                    ProductFactory.update($scope.produit,function(response) {

                        $scope.CleanForm();
                        $scope.RefreshStatisticAndTable();
                        $('#ProduitEditModal').modal('hide');

                    } , function(error) {

                        $('#ProduitEditModal').modal('hide');
                        $scope.RefreshStatisticAndTable();
                        alert('Echec de l\'enregistrement, consulter la console.');
                        console.log(error);

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

            alert('formulaire invalide');

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

            ProductFactory.delete({ id: produit_id }, function(response) {


                $scope.RefreshStatisticAndTable();

            }, function(error) {

                alert('Echec de la suppression, consulter la console.');
                console.log(error);

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