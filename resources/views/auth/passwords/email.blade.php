@extends('layouts.auth')

@section('form')
    {!! Form::open(['action' => 'Auth\ResetPasswordController@reset', 'class' => 'forget-form']) !!}
    <h3>Mot de Passe Oubli&eacute; ?</h3>

    <p>
        Entrer votre mail afin reinitialiser votre mot de passe
    </p>

    @if ($errors->has('email'))
        <div class="alert alert-danger">
            <button class="close" data-close="Alerte"></button>
            <span>Saisissez votre e-mail svp.</span>
        </div>
    @endif

    <div class="form-group">
        {!! Form::email('email',null,['class' => 'form-control placeholder-no-fix', 'autocomplete' => 'off', 'placeholder' => 'Email', 'required' => 'true']) !!}
    </div>
    <div class="form-actions">
        <a href="{{url('/login')}}" class="btn btn-default"></a>
        {!! Form::button('Envoyer', ['type' => 'submit', 'class' => 'btn btn-success uppercase pull-right']) !!}
    </div>
    {!! Form::close() !!}
@endsection
