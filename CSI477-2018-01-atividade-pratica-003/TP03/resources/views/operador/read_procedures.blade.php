@extends('layouts.principal')

@section('content')

        <h1>Tabela de Procedures</h1>
        <table class="table table-striped table-bordered table-hover text-center teste">

            <tr >
                <th  class="text-center">Nome</th>
                <th  class="text-center">Preço</th>
                 <th  class="text-center"></th>
            </tr>

            @foreach ($lista as $linha)
                <tr>
                    <td>{{$linha->name}}</td>
                    <td>{{$linha->price}}</td>
                    <td><a href="{{ route('editOp', $linha->id) }}"><button type="button" class="btn btn-warning btn-block">Alterar</button></a></td>
                   
                   
                </tr>
            @endforeach

        </table>




        @endsection



