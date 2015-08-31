<html>
    <head>
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/emp.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @section('navbar')
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Ажил хайх</a></li>
                    <li><a href="{{ url('/resumes') }}">Resume хайх</a></li>
                    @if (Auth::check())
                    <li><a href="{{ url('/post-job') }}">Ажлын байр зарлах</a></li>
                    @endif
                </ul>
                
                @if (Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->email }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('profile') }}">Миний мэдээлэл</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}">Гарах</a></li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/register') }}">Бүртгүүлэх</a></li>
                    <li><a href="{{ url('/login') }}">Нэвтрэх</a></li>
                </ul>
                @endif
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
        
        <script src="js/jquery-2.1.4.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>