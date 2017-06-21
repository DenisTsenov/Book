@extends('main')
@section('title', ' | Edit author')
@section('content')

<div class='row'>
    {!! Form::model($author, ['route' => ['author.update', $author->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-controll input-lg']) }}
        <hr/>
        <p class="lead">
            {{ Form::label('biography', "Content :") }}
            {{ Form::textarea('biography', $cont,
         ['class' => 'form-control', 'placeholder' => 'Add book content hire.....', 'required' => '', 'minlength' => "50", 'size' => '20x25'])}}
        </p>

    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created  at:</dt>
                <dd>{{date('M j, Y H:i', strtotime($author->created_at))  }}</dd>
            </dl>
            <hr>
            <div class='row'>
                <div class="col-sm-6">
                    {!! Html::linkRoute('author.show', 'Cancel', [$author->id], ['class' => 'btn btn-success btn-block']) !!}
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
