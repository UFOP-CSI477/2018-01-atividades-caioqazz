@extends('layouts.app')
@section('content')
<h1 class="text-center">Tabela de Estados</h1>
        <div class="container">
            <table class="table">
            <tr>
                <th>Nome</th>
                <th>sigla</th> 
                <th></th>
                <th></th>
            </tr>
            @foreach ($estados as $linha)
                <tr>
                    <td><a href="{{ route('estados.show', $linha->id) }}">{{  $linha->nome }}</a></td>
                    <td> {{$linha->sigla}}</td>
                    <td><a href="{{ route('estados.edit', $linha->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a></td>
   
                    <td><form method="post" action="{{ route('estados.destroy', $linha->id) }}">
@csrf
@method('DELETE')
<input type="submit" class="btn btn-dark btn-lg" value="Remover">
</form></td>
                </tr>
            @endforeach
        
        </table>
        </div>

@stop