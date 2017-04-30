@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-9 ">
            <div  class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-briefcase"></i>Enregistrer une nouvelle vente
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                    </div>
                </div>
                <div  class="portlet-body form">
                    {!! Form::model($vente,['route' => ['vente.update',$vente->id],'method'=>'put','class' => 'form']) !!}
                    <div class="form-body">
                        <div class="row">
                            @if (Session::has('alerte'))
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <button class="close" data-close="alert"></button>
                                        {{Session::get('alerte')}}
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('select2-button-addons-multiple-input-group-sm','S&eacute;lectionner le produit',['class'=>'control-label']) !!}
                                        <div class="input-group select2-bootstrap-prepend">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-cube"></i>
                                                </span>
                                            <select name="produit_id" id="select2-button-addons-multiple-input-group-sm" class="form-control select2">
                                                @foreach($produits as $produit)
                                                    <option value="{{$produit->id}}">{{$produit->libpro}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    @if ($errors->has('qte'))
                                        <div class="alert alert-danger">
                                            <span>{{ $errors->first('qte') }}</span>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        {!! Form::label('qte','Quantit&eacute;',['class'=>'control-label']) !!}
                                        <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-cube"></i>
											</span>
                                            {!! Form::number('qte', null, ['class'=>'form-control', 'placeholder'=>'La quantit&eacute;','required'=>'true']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="pull-right">
                            <button type="reset" class="btn btn-warning btn-sm taille-a-13 premiere-lettre-majuscule">
                                <i class="fa fa-trash"></i><?php echo 'Vider'; ?>
                            </button>
                            <button type="submit" class="btn green btn-sm taille-a-13 premiere-lettre-majuscule">
                                <i class="fa fa-edit"></i> <?php echo 'modifier'; ?>
                            </button>
                        </div>
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection