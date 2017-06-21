@extends('main')
@section('title', ' | Edit book')
@section('content')

<div class='row'>
    {!! Form::model($book, ['route' => ['book.update', $book->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
        {{ Form::label('book_name', 'Title:') }}
        {{ Form::text('book_name', null, ['class' => 'form-controll input-lg']) }}
        <hr/>
        <p class="lead">
            {{ Form::label('content', "Content :") }}
            {{ Form::textarea('content', $cont,
         ['class' => 'form-control', 'placeholder' => 'Add book content hire.....', 'required' => '', 'minlength' => "100", 'size' => '20x25'])}}
        </p>

    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created  at:</dt>
                <dd>{{date('M j, Y H:i', strtotime($book->created_at))  }}</dd>
            </dl>
            <hr>
            <div class='row'>
                <div class="col-sm-6">
                    {!! Html::linkRoute('book.show', 'Cancel', [$book->id], ['class' => 'btn btn-success btn-block']) !!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save', ['class' => 'btn btn-primary btn-block']) }}
                    
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div><!-- end  .row -->

@endsection
