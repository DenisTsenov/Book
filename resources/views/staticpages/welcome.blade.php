@extends('main')
@section('title', ' | Home Page')

@section('content')           
<div class='row'>
    <div class="col-md-12">
        <!--<div class="jumbotron">
            <h1>Under Construct!</h1>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>-->
    </div>
</div><!-- end  of  the  .row-->

<div class='row'>
    <div  class="col-md-8">
        @foreach($books as $book)
        <div class="post">
            <h3>{{ $book->book_name }}</h3>
           {{ Html::image('pictures/'.$book->img_path, $book->img_path, ['class' => 'front_image img-rounded front_image']) }}
            <p><strong>Author:</strong><br/>
               {{ $book->author }}
            </p> 
            <p><strong>Genre:</strong><br/>
               {{ $book->genre }}
            </p> 
            <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary">Read more</a>
        </div>
        <hr class="style-eight">
     @endforeach
        <div class='text-center'>
            {!! $books->links(); !!}
        </div>
        <!-- ------------------------------- -->
    </div>
    <!-- ------------------------------- -->
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
        Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.
    </div>
</div>   
@endsection