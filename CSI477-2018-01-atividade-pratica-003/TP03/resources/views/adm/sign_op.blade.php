
@extends('layouts.principal')

@section('content')





<h1 class="text-center titulo">Cadastro de Operador</h1>

<form method="post" action="{{route ('storeAdm')}}" class="form-group">
        @csrf
    <div class="form-group" id="name-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" class="form-control">

        <div class="alert alert-danger" style="display: none"  id="name-alert">
            <p>Informe o conteúdo desse campo corretamente.</p>
        </div>
    </div>

    <div class="form-group"id="email-group" >

        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control">

        <div class="alert alert-danger" style="display: none" id="email-alert" >
            <p>Informe o conteúdo desse campo corretamente.</p>
        </div>
    </div>


    <div class="form-group" id="password-group" >
        <label for="password">Senha:</label>
        <input type="password" name="password" class="form-control">
        <div class="alert alert-danger" style="display: none" id="password-alert" >
            <p>Informe o conteúdo desse campo corretamente.</p>
        </div>
    </div>
    <div class="grupobotoes">
        <input type="submit"  id="cadastrar" class="botao btn btn-success btn-lg "  value="Cadastrar">
    </div>
</form>








@endsection
