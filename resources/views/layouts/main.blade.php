<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>@yield('title')</title>
    <style>
    body {
        background-image: url("/image/logo.png");
        background-repeat: no-repeat;
        background-position: center 100px;
        background-size: 500px;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container boxatas">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="nav navbar-nav">
                            <li><a class="nav-item nav-link active" href="/home">Home </a> </li>
                            <li><a class="nav-item nav-link" href="{{ url('/data-ca') }}">Data CA</a> </li>
                            @if (Session::get('name') == "admin")
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kriteria</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/kriteria') }}">Kriteria</a>
                                <a class="dropdown-item" href="{{ url('/subkriteria') }}">Sub Kriteria</a>
                                <a class="dropdown-item" href="{{ url('/nilai') }}">Nilai</a>
                                
                            </li>
                            @endif
                            <li><a class="nav-item nav-link" href="/sample" >Hasil</a></li>
                            <li><a class="nav-item nav-link" href="/reset">{{Session::get('email')}}</a></li>
                            
                         </ul>
                   </div>
                   
                </div>
        </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @if (!Session::get('name') == "admin")

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li> -->
                                    
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/logout">Logout</a>
                                    </li>
                                @endif
                            </ul>
                </div>
            
        </div>
    </nav>

    
    <div class="container" style="padding-top: 10px">
    @yield('content')
    </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

  