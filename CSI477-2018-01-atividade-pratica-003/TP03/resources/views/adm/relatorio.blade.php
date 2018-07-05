
@extends('layouts.principal')

@section('content')

<h1>Relatorio</h1>
<table class="table table-striped table-bordered table-hover text-center teste">

    <tr >
        <th class="text-center">Nome</th>
        <th class="text-center">Procedimento</th>
        <th class="text-center">Preço</th>
    </tr>

    @foreach ($lista as $linha)
    <tr>
        <td>{{ $linha->name}}</td>
        <td>{{ $linha->procedures}}</td>
        <td>{{ $linha->price}}</td>

    </tr>

 

@endforeach 
@foreach ($total as $price)
<tr>
    <td class="negrito">Total</td>
    
@foreach ($total2 as $sum)
<td class="negrito">{{ $sum->totalcount }}</td>
@endforeach
<td class="negrito">{{ $price->totalprice }}</td>

@endforeach
</tr>
</table>




@endsection



