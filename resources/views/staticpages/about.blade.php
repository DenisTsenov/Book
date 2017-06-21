@extends('main')
@section('title', ' | About Page')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hello my  name  is {{ $data['name'] }}.
                </div>
                <p>My goal  for  this  app is  to make people  read  more  books.</p>
                <p>And to create habit in people to  read.</p>   
            </div>
        </div>
    @endsection
