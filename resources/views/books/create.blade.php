@extends('main')
@section('title', ' | Add new  book')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')

<div class='row'>
     @if(Auth::check())
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-center">Add  new book</h1>
        {!! Form::open(['route' => 'book.store', 'files' => true, 'data-parsley-validate' => ''])!!}
            {{ Form::label('book_name', "Title * : ") }}
            {{ Form::text('book_name', null, ['class' => 'form-control', 'required' => '', 'minlength' => "2", "maxlength" => '60']) }}
            
            <!--{{ Form::label('author', "Author * : " , ['class' => 'top-space']) }}
            <select class="form-control " name="author" data-parsley-required="true">
            @foreach ($auth as $author) 
            <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
            </select>-->
            {{ Form::label('img_path', "Add book image * :", ['class' => 'top-space'])}}
            {{  Form::file('img_path', ['required' => '',  'class' => 'top-space']) }}
            <br/>
            {{ Form::label('genre', "Genre * : ") }}
            {{ Form::text('genre', null, ['class' => 'form-control', 'required' => '', 'minlength' => "2", "maxlength" => '60']) }}
            <br/>
            {{ Form::label('author', "Author * : ") }}
            {{ Form::text('author', null, ['class' => 'form-control', 'required' => '', 'minlength' => "2", "maxlength" => '60']) }}
           
            <!--
            {{ Form::label('genre', 'Select Genre *' , ['class' => 'top-space']) }}
             <select class="form-control" name="genre" data-parsley-required="true">
            @foreach ($genre as $genres) 
            <option value="{{ $genres->id }}">{{ $genres->name }}</option>
            @endforeach
            </select>-->
            
            {{ Form::label('content', "Content * :", ['class' => 'top-space']) }}
            {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Add content hire.....', 'required' => '', 'minlength' => "100"]) }}
            <br/>
            {{ Form::submit('Add new book', ['class' => 'btn btn-success btn-lg btn-block']) }}
        {!! Form::close() !!}   
        <hr>
    </div>
@endif
</div>

@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection