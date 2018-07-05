
<div class="row">
    <div class="col-sm-4 col-md-3 sidebar">
        <div class="mini-submenu">

        </div>

        <div class="list-group">
            <span href="#" class="list-group-item active">
                Submenu
                <span class="pull-right" id="slide-submenu">
                    <i class="fa fa-times"></i>
                </span>
            </span>
            <a href="{{ route('procedimentos.create') }}"  class="list-group-item">
                <i class="fa fa-comment-o"></i> Cadastrar procedimento
            </a>
            <a href="{{ route('procedimentos.index') }}"  class="list-group-item">
                <i class="fa fa-search"></i> Excluir procedimento
            </a>
            <a href="{{ route('procedimentos.index') }}"  class="list-group-item">
                <i class="fa fa-search"></i> Alterar procedimentos
            </a>

            <a href="{{ route('procedimentos.index') }}" class="list-group-item">
                <i class="fa fa-search"></i> Exibir todos procedimento
            </a>
             <a href="{{ route('pacientes') }}"  class="list-group-item">
                <i class="fa fa-search"></i> Listar clientes
            </a>
        <a href="{{route('relatorio')}}" class="list-group-item">
                <i class="fa fa-search"></i> Relatorio de requisições
            </a>
            
            <a href="{{ route('createAdm') }}" class="list-group-item">
                <i class="fa fa-search"></i> Cadastrar Administrador
            </a>
            <a href="{{ route('createOp') }}" class="list-group-item">
                <i class="fa fa-search"></i> Cadastrar Operador
            </a>
            
           
        </div>
    </div>

   

