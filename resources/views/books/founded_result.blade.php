@extends('main')
@section('title', ' | Founded books')
@section('content')

<div class='row'>
    <div class="col-md-10">
        <h1>Founded books</h1>
    </div>
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
                
                @if(count($founded_books) === 0)
            <h3><p class="text-center">No results founded. Sorry.</p></h3>
                @elseif(count($founded_books) >= 1)
                    @foreach($founded_books as $singleBook)
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
                 @endif   
                
            </tbody>
        </table>
        
    </div>

</div>

@endsection