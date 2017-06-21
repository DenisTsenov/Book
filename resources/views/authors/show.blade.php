@extends('main')
@section('Title', ' | View Author')
@section('content')

<h1>Name: {{ $author->name }}</h1>

<div class='row'>
    <div class="col-md-8">
        <p class="lead">
            {{ Form::label('biography', "Biography:") }}
            {{ Form::textarea('biography', $cont,
            ['class' => 'form-control', 'placeholder' => 'Add book content hire.....', 'required' => '', 'minlength' => "100", 'size' => '20x25'])}}
        </p>
        
    </div>
    <div class="col-md-4">
        <div class="well">
            {{ Html::image('pictures/'.$author->img_path, $author->img_path, ['class' => 'book_img img-rounded front_image']) }}
            <hr class="style-eight"/>
            <dl class="dl-horizontal">
                <dt>Created  at:</dt>
                <dd>{{date('M j, Y H:i', strtotime($author->created_at))  }}</dd>
            </dl>
            <hr>
            <div class='row'>
                 @if(Auth::check())
                <div class="col-sm-6">
                    {!! Html::linkRoute('author.edit', 'Edit', [$author->id], ['class' => 'btn btn-primary btn-block']) !!}
                    
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['author.destroy', $author->id],  'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
                 @endif
            </div>
            <div class='row'>
                {{ Html::linkRoute('author.index', '<< See all authors!', [], ['class' => 'btn btn-default btn-block btn-h1-spacint top-space']) }}

            </div>
        </div>
    </div>
</div>

@endsection