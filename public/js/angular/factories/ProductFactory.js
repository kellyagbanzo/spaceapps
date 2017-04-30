/*
 =====================================================
                    PRODUIT RESOURCE FACTORY
 =====================================================
 */

ApplicationMdl.factory('ProductFactory', function ($resource, API_URL) {

    var url = API_URL + "produit/:id";

    return $resource(url, {id: '@id'}, {

        all: { method: "GET", isArray: true }, //query : {method: "GET", isArray: true}
        get: { method: "GET", isArray: true },
        create: { method: "POST" },
        update: { method: "PUT" },
        remove: { method: "DELETE" }

    });

});