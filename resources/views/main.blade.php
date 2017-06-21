<!DOCTYPE html>
<html lang="en">
    @include('partials/_head')
    <body>
        @include('partials/_nav')   

        <div class='container'>
            @include('partials._messages')

            @yield('content') 
            @include('partials/_footer')        
        </div><!-- end of  contatiner class -->

        @include('partials/_js')    
        @yield('scripts')
    </body>
</html>