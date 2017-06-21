<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : ""}}"><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('book.index') }}" >All books</a></li>
                        <li role="separator" class="divider "></li>
                        <li><a href="{{url('booksBy/Science Fantasy') }}">Science Fantasy</a></li>
                         <li><a href="{{ url('booksBy/Horror') }}">Horror</a></li>
                          <li><a href="{{url('booksBy/Dystopia') }}">Dystopia</a></li>
                           <li><a href="{{url('booksBy/Drama') }}">Drama</a></li>
                    </ul>
                </li>

                 <li class="{{ Request::is('author') ? 'active' : ""}}"><a href="/author">Authors</a></li>
            </ul>
            <!-- this is some  undone functionality -->
           <!-- {!!  Form::open(['method' => 'GET', 'url' => 'search_books', 'class' => 'navbar-form navbar-left', 'role' => 'search'] ) !!}
            {!! Form::text('searched_value', null,
                           ['required',
                                'class'=>'form-control',
                                'placeholder'=>'Search ']) !!}
             {!! Form::submit('Search', array('class'=>'btn btn-default')) !!}
            {{!! Form::close()!!}}-->
           
            <ul class="nav navbar-nav navbar-right">
                <!-- this is some  undone functionality -->
               <!-- <li class="{{ Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
                <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        @if(Auth::check()) Hello {{ Auth::user()->name }}@else Login/Logout @endif<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         @if(Auth::check())

                       <li><a href="{{ url('/logout') }}">Logout</a></li>            
         
                        @else
                      
                         <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
