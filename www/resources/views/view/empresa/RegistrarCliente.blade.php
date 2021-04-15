    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- bootstrap  CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- minha folha de estilo -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
    <div class = "form-container-registro">
        <p class="h5">Adicione o cliente ao sistema!</p>
    <form action="{{isset($registro->id)?route('formulario_edicao'):route('formulario_insercaoDados')}}" id ="form_empresa" method="POST">
    @csrf
    @method('POST')
        <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">Nome Empresa:</label>
        <div class="col-sm-10">
        <input type="hidden" id="id_empresa" name="id_empresa" value={{isset($registro->id)?$registro->id:''}}>
        <input type="text"   class="form-control" value="{{isset($registro->nomeEmpresa)?$registro->nomeEmpresa:''}}"name="nomeEmpresa">
    </div>
    </div>
        <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">CNPJ:</label>
        <div class="col-sm-10">
        <input type="number"  class="form-control" value="{{isset($registro->cnpj)?$registro->cnpj:''}}"name="cnpj">
    </div>
    </div>
    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">Telefone:</label>
        <div class="col-sm-10">
        <input type="number"  class="form-control" value="{{ isset($registro->telefone)?$registro->telefone:'' }}" name="telefone">
    </div>
    </div>
    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">Nome do Responsável:</label>
        <div class="col-sm-10">
        <input type="text"  class="form-control" value="{{isset($registro->nomeResponsavel)?$registro->nomeResponsavel:''}}" name="nomeResponsavel">
    </div>
    </div>
    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
        <input type="email"  class="form-control" value="{{isset($registro->email)?$registro->email:''}}" name="email">
    </div>
    </div>

    <div class="botao">
    <button type="submit" id="adicionar_empresa" form="form_empresa"class="btn btn-primary">Adicionar Empresa</button>

    <button type="hidden" id="salvar_empresa" class="btn btn-primary">Salvar</button>

    <div class="botaoEditar">
    <a href="{{route('formulario_listagem')}}" class="btn btn-primary">Visualizar cadastro</a>
    <!--
    Eu sei que esse botão causa um "problema de segurança" mas eu de coração, não consegui fazer
    -->
    <a href="{{route('dashboard_admin')}}"id="botao_voltar" class="btn btn-danger">Voltar</a>

    <a href="{{route('formulario_login')}}" class="btn btn-danger">Sair do sistema</a>



    </div>

    </form>
    </div>
    </div>
    </div>
    </body>
    <script>
    let id = document.getElementById('id_empresa').value;

        if(id != ''){
            document.getElementById('salvar_empresa').style.visibility = "visible";
            document.getElementById('adicionar_empresa').style.visibility="hidden";
            document.getElementById('botao_voltar').style.visibility="hidden";
        }else{
            document.getElementById('salvar_empresa').style.visibility = "hidden";
            document.getElementById('adicionar_empresa').style.visibility="visible";
            document.getElementById('botao_voltar').style.visibility="visible";

        }
    </script>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </html>
