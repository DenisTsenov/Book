@extends('main')
@section('title', ' | View Book')

@section('content')
<h1>Title: {{ $book->book_name }}</h1>
<h3>Genre: {{ $book->genre }}</h3>
<div class='row'>
    <div class="col-md-8">
        <p class="lead">
            {{ Form::label('content', "Content:") }}
{{ Form::textarea('content', $cont,
['class' => 'form-control', 'placeholder' => 'Add book content hire.....', 'required' => '', 'minlength' => "100", 'size' => '20x25'])}}
</p>

    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                {{ Html::image('pictures/'.$book->img_path, $book->img_path, ['class' => 'book_img img-rounded front_image']) }}
                <hr class="style-eight"/>
                <dt>Created  at:</dt>
                <dd>{{date('M j, Y H:i', strtotime($book->created_at))  }}</dd>
            </dl>
            <hr>
             @if(Auth::check())
            <div class='row'>
                <div class="col-sm-6">
                    {!! Html::linkRoute('book.edit', 'Edit', [$book->id], ['class' => 'btn btn-primary btn-block']) !!}
                    
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['book.destroy', $book->id],  'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
             @endif
            <div class='row'>
                {{ Html::linkRoute('book.index', '<< See all books!', [], ['class' => 'btn btn-default btn-block btn-h1-spacint top-space']) }}

            </div>
        </div>
    </div>
</div>

@endsection