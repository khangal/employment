<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/emp.css" rel="stylesheet" type="text/css">
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
                    <li><a href="/">Ажил хайх</a></li>
                    <li><a href="/resumes">Resume хайх</a></li>
                    <li><a href="/post-job">Ажлын байр зарлах</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/register">Бүртгүүлэх</a></li>
                    <li><a href="/login">Нэвтрэх</a></li>
                    <!--<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>-->
                </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>