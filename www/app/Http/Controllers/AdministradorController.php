<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdministradorController extends Controller {
        //Retorno a view do cadastro do admin
    public function index(){
        return view ('view.administrador.AdminCadastro');
    }

        //Essa função adiciona o usuario ao sistema, a logica do que cada usuario pode fazer, vai ser mais abaixo

    public function create(Request $request){
        User::create([
                'name'=>$request->usuario,
                'password'=>$request->senha,
                'tipo_usuario'=>$request->tipo_usuario,
            ]);
            return redirect()->route('formulario_admin');
    }
    //Essa função serve para deletar o usuario, apenas o admin vai poder ver essa página, então achei que seria útil ter uma área de excluir
    public function delete($id){
        user::where('id',$id)->delete();
            return redirect()->route('formulario_admin');
    }
    //Essa função trás todos os usuários do banco de dados, a gente vai tratar essa função na view
    public function list(){
        $registroAdmin = User::all();
            return view('view.administrador.AdminDataTable', compact('registroAdmin'));
    }
    /*
    Lucas do futuro que esteja lendo, lembre-> eu achei muito legal fazer essa função.
    Assim, ela foi bem dificil pensar nela, foi sem dúvidas o meu bloqueio que eu mais demorei
    -meu deus grandioso Lucas do passado, por que você achou essa função de fazer sendo que agora, eu, Lucas do futuro vejo como algo simples
    -Calma, meu grande amigo, Lucas do futuro, eu achei dificil pensar nela porque eu não entendia uma forma de fazer os usuarios irem para cada lugar, eu tava com esse bloqueio
    mas foi relativamente simples, caso, ele esteja logado com um usuario do tipo administrador, ele vai para
    a área de admin, se for outro, vai para outra página.

    -Caro Lucas do passado, como vamos ter um usuario admnistrador antes de ter um usuario admin?! Responda-me

    -Meu grandiosissimo Lucas do futuro, é muito simples, eu consigo criar uma seed que alimenta o banco já com um tipo de usuario pré-definido hehehe
    */
    public function verificar(Request $request){
    $senha = $request->Senha;
    $login = $request->Login;
//toda vez que fizer um select no banco precisa de um get para trazer vários dados de uma tabela.
//o find serve para pegar um ID especifico
//Lembrar que isso não é bem um array, é um array, mas o laravel chama de coleção de infos
//Sim, é uma autenticação bem rudimentar, eu não entendi como usar o ACL
    $registroAdmin = User::select('*')->where('name',$login)->get();
            if($registroAdmin[0]->password === $senha){
                if($registroAdmin[0]->tipo_usuario === 'administrador'){
                return redirect()->route('dashboard_admin');
    }else if($registroAdmin[0]->tipo_usuario === 'editor'){
                return redirect()->route('formulario_registro');
    }else if($registroAdmin[0]->tipo_usuario === 'visualizador'){
                //enviar para so uma view com data table
        return redirect()->route('dataTableVisualizador');
    }
    }else{
        return redirect()->back()->with('incorreta', 'Senha incorreta');
                //echo "<script> alert('error modafoca'); </script>";
    }
    }
    }
