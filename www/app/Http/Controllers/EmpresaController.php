<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroEmpresa;
Use App\User;

class EmpresaController extends Controller{
    public function index(){
        return view ('view.login.LoginIndex');
    }
    public function register(){
        return view('view.empresa.RegistrarCliente');
    }
    public function create(Request $request){
        CadastroEmpresa::create([
            'nomeEmpresa'=>$request->nomeEmpresa,
            'cnpj'=>$request->cnpj,
            'telefone'=>$request->telefone,
            'nomeResponsavel'=>$request->nomeResponsavel,
            'email'=>$request->email,

    ]);
            return view('view.empresa.RegistrarCliente');
    }
        //Pego o ID pela rota, trato aqui no where para deletar
    public function delete($id){
        CadastroEmpresa::where('id',$id)->delete();
        return redirect()->route('formulario_listagem');
    }
    public function list(){
    //$registro pega todas as informações do banco
        $registro = CadastroEmpresa::all();
        return view('view.empresa.datatable',compact('registro'));
    }

    public function update(Request $request){
        $registro = CadastroEmpresa::findOrFail($request->id_empresa);
        $registro -> update([
        'nomeEmpresa'=>$request->nomeEmpresa,
        'cnpj'=>$request->cnpj,
        'telefone'=>$request->telefone,
        'nomeResponsavel'=>$request->nomeResponsavel,
        'email'=>$request->email,

    ]);
        return redirect()->route('formulario_listagem');

            //return redirect()->route('formulario_listagem');
    }
            //Pego o iD pela rota, trato o ID aqui no registro
    public function editar($id){
        $registro = CadastroEmpresa::findOrFail($id);
        return view('view.empresa.RegistrarCliente', compact('registro'));
        return redirect()->route('formulario_listagem');
    }

//essa rota vai servir para visualizar o dataTable do visualizador que precisa percorrer essa tabela, provavelmente vou alterar ao fazer o crud de endereços
    public function visualizadorView(){
//Estrutura do join ('tabela1','tabela1[campo que vai se repetir],'igualando','tabela2 . campo repetido')-> seleciono tudo da tabela cadastr_empresas
                //que nesse caso em especifico, eu preciso que traga todos os clientes e todos os endereços, então dei um select em tudo. Por fim, um get para pegar
        $registro = CadastroEmpresa::join('enderecos','enderecos.id_empresa','=','cadastro_empresas.id')->select('cadastro_empresas.*','enderecos.*')->get();
        return view('view.visualizador.dataTableVisualizador',compact('registro'));
}
//aqui é a função que o meu administrador consegue ver a tabela la no dash board
    public function DashBoard(){
        $visualizadorAdmin = CadastroEmpresa::all();
        return view('view.dashboard.dashboardAdmin',compact('visualizadorAdmin'));
    }

    }
