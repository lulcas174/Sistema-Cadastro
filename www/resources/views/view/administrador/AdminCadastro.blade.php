<!DOCTYPE html>
<html lang="en">
<head>
    <!-- importando bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--Crio uma div para armazenar o formulario e uma div para armazenar os botoes e organaiza-los pelo CSS-->
    <div class="content formulario_administrador">
        <div class="texto_inicio">
                <a href="{{route('dashboard_admin')}}"><i class="fas fa-door-open"></i></a>
                <h3 style="margin: 0 auto;">Bem vindo!</h3>
    </div>
        <!--Eu defino um action nesse form, para ele me levar para a rota de create-->
    <form action="{{route('formulario_admin_insercao')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Usuário</label>
            <div class="col-sm-9">
                <input type="text" class="form-control col-sm-3" name="usuario">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Senha</label>
            <div class="col-sm-9">
                <input type="password" class="form-control"name="senha">
            </div>
        </div>
        <!--Eu defino uma div content, depois eu dou um select, e a magica de pegar o input vai ser pelo post que vai pelo selct,
        em baixo eu chamo dois botoes, ambos no form, um deles vai levar para o data table
        -->
        <div class = "content">
            <select class="form-select" aria-label="Default select example" name="tipo_usuario">
                <option selected>Selecionar tipo de usuario</option>
                <option value="administrador">ADM</option>
                <option value="editor">Editor</option>
                <option value="visualizador">Visualizador</option>
            </select>

            <div class="botao-administrador">
                <button type="submit" class="btn btn-success">Cadastre</button>
                <a class="btn btn-info" href="{{route('formulario_admin_listar')}}">Visualize os cadastros</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
