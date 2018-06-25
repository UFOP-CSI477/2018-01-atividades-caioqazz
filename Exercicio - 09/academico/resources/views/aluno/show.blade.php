@extends('layouts.app')
@section('content')   
<table class="table">
      

     <tr>
     <th >Matrícula</th>
      <td>{{  $aluno->id }}</td>
    </tr>
     <tr>
     <th>Nome</th>
      <td>{{  $aluno->nome }}</td>
    </tr>
     <tr>
     <th>Rua</th>
      <td>{{  $aluno->rua }}</td>
    </tr>
     <tr>
     <th>Numero</th>
      <td>{{  $aluno->numero }}</td>
    </tr>
     <tr>
     <th>Bairro</th>
      <td>{{  $aluno->bairro }}</td>
    </tr>
     <tr>
     <th>Mail</th>
      <td>{{  $aluno->mail }}</td>
    </tr>
    <th>Cidade</th> 
      <td>{{  $cidade->nome }}</td>
    </tr>
  </table>   
  <a href="{{ route('alunos.edit', $aluno->id) }}"><button type="button" class="btn btn-danger btn-lg">Alterar</button></a>
   



@stop
