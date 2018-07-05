@extends('layouts.principal')

@section('content')

        <h1>Atualizar Procedimento</h1>

        <form method="post" action="{{ route('procedimentos.update' , [ 'procedure' => $procedure->id ]) }}"  class="form-group">
                @csrf
                @method('PATCH')
               
                    <div class="form-group" id="name-group">
                <label for="name">Nome:</label>
                <input type="text"  class="form-control" name="name" value="{{$procedure->name}}">
                
        <div class="alert alert-danger" style="display: none"  id="name-alert">
            <p>Informe o conteúdo desse campo corretamente.</p>
        </div>
    </div>
                 <div class="form-group" id="price-group" >   
                <label for="price">Preço:</label>
                <input type="text" class="form-control" name="price" value="{{$procedure->price}}">
             <div class="alert alert-danger" style="display: none" id="price-alert" >
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>           
                  
                
                <input type="submit"  class="botao btn btn-lg btn-warning" value="Atualizar">
           
        </form>




        @endsection