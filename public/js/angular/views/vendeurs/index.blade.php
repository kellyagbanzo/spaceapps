@extends('layouts.layout');
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-briefcase"></i>Gestionnaire des vendeurs
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn green tooltips"  data-original-title="Ajouter">
                                        Ajouter <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{--<div class="btn-group pull-right">
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i
                                                class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="liste">
                        <thead>
                        <tr>
                            <th class="all text-center">Vendeur</th>
                            <th class="all text-center">Produit</th>
                            <th class="min-phone-l text-center">Quantité</th>
                            <th class="none text-center">Client</th>
                            <th class="none text-center">Date</th>
                            <th class="all text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php //if (isset($liste_employe)) : foreach ($liste_employe as $unEmploye) : ?>
                        <tr>
                            <td class="text-center">jean</td>
                            <td class="text-center">96969696</td>
                            <td class="text-center">mail</td>
                            <td class="text-center">lklk</td>
                            <td class="text-center">klkkl</td>
                            <td class="col-md-2 text-center">
                            <span id="modifierEmploye" data-mod="12"
                                  href="javascript:;" class="btn btn-xs blue tooltips" data-container="body"
                                  data-placement="top" data-original-title="modifier">
                                <span class="glyphicon glyphicon-edit"> </span>
                            </span>
                                <span id="supprimerEmploye" data-mod="13"
                                      class="btn btn-xs btn-danger tooltips" data-container="body" data-placement="top"
                                      data-original-title="supprimer">
                                <span class="glyphicon glyphicon-trash"> </span>
                            </span>
                            </td>
                        </tr>
                        <?php //endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@stop