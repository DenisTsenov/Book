@extends('main')
@section('title', ' | All authors')
@section('content')

<div class='row'>
    <div class="col-md-10">
        <h1>All authors</h1>
    </div>
     @if(Auth::check())
    <div class="col-md-2">
        <a href='{{ route('author.create') }}' class="btn btn-lg btn-primary btn-block btn-margin">Add new author</a>
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
            <th>Name</th>
            
            <th>Aded at</th>
            <th></th>
            </thead>
            <tbody>
                
                @foreach($authors as $singleAuthor)
                <tr>
                    <th>{{ $singleAuthor->id }}</th>
                    <td>{{ $singleAuthor->name}}</td>
                    
                    <td>{{ date('M j, Y', strtotime($singleAuthor->created_at)) }}</td>
                    <td><a href="{{ route('author.show', $singleAuthor->id) }}" class="btn  btn-info btn-sm">View it</a>
                         @if(Auth::check())
                        <a href="{{ route('author.edit', $singleAuthor->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    @endif
                </tr>
   
                @endforeach
                
            </tbody>
        </table>
        <div class='text-center'>
            {!! $authors->links(); !!}
        </div>
    </div>
</div>

@endsection