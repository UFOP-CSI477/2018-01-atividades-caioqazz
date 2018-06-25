@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-center">Alterar Aluno(a)</h1>
            
            <form method="post" action="{{ route('alunos.update' , [ 'aluno' => $aluno->id ]) }}" class="form-group">
                @csrf
                @method('PATCH')

                <div class="form-group">   
                    <label for="nome">Nome:</label>
                    <input type="text"   class="form-control" name="nome" value="{{$aluno->nome}}">
                </div>
                <div class="form-group">   
                    <label for="cidade_id">Cidade:</label>
                    <select name="cidade_id"   class="form-control">
                        <option value="" selected>Selecione:</option>
                        <!-- Estados //-->
                        @foreach ($cidades as $e)
                            <option value="{{ $e->id}}" {{ $e->id ===  $aluno->cidade_id ? 'selected' : ''}}> {{$e->nome}}</option>
                       @endforeach
                       
                    </select>
                </div>
                <div class="form-group">   
                    <label for="rua">Rua:</label>
                    <input type="text"   class="form-control" name="rua" value="{{$aluno->rua}}"> 
                </div>
                <div class="form-group">   
                    <label for="bairro">Bairro:</label>
                    <input type="text"  class="form-control" name="bairro" value="{{$aluno->bairro}}">
                </div>
                <div class="form-group">   
                    <label for="numero">Numero:</label>
                    <input type="text"  class="form-control" name="numero" value="{{$aluno->numero}}">
                </div>
                <div class="form-group">   
                    <label for="cep">Cep:</label>
                    <input type="text"  class="form-control" name="cep" value="{{$aluno->cep}}">
                </div>
                <div class="form-group">   
                    <label for="mail">Email:</label>
                    <input type="text"  class="form-control" name="mail" value="{{$aluno->mail}}">
                </div>
                <div class="form-group">  
                    <input type="submit" class="btn btn-info btn" value="Alterar">
                    <input type="reset" class="btn btn-danger" value="Limpar">
                </div>
            </form>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@stop
