    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <form action="{{route('endereco_update')}}" id="form_endereco"method="POST">
            @csrf
        <div class="row mb-3">
            <div class = "form-container-registro">
                <form >
            <label  class="col-sm-2 col-form-label">Endereço:</label>
            <input type="hidden" value="{{$id}}" name="id">
            <label>Cep:
                <input name="cep" type="text" id="cep"  class="form-control"></label><br />
                <label>Rua:
                <input name="rua" type="text" id="rua" class="form-control" ></label><br />
                <label>Bairro:
                <input name="bairro" type="text" id="bairro"  class="form-control" /></label><br />
                <label>Cidade:
                <input name="cidade" type="text" id="cidade" class="form-control"/></label><br/>
                <label>Estado:
                <input name="estado" type="text" id="uf" class="form-control"/></label><br/>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input"value="S" name="principal" id="prinicpal">
                    <label class="form-check-label" >Principal</label>
                </div>

                    <div >
                    <button type="submit" id="adicionar_endereco" class="btn btn-primary">Adicionar Endereco</button>
                    <a class="btn btn-primary" href="{{route('formulario_listagem')}}">Voltar</a>
                    </div>

                </form>
            </div>
            </div>





                <script></script>
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <script>

            $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
            });
            </script>
    </body>
    </html>
