@extends('layouts.principal')

@section('content')


<h1>Inserir Procedimentos</h1>


<form method="post" action="{{route ('procedimentos.store')}}" class="form-group">
   @csrf
    <div class="form-group" id="name-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" class="form-control">

        <div class="alert alert-danger" style="display: none"  id="name-alert">
            <p>Informe o conteúdo desse campo corretamente.</p>
        </div>
    </div>
   <div class="form-group" id="price-group" >    
        <label for="price">Preço:</label>
        <input type="text" name="price" class="form-control">
           <div class="alert alert-danger" style="display: none" id="price-alert" >
            <p>Informe o conteúdo deste campo corretamente.</p>
        </div>
    </div>       

    



    <input type="submit" id="create_procedures" class="botao btn btn-lg btn-success" value="Adicionar">

</form>






@endsection