@extends('layouts.principal')

@section('content')

<h1>Procedimentos oferecidos</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Procedimentos</th>
        <th class="text-center">Preço</th>
    </tr>

@foreach ($lista as $linha)
        <tr>

            <td >{{$linha->name }}</td>
            <td >R${{$linha->price }}</td>
        </tr>
@endforeach

</table>


@endsection



