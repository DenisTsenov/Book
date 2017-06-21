@extends('main')
@section('title', ' | All books')
@section('content')

<div class='row'>
    <div class="col-md-10">
        <h1>All books</h1>
    </div>
     @if(Auth::check())
    <div class="col-md-2">
        <a href='{{ route('book.create') }}' class="btn btn-lg btn-primary btn-block btn-margin">Add new Book</a>
    </div>
     @endif
    <div class="col-md-12">
        <hr/>
    </div>
</div><!-- end of  class row -->

<div class='row'>
    <div class="col-md-12">
        <table class="table">
            <thead>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Aded at</th>
            <th></th>
            </thead>
            <tbody>
                
                @foreach($books as $singleBook)
                <tr>
                    <th>{{ $singleBook->id }}</th>
                    <td>{{ $singleBook->book_name}}</td>
                    <td>{{ $singleBook->author }}</td>
                    <td>{{ date('M j, Y', strtotime($singleBook->created_at)) }}</td>
                    <td><a href="{{ route('book.show', $singleBook->id) }}" class="btn  btn-success btn-sm">Read</a>
                         @if(Auth::check())
                        <a href="{{ route('book.edit', $singleBook->id) }}" class="btn btn-danger btn-sm">Edit</a></td>
                        @endif
                </tr>
   
                @endforeach
                
            </tbody>
        </table>
        <div class='text-center'>
            {!! $books->links(); !!}
            
        </div>
    </div>

</div>

@endsection