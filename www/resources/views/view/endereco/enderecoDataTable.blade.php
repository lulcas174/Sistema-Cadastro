    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!--- importando data table -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
        <!--style -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="tabela-estilo">
            <div class="table-responsive">
                <input type="hidden" value="{{$id}}" name="id">
                <table id="tabela-empresa" class="table table-striped table-bordered dt-responsive nowrap"  style="width:100%">
        <thead>
            <tr>
            <th>Cep</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Pricipal</th>
            <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $enderecos as $Endereco )
            <tr>

            <td>{{$Endereco['cep']}}</td>
            <td>{{$Endereco['rua']}}</td>
            <td>{{$Endereco['bairro']}}</td>
            <td>{{$Endereco['cidade']}}</td>
            <td>{{$Endereco['estado']}}</td>
            <td>{{$Endereco['principal']}}</td>
            <td><a href="{{route('endereco_editar',$Endereco['id'])}}" class="btn btn-primary btn-sm"><i class="fas fa-map-marked-alt"></a></i>
                <a href="{{route('endereco_deletar',$Endereco['id'])}}" class="btn btn-primary btn-sm"><i class="fas fa-trash"></a></i></td>
            </tr>
            @endforeach
        </tbody>
        </table>

    </div>
                <div class="endereco_voltar">
                    <a class="btn btn-primary btn-sm" href="{{route('formulario_listagem')}}">Voltar</a>
                </div>
                    <div class = "enderecoAdicionar_botao">
                    <a class="btn btn-primary btn-sm" href="{{route('endereco_formulario_cadastro',$id)}}">Adicionar Novo endereço</a>
                </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#tabela-empresa').DataTable();
            } );
                </script>

    </body>
    </html>
