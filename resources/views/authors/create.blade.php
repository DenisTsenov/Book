@extends('main')
@section('title', ' | Add new  Author')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
 @if(Auth::check())
<div class='row'>
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Add new author</h1>
   
    {!! Form::open(['route' => 'author.store', 'files' => true, 'data-parsley-validate' => '']) !!}  
        {{ Form::label('name', "Name*")}}
        {{ Form::text('name', null, ['class' => 'form-control', 'required' => '', 'minlength' => "2", "maxlength" => '80']) }}
        
        {{ Form::label('img_path', "Add image* :")}}
        {{  Form::file('img_path', ['required' => '']) }}
        <br/>
        
        {{ Form::label('biography', 'Biography*') }}
        {{ Form::textarea('biography', null,  ['class' => 'form-control', 'placeholder' => 'Add biography hire.....', 'required' => '', 'minlength' => "50"]) }}
        <br/>
        {{ Form::submit('Add new author', ['class' => 'btn btn-success btn-lg btn-block']) }}
    {!! Form::close() !!}
     </div>
</div>
 @endif
@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection