@extends('main')
@section('title', ' | Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Registration</h4></div>
                <div class="panel-body">
                   {{ Form::open(['url' => 'register']) }}
                   
                        {{ Form::label('name', 'Your nickname') }}
                        {{ Form::text('name', null, ['class' => 'form-control',  'required' => '', 'minlength' => "2", "maxlength" => '255']) }}  
                   
                        {{ Form::label('email', 'Your email', ['class' => 'top-space']) }}
                        {{ Form::email('email', null, ['class' => 'form-control',  'required' => '', 'minlength' => "8", "maxlength" => '255']) }}
                        
                        {{ Form::label('password', 'Your password', ['class' => 'top-space']) }}
                        {{ Form::password('password', ['class' => 'form-control',  'required' => '', 'minlength' => "5", "maxlength" => '255']) }}
                        
                        {{ Form::label('password_confirmation', 'Confirm password', ['class' => 'top-space']) }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control',  'required' => '', 'minlength' => "5", "maxlength" => '255']) }}
                        <br/>
                        {{ Form::submit('Register', ['class' => 'btn btn-block btn-primary top-space']) }}
                   {{  Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
