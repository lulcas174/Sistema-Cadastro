<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Icones bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!--- Importando o dataTable CSS--->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
    <!-- meu arquivo css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Dashboard do chefe</title>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GRTS - admin </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav px-5">
            <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{route('formulario_login')}}">Sair do sistema</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                    <a class="nav-link active"  href="{{route('formulario_admin')}}">
                    <span data-feather="home"></span>
                    Cadastre novos usuários
                    </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{route('formulario_registro')}}">
                    <span data-feather="file"></span>
                    Adicione novas empresas, ou edite
                    </a>
            </li>
        </ul>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <h4>Visualize as empresas:</h4>
            <div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Nome da Empresa</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Nome do responsável</th>
                <th>Email</th>
                    <!--Se eu conseguir fazer udas tabelas se relacionando, vamos utilizar um botao para
                        ele chegar aqui visualizar a empresa-->
            </tr>
        </thead>
    @foreach ($visualizadorAdmin as $variavelPercorrer )
        <tbody>
            <tr>
            <td>{{$variavelPercorrer['nomeEmpresa']}}</td>
            <td>{{$variavelPercorrer['cnpj']}}</td>
            <td>{{$variavelPercorrer['telefone']}}</td>
            <td>{{$variavelPercorrer['nomeResponsavel']}}</td>
            <td>{{$variavelPercorrer['email']}}</td>
            </tr>
    @endforeach
        </tbody>
            </table>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </div>
        </main>
        </div>
    </div>
<!-- bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
