<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <script src="./js/jquery-3.3.1.slim.js"></script>
        <script src="./js/funcoes.js"></script>

    </head>

    <body>

           <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Analyses
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            @guest    
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('procedures') }}">{{ 'Procedimentos'}}</a>
                            </li>
                            @endguest
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="principal">
                @if(Auth::check())
                    @includeWhen(Auth::user()->type === 1, 'menu.menu_func_adm')
                    @includeWhen(Auth::user()->type === 2, 'menu.menu_func_op')
                    @includeWhen(Auth::user()->type === 3, 'menu.menu_func_paciente')
                
             
                    <div class="col-md-9">
                            @endif
                            @if ( Session::has('mensagem') )
                            <p class="alert alert-info text-center">{{ Session::get('mensagem') }}</p>
                            @endif
                    @yield('content')
                      </div>  
  
                </div>  



            </div>
                    
                 
            </body>
            <div class="footer">
               <p>&copy Sistema de Controle de Solicitações de Análises Laboratoriais</p>
            </div>
            </html>