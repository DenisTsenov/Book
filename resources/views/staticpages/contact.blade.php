@extends('main')
@section('title',  ' | Contact Page')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Contact me. 
                </div>
                <form>
                    <div class="form-group">
                        <label name='email'>Email:</label>
                        <input id='email' name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name='subject'>Subject:</label>
                        <input id='subject' name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name='message'>Message:</label>
                        <textarea id='message'  name='message' class="form-control" placeholder="Type your message  hire..." rows="15" cols="30"></textarea>
                    </div>

                    <input type="submit" value='Send Message' class="btn btn-primary">
                </form>
                <h3><p>Facebook: {{ $data['fb'] }}</p></h3>   
            </div>
        </div>
@endsection


