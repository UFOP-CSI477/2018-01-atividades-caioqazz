@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="text-center">Alterar Estados</h1>
            
            <form method="post" action="{{ route('estados.update' , [ 'estado' => $estado->id ]) }}" class="form-group">
                @csrf
                @method('PATCH')
                <div class="form-group">   
                    <label for="nome">Nome:</label>
                    <input type="text"   class="form-control" name="nome" value="{{ $estado->nome}}">
                </div>
                <div class="form-group">   
                    <label for="sigla">Sigla:</label>
                <input type="text"   class="form-control" name="sigla" value="{{ $estado->sigla}}">
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