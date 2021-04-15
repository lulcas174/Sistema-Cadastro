<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- importando bootstrap e meu css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!---Adicionando fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        
        <title>Login do cliente</title>
</head>
<body>
</div>
</header>
<!-- formulario do projeto-->
    <div class="container">
        <div class = "form-container">
            <hr>
            <p class="h5">Olá! Faça o login no sistema para continuar</p>
            <form  id="formulario_login" action="{{route('login')}}" method="POST"><!-- lembrar de adicionar a rota ao form-->
                @csrf
            <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="login"  required name = "Login" >
</div>
</div>
            <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
            <input type="password"  class="form-control" name = "Senha">
</div>
</div>
            <div class="botao-login">
                <button type ="submit"form="formulario_login" id="botao_entrar" class="btn btn-primary">Entrar</button>
                
</div>
</form>
@if (\Session::has('incorreta'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('incorreta') !!}</li>
        </ul>
    </div>
@endif
</div>
</div>
</div>
</body>

</html>
