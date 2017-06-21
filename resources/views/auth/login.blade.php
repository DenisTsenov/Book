@extends('main')
@section('title', ' | Login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Login</strong></div>
                <div class="panel-body">
                   {{ Form::open(['url' => 'login']) }}
                        {{ Form::label('email', 'Your email') }}
                        {{ Form::email('email', null, ['class' => 'form-control',  'required' => '', 'minlength' => "8", "maxlength" => '255']) }}
                        
                        {{ Form::label('password', 'Password', ['class' => 'top-space']) }}
                        {{ form::password('password', ['class' => 'form-control' ,  'required' => '', 'minlength' => "5", "maxlength" => '255']) }}
                        <br/>
                        {{ Form::label('remember', 'Remember Me') }}
                        {{ Form::checkbox('remember', null, ['class' => 'form-control']) }}
                        <br/>
                        {{ Form::submit('Login', ['class' => 'btn btn-block btn-primary top-space']) }}
                        
                        <a class="btn btn-info top-space" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                   {{  Form::close() }}
                </div>
            </div>
            <p><a href="{{ url('/register') }}" class="btn btn-block btn-danger">You  dont have  registration?</a></p>
        </div>
    </div>
</div>
@endsection
