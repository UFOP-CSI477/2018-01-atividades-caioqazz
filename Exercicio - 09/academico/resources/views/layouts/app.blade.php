<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Academico</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>

</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel menu">
            <div class="container">
                <a class="navbar-brand white"  id="home" href="{{ url('/') }}">
                   Academico
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle teste" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Alunos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-center" href="{{ route('alunos.create')}}">Cadastrar</a>
          <a class="dropdown-item text-center" href="{{ route('alunos.index')}}">Excluir</a>
          <a class="dropdown-item text-center" href="{{ route('alunos.index')}}">Alterar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('alunos.index')}}">Todos Registrados</a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Estados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-center" href="{{ route('estados.create')}}">Cadastrar</a>
          <a class="dropdown-item text-center" href="{{ route('estados.index')}}">Excluir</a>
          <a class="dropdown-item text-center" href="{{ route('estados.index')}}">Alterar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('estados.index')}}">Todos Registrados</a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cidades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-center" href="{{ route('cidades.create')}}">Cadastrar</a>
          <a class="dropdown-item text-center" href="{{ route('cidades.index')}}">Excluir</a>
          <a class="dropdown-item text-center" href="{{ route('cidades.index')}}">Alterar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('cidades.index')}}">Todos Registrados</a>
        </div>
      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                   
                </div>
            </div>
        </nav>

        <main class="py-4">
        @if ( Session::has('mensagem') )
      <p class="alert alert-info">{{ Session::get('mensagem') }}</p>
    @endif

            @yield('content')
        </main>
    </div>


</body>
<div class="footer">
   <p>&copy Sistema de Controle Academico</p>
</div>
</html>
