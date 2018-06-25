@extends('layouts.app')
@section('content')
<table class="table">
      

   
     <tr>
     <th>Nome</th>
      <td>{{  $estado->nome }}</td>
    </tr>
     <tr>
     <th>Sigla</th>
      <td>{{  $estado->sigla }}</td>
    </tr>

    </table>   
  <a href="{{ route('estados.edit', $estado->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a>
   

@stop