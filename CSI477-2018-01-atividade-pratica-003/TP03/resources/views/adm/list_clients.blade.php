@extends('layouts.principal')

@section('content')
     
     <h1>Tabela de Clientes</h1>
        <table class="table table-striped table-bordered table-hover text-center teste">

            <tr >
                <th>Nome</th>
                <th>Email</th>
                
            </tr>

            @foreach ($lista as $linha)
                <tr>
                    <td>{{ $linha->name}}</td>
                    <td>{{ $linha->email}}</td>
               
                </tr>
            @endforeach

        </table>




        @endsection