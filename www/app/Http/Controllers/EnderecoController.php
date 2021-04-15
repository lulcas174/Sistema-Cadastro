<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\CadastroEmpresa;

    class EnderecoController extends Controller{
    public function index($id){
            //$enderecos = Endereco::all();
        $enderecos = Endereco::join('cadastro_empresas','cadastro_empresas.id','=','enderecos.id_empresa')->select('enderecos.*')->where('enderecos.id_empresa', $id)->get();
        return view('view.endereco.enderecoDataTable',compact('enderecos','id'));
    }
    public function editarEmpresa($id){
        return view('view.endereco.enderecoUpdate',compact('id'));
    }
    public function cadastrarNovo($id){
        return view('view.endereco.cadastrarNovoEndereco',compact('id'));
    }
    public function create(Request $request){
        // dd($request);
        if($request->principal ==''){
        $request->principal= 'N';
    }
        Endereco::create([

        'id_empresa'=>$request->id_empresa,
        'cep'=>$request->cep,
        'rua'=>$request->rua,
        'bairro'=>$request->bairro,
        'cidade'=>$request->cidade,
        'estado'=>$request->estado,
        'principal'=>$request->principal,
        ]);
        return redirect()->back()->with('registrado', 'Registrado com sucesso');
    }

    public function update(Request $request){
        $enderecos = Endereco::find($request->id);
        $enderecos -> update([
        'cep'=>$request->cep,
        'rua'=>$request->rua,
        'bairro'=>$request->bairro,
        'cidade'=>$request->cidade,
        'estado'=>$request->estado,
            ]);
    }
    public function deletar($id){
        Endereco::where('id',$id)->delete();
        return redirect()->route('endereco_index',$id);
    }
    }
