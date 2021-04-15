    <?php

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


    //essa é a primeira rota do meu trabalho, ela vai para o index (pagina de login)
    Route::get('/', 'EmpresaController@index')->name('formulario_login');
    Route::post('/login','AdministradorController@verificar')-> name('login');
    //essa rota vai para a página de cadastro, assim que apertar o entrar vai para o cadastros
    Route::get('/register', 'EmpresaController@register')->name('formulario_registro');
    //uma rota post para adicionar as informações do cadastro no banco
    Route::post('/register/insert', 'EmpresaController@create')->name('formulario_insercaoDados');
    //Eu passo um id na url para pegar ele no controller e criar a função de deletar
    Route::get('/formulario_deletar/{id}','EmpresaController@delete')->name('formulario_deletar');
    //Eu to criando essa rota, para chamar em um botao na view registrar e trazer a lista do banco
    Route::get('/lista','EmpresaController@list')->name('formulario_listagem');
    //Eu utilizo o put para atualizar as informações do banco
    Route::post('/update','EmpresaController@update')->name('formulario_edicao');
    //Eu to utilizando essa para visualizar as informações com base no ID
    Route::get('/editar/{id}','EmpresaController@editar')->name('formulario_editar');
    ############Rota do administrador########
    ####Lucas do futuro quando estiver estudando esse código, me desculpa, eu esqueci de comentar quando fazia, então pode não fazer sentido de cara, mas você consegue
    //Leva a rota index do administrador
    Route::get('/admin', 'AdministradorController@index')->name('formulario_admin');
    //faz o create
    Route::post('registroAdmin','AdministradorController@create')->name('formulario_admin_insercao');
    //Eu amo explicar minhas rotas que fazem um get do ID pela url, eu tinha muita dificuldade de fazer no começo em php puro hehehe
    route::get('deletar_registro/{id}','AdministradorController@delete')->name('formulario_admin_deletar');
    //A primeira vai para a rota aonde vai imprimir, eu implememento isso na datatable de admincadastro
    route::get('listar_administrador','AdministradorController@list')->name('formulario_admin_listar');

    //Essa rota ta no controle de empresa porque eu precisava que percoresse o banco de empresa
    route::get('/usuario/visualizador', 'EmpresaController@visualizadorView')->name('dataTableVisualizador');


    //Rota do dashboard
    route::get('dashboard','EmpresaController@DashBoard')->name('dashboard_admin');
    //Rota do CRUD endereço
    route::get('endereco_index/{id}','EnderecoController@index')->name('endereco_index');
    route::post('endereco_create','EnderecoController@create')->name('endereco_create');
    route::get('endereco_editar/{id}','EnderecoController@editarEmpresa')->name('endereco_editar');
    route::post('update_endereco','EnderecoController@update')->name('endereco_update');
    route::get('endereco_deletar/{id}','EnderecoController@deletar')->name('endereco_deletar');
    route::get('endereco_formulario_cadastro/{id}','EnderecoController@cadastrarNovo')->name('endereco_formulario_cadastro');



