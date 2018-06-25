@extends('layouts.app')
@section('content')
<table class="table">
      

   
     <tr>
     <th>Nome</th>
      <td>{{  $cidade->nome }}</td>
    </tr>
     <tr>
     <th>Estado</th>
      <td>{{  $estado->nome }}</td>
    </tr>

    </table>   
  <a href="{{ route('cidades.edit', $cidade->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a>
   

@stop