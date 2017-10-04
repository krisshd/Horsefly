<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Application</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link media="all" rel="stylesheet" type="text/css" href="{!! asset('css/custom.css') !!}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">One</a></li>
              <li><a href="#!">Two</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
              <li><a href="{{ url('/AddTask') }}">Add Task</a></li>
              <li><a href="{{ url('/ShowTask') }}">View Task</a></li>
              <li><a href="{{ url('/upload') }}">Upload</a></li>
            </ul>
            <nav>
              <div class="nav-wrapper">
                <a href="#!" class="brand-logo">HorseFly</a>
                <ul class="right hide-on-med-and-down">
                  @if(Auth::guest())
                    <li><a href="{{ url('/session') }}">Login</a></li>
                    <li><a href="{{ url('/session') }}">Register</a></li>
                  @elseif(Auth::check())
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Task<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                  @endif
                </ul>
              </div>
            </nav>
            
        <div class="container">
            <!-- <nav class="navbar navbar-default"></nav> -->
            @if(Session::has('flash_message'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
            @endif

        </div>

        @yield('content')
        

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



    </body>
</html>