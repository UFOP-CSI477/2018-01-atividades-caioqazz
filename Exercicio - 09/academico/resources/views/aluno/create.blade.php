@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-center">Inserir Alunos(as)</h1>
            
            <form method="post" action="{{ route('alunos.store') }}" class="form-group">
                @csrf
                <div class="form-group">   
                    <label for="nome">Nome:</label>
                    <input type="text"   class="form-control" name="nome">
                </div>
                <div class="form-group">   
                    <label for="cidade_id">Cidade:</label>
                    <select name="cidade_id"   class="form-control">
                        <option value="">Selecione:</option>
                        <!-- Estados //-->
                        @foreach ($cidades as $e)
                            <option value="{{ $e->id }}"> {{$e->nome}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">   
                    <label for="rua">Rua:</label>
                    <input type="text"   class="form-control" name="rua">
                </div>
                <div class="form-group">   
                    <label for="bairro">Bairro:</label>
                    <input type="text"  class="form-control" name="bairro">
                </div>
                <div class="form-group">   
                    <label for="numero">Numero:</label>
                    <input type="text"  class="form-control" name="numero">
                </div>
                <div class="form-group">   
                    <label for="cep">Cep:</label>
                    <input type="text"  class="form-control" name="cep">
                </div>
                <div class="form-group">   
                    <label for="mail">Email:</label>
                    <input type="text"  class="form-control" name="mail">
                </div>
                <div class="form-group">  
                    <input type="submit" class="btn btn-info but" value="Cadastrar">
                    <input type="reset" class="btn btn-danger but" value="Limpar">
                </div>
            </form>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@stop
