@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-center">Alterar Estados</h1>
            
            <form method="post" action="{{ route('cidades.update' , [ 'cidade' => $cidade->id ]) }}" class="form-group">
                @csrf
                @method('PATCH')
                <div class="form-group">   
                    <label for="nome">Nome:</label>
                    <input type="text"   class="form-control" name="nome" value="{{$cidade->nome}}">
                </div>
                <div class="form-group">   
                    <label for="estado_id">Estado:</label>
                    <select name="estado_id"   class="form-control">
                        <option value="">Selecione:</option>
                        <!-- Estados //-->
                        @foreach ($estados as $e)
                            <option value="{{ $e->id }}" {{ $e->id ===  $cidade->estado_id ? 'selected' : ''}}> {{$e->nome}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">  
                    <input type="submit" class="btn btn-info but" value="Alterar">
                    <input type="reset" class="btn btn-danger but" value="Limpar">
                </div>

 </form>

</div>
<div class="col-md-1"></div>
</div>
</div>
@stop