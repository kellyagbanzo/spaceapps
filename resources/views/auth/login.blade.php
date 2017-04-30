@extends('layouts.auth')
@section('form')
    {!! Form::open(['action' => 'Auth\LoginController@login', 'class' => 'login-form']) !!}
    <h3 class="form-title">Connexion</h3>

    @if ($errors->has('email'))
        <div class="alert alert-danger">
            <button class="close" data-close="Alerte"></button>
            <span>{{ $errors->first('email') }}</span>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('email', 'Email', ['class'=>'control-label visible-ie8 visible-ie9']) !!}
        {!! Form::email('email', null, ['class'=>'form-control form-control-solid placeholder-no-fix', 'placeholder'=>'Entrer votre email', 'required'=>'true', 'autofocus'=>'true', 'autocomplete' => 'false', 'id'=>'email']) !!}
    </div>

    @if ($errors->has('password'))
        <div class="alert alert-danger">
            <button class="close" data-close="Alerte"></button>
            <span>{{ $errors->first('password') }}</span>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('password', 'Mot de passe', ['class'=>'control-label visible-ie8 visible-ie9']) !!}
        {!! Form::password('password', ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off', 'placeholder'=>'Entrer votre mot de passe']) !!}
    </div>

    <div class="form-actions">
        {!! Form::submit('Connexion', ['class'=>'btn btn-success uppercase']) !!}
        <label class="rememberme check">
            {!! Form::checkbox('remember','1') !!}Se souvenir </label>
        <a href="{{url('/password/reset')}}" id="forget-password" class="forget-password">MP Oubli&eacute; ?</a>
    </div>


    <div class="create-account">
        <p>
            <a href="{{url('/register')}}" id="register-btn" class="uppercase">Creer un compte</a>
        </p>
    </div>
    {!! Form::close()!!}
@stop