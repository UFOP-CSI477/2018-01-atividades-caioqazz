@extends('layouts.app')
@section('content')
<h1 class="text-center">Tabela de Estados</h1>
        <div class="container">
            <table class="table">
            <tr>
                <th>Nome</th>
                <th>Estado</th> 
                <th></th>
                <th></th>
            </tr>
            @foreach ($cidades as $linha)
                <tr>
                    <td><a href="{{ route('cidades.show', $linha->id) }}">{{  $linha->nome }}</a></td>
                    @foreach ($estados as $estado)
                    @if( $linha->estado_id === $estado->id)
                    <td> {{$estado->nome}}</td>
                    @endif
                    @endforeach
                    <td><a href="{{ route('cidades.edit', $linha->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a></td>
   
                    <td><form method="post" action="{{ route('cidades.destroy', $linha->id) }}">
@csrf
@method('DELETE')
<input type="submit" class="btn btn-dark btn-lg" value="Remover">
</form></td>
                </tr>
            @endforeach
        
        </table>
        </div>

@stop