<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">eVoHost.pl</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>

            <ul class="nav navbar-nav navbar-right " role="tablist">
                @guest
                <li><a href="{{ route('login') }}">Logowanie</a></li>
                <li><a href="{{ route('register') }}">Rejestracja</a></li>
            @else
                        <li role="presentation"><a href="http://fileone.tv/user/messages"><span class="glyphicon glyphicon-envelope"></span> Wiadomości <span class="badge">0</span></a></li>



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> {{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('my_account')}}"><span class="glyphicon glyphicon-cog"></span> Moje konto</a></li>
                                <li><a href="{{route('my_movies')}}"><span class="glyphicon glyphicon-film"></span> Moje filmy</a></li>
                                <li><a href=""><span class="glyphicon glyphicon-cog"></span> Upload zdalny</a></li>
                                @if(\Illuminate\Support\Facades\Auth::user()->hasPermission('admin'))

                                    <li><a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-cog"></span> Panel administratora</a></li>
                                    @endif
                                <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-off"></span> Wyloguj</a></li>
                            </ul>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>