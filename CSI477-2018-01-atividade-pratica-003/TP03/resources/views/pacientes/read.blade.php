@extends('layouts.principal')

@section('content')

<h1>Meus Exames</h1>
<table class="table table-striped table-bordered table-hover text-center teste">
    <thead >
        <tr >
            <th class="text-center">Procedimento</th>
            <th class="text-center">Data</th>
            <th></th>
            <th></th>
        </tr> 
    </thead>

<tbody>
   @foreach ($lista as $linha)
    


            <td>{{$linha->procedimento->name}}</td>
            <td>{{$linha->date}}</td>
            <td><a href="{{ route('exames.edit', $linha->id) }}"><button type="button" class="btn btn-warning btn-block">Remarcar</button></a></td>
            <td><form method="post" action="{{ route('exames.destroy', $linha->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger btn-block" value="Remover">
                    </form></td>
        </tbody>
   @endforeach
</table>






@endsection
