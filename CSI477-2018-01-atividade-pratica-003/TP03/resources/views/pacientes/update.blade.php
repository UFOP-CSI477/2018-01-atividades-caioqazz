@extends('layouts.principal')

@section('content')

<h1>Remarcar Teste</h1>


<form method="post" action="{{route('exames.update', [ 'exame' => $teste->id ])}}" class="form-group">

        @csrf
        @method('PATCH')
    <div class="form-group" >
        <label for="procedure_id">Procedimento:</label>
        <select name="procedure_id" class="form-control">
            <!-- Estados //-->
            @foreach ($procedures as $e)
           
            @if($e->id  === $teste->procedimento->id) 

            <option value="{{$e->id}}" selected>{{$e->name}}</option>    
            @else 
                    
                    <option value="{{$e->id}}">{{$e->name}}</option>
            @endif
            @endforeach 
        </select>
        <div class="alert alert-danger" style="display: none" >
        <p>Informe seu nome corretamente.</p>
    </div>
</div>  
<div class="form-group" >
    <label for="date">Data:</label>
    <input type="date" class="form-control" name="date" value="{{$teste->date}}">
    <div class="alert alert-danger" style="display: none" >
        <p>Informe seu nome corretamente.</p>
    </div>
</div>   
<input type="submit" class="botao btn btn-warning btn-lg" value="Atualizar" >

</form>




@endsection