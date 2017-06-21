@extends('main')
@section('title', ' | Books  by genre')
@section('content')
<div class='row'>
    <div class='col-md-8 col-md-offset-2'>
        @foreach($book as $b)
            <h2>{{ Form::label('book_name', 'Title', ['class' => 'form-controll'])}}</h2>
            <p class="lead right">{{ $b->book_name }}</p>
           
           <h2>{{ Form::label('genre', 'Genre', ['class' => 'form-controll'])}}</h2>
           <p class="lead">{{ $b->genre }}</p>
           
           <h2>{{ Form::label('author', 'Author', ['class' => 'form-controll'])}}</h2>
           <p class="lead">{{ $b->author }}</p>
           <p class="lead">{{ Html::image('pictures/'.$b->img_path, $b->img_path, ['class' => 'genre_img img-rounded ']) }}</p>
           <a href="{{ route('book.show', $b->id) }}" class="btn  btn-primary btn-lg">Read</a>
           <hr class="style-eight">
        @endforeach
    </div>
</div>
<div class='text-center'>
            {!! $book->links(); !!}
            
        </div>
@endsection