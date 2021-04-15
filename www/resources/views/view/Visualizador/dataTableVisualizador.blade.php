        <!DOCTYPE html>
        <html lang="en">
        <head>
            <!--- Importando bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <!--- Importando o dataTable--->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">


            <!-- Font awsome-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
                <!--Estilo CSS-->
                <link href="{{ asset('css/style.css') }}" rel="stylesheet">

            <title>Ver os clientes</title>
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
                    <th scope="col">CEP</th>
                    <th scope="col">RUA</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Pricipal</th>
                </tr>
            </thead>
            <!-- para fazer esse foreach eu precisei de um join, porque eu precisava puxar as informações de duas tabelas -->
            @foreach ($registro as $variavelPercorrer )
            <tbody>
                <tr>
                    <td>{{$variavelPercorrer['nomeEmpresa']}}</td>
                    <td>{{$variavelPercorrer['cnpj']}}</td>
                    <td>{{$variavelPercorrer['telefone']}}</td>
                    <td>{{$variavelPercorrer['nomeResponsavel']}}</td>
                    <td>{{$variavelPercorrer['email']}}</td>
                    <td>{{$variavelPercorrer['cep']}}</td>
                <td>{{$variavelPercorrer['rua']}}</td>
                <td>{{$variavelPercorrer['bairro']}}</td>
                <td>{{$variavelPercorrer['cidade']}}</td>
                <td>{{$variavelPercorrer['estado']}}</td>
                <td>{{$variavelPercorrer['principal']}}</td>
                </tr>
                @endforeach 
        
            <tfoot>
                <tr>
                    <th scope="col">Nome empresa</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">telefone</th>
                    <th scope="col">Nome do Responsável</th>
                    <th scope="col">email</th>
                    <th scope="col">CEP</th>
                    <th scope="col">RUA</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Pricipal</th>
                </tr>
            </tfoot>
        </tbody>
        </table>
        <a href="{{route('formulario_login')}}" class="btn btn-danger"style="margin:20px;">Voltar</a>
        </div>

        <script>
            $(document).ready(function() {
                $('#tabela-empresa').DataTable();
            } );
                </script>

        </body>
        </html>
