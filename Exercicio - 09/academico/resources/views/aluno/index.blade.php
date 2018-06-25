@extends('layouts.app')
@section('content')  
       
        <h1 class="text-center">Tabela de Alunos(as)</h1>
        <div class="container">
            <table class="table">

            <tr>
                <th >Matrícula</th>
                <th>Nome</th>
                <th>Mail</th>
                <th>Cidade</th> 
                <th></th>
                <th></th>
                
            </tr>

            @foreach ($alunos as $linha)
                <tr>
                    <td >{{  $linha->id }}</td>
                    <td><a href="{{ route('alunos.show', $linha->id) }}">{{  $linha->nome }}</a></td>
                    <td>{{  $linha->mail }}</td>
                    @foreach ($cidades as $cidade)
                    @if( $linha->cidade_id === $cidade->id)
                    <td> {{$cidade->nome}}</td>
                    @endif
                    @endforeach
                    <td><a href="{{ route('alunos.edit', $linha->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a></td>
   
                    <td><form method="post" action="{{ route('alunos.destroy', $linha->id) }}">
@csrf
@method('DELETE')
<input type="submit" class="btn btn-dark btn-lg" value="Remover">
</form></td>
                </tr>
            @endforeach
        
        </table>
        </div>
        @stop