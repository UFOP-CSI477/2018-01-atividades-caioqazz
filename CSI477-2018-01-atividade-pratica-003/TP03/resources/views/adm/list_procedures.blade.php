@extends('layouts.principal')

@section('content')
<h1>Lista de Procedimentos</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Procedimentos</th>
        <th class="text-center">Preço</th>
         <th class="text-center"></th>
          <th class="text-center"></th>
    </tr>

  @foreach($lista as $linha)
                <tr>
                    <td>{{ $linha->name}}</td>
                    <td>{{ $linha->price}}</td>
                    <td><a href="{{ route('procedimentos.edit', $linha->id) }}"><button type="button" class="btn btn-warning btn-block">Alterar</button></a></td>
                    <td><form method="post" action="{{ route('procedimentos.destroy', $linha->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-block" value="Remover">
                            </form></td>
                   
                </tr>
          @endforeach
</table>




@endsection


