    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!--- Importando bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--- Importando o dataTable CSS--->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">


        <!-- Font awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <!--Estilo CSS-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <title>datatable dos clientes</title>
    </head>
    <body>
        <!--class="table table-striped table-bordered dt-responsive nowrap" -->
        <div class="tabela-estilo">
    <table id="tabela-empresa" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nome empresa</th>
                <th scope="col">CNPJ</th>
                <th scope="col">telefone</th>
                <th scope="col">Nome do Responsável</th>
                <th scope="col">email</th>
                <th>Ações</th>
            </tr>

        </thead>
        @foreach ($registro as $variavelPercorrer )
        <tbody>
            <tr>
                <td>{{$variavelPercorrer['nomeEmpresa']}}</td>
                <td>{{$variavelPercorrer['cnpj']}}</td>
                <td>{{$variavelPercorrer['telefone']}}</td>
                <td>{{$variavelPercorrer['nomeResponsavel']}}</td>
                <td>{{$variavelPercorrer['email']}}</td>
                <td><a href="{{route('formulario_deletar',$variavelPercorrer['id'])}}" class="btn btn-primary btn-sm">
                    <i class="fas fa-trash"></a></i>
                    <a href="{{route('formulario_editar',$variavelPercorrer['id'])}}"class="btn btn-primary btn-sm"><i class="fas fa-edit"></a></i>
                    <a href="{{route('endereco_index',$variavelPercorrer['id'])}}" class="btn btn-primary btn-sm"><i class="fas fa-home"></a></i>


                </td>
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <th>Nome empresa</th>
                <th>CNPJ</th>
                <th>telefone</th>
                <th>Nome do Responsável</th>
                <th>email</th>
                <th>Ações</th>
            </tr>
        </tfoot>

    </table>
    </div>
    <a href="{{route('formulario_registro')}}" class="btn btn-danger"style="margin:20px;">Voltar</a>
    <script>
    $(document).ready(function() {
        $('#tabela-empresa').DataTable();
    } );
        </script>
<!-- Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
    </body>
    </html>
