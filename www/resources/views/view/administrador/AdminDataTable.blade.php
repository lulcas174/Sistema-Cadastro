    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!--font awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <!--estilo -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Datatable css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
        <title>Visualizar os usuarios</title>
    </head>
    <body>
    <div class="tabela-estilo">
        <table id="tabela-empresa" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                </tr>
            </thead>
    @foreach ($registroAdmin as $variavelPercorrer )
        <tbody>
            <tr>
                <td>{{$variavelPercorrer['name']}}</td>
                <td><a href="{{route('formulario_admin_deletar',$variavelPercorrer['id'])}}"><i class="fas fa-trash"></i></a></td>
            </tr>
    @endforeach
        </tbody>
        </table>
    <a class="btn btn-danger" href="{{route('formulario_login')}}">Voltar para o login</a>
    <a class="btn btn-warning" href="{{route('formulario_admin')}}">Voltar para o cadastro de usuarios</a>

<!--Data table JS-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabela-empresa').DataTable();
        } );
    </script>
    </body>
    </html>
