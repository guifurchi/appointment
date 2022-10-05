<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Header;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;
use stdClass;
use App\Models\User;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\InspecaoController;
use Illuminate\Auth\Events\Authenticated;
use App\Http\Controllers\authController;
use \App\Http\Requests\UserRequest;
use App\Models\Nivel;


class userController extends Controller
{

    public function __construct()
    {
        $this->user = new User();
        $this->valid = new authController();
    }

    public function index()
    {
        if($this->valid->validation()){
            $level = DB::table('nivel')->get();
            return view('cadastrar', compact(['level']),[
                'title' => 'Cadastrar Usuário', 
                'action' => '',
                'erro' => ''
            ]);
        }else{
            return $this->valid->redirectToLogin();
        }

    }

    public function newUserPage()
    {
            return view('novoUsuario',[
                'title' => 'Cadastrar Usuário', 
                'action' => '',
                'erro' => ''
            ]);

    }

    public function create(UserRequest $request)
    {

            //verificar se a email já foi cadastrada no sistema
            $users = DB::table('users')->where('email', $_POST['email'])->first();
            $level = DB::table('nivel')->get();

            if(!isset($users)){
                echo 'pode inserir';
                $user = $this->user;
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = md5($request->input('password'));
                $user->nivel = $request->input('nivel');
                $user = $user->save();
                return redirect('/usuarios');
            }else{
                return view('cadastrar', compact('level'), [
                    'title' => 'Cadastrar Usuário', 
                    'action' => '',
                    'erro' => 'usuário ja cadastrado'
                ]);
            }


    }

    public function read()
    {
        return $this->user;
    }

    public function store(Request $request)
    {
      //
    }

    public function showUser($id)
    {
        if($this->valid->validation()){
            $user = $this->user->find($id);

            return view('showUser', compact('user'), [
                'title' => 'Detalhes do registro', 
                'action' => ''
            ]);

        }else{
            return $this->valid->redirectToLogin();
        }
    }

    public function edit($id)
    {
        if($this->valid->validation()){
            $user = $this->user->find($id);
            $level = DB::table('nivel')->get();

            return view('cadastrar', compact(['user','level']), [
                'title' => 'Alterar Usuário', 
                'action' => 'Novos dados do Usuário',
                'erro' => ''
            ]);

        }else{
            return $this->valid->redirectToLogin();
        }
    }

    public function update(Request $request, $id)
    {
        if($this->valid->validation()){

            $this->user->where(['id' => $id])->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            return redirect('/usuarios');
        }else{
            return $this->valid->redirectToLogin();
        }

    }

    public function destroy($id)
    {
        if($this->valid->validation()){

            $this->user->destroy($id);
            return redirect('/usuarios');

        }else{
            return $this->valid->redirectToLogin();
        }

    }

    public function usersQuery()
    {
        if($this->valid->validation()){
            $users = $this->read()->paginate(5);
            $validA = $this->valid->validAction();

            return view('usersQuery', compact(['users','validA']), [
                'title' => 'Usuários', 
                'action' => 'Usuários cadastrados'
            ]);
        }else{
            return $this->valid->redirectToLogin();
        }
    }

    //controle de senhas
    public function editPassword($id, $erro = null)
    {
        if($this->valid->validation()){

            $user = $this->user->find($id);
            return view('password', compact('user'), [
                'title' => 'Alterar Senha', 
                'action' => 'Favor digitar as senhas',
                'erro' => $erro
            ]);

        }else{
            return $this->valid->redirectToLogin();
        }
    }

    public function validPassword($id)
    {
        $user = $this->user->find($id);

        if($user->password == md5($_POST['password_old'])  && $user->password != md5($_POST['password']) ){
            $this->validPassword = md5($_POST['password']);
            $validPass = $this->validPassword;

            return $this->updatePassword($validPass, $id);

        }else{

            if($user->password != md5($_POST['password_old'])){
                $erro = "Senha atual incorreta!";
            }
            elseif($user->password != md5($_POST['password'])){
                $erro = "Senha igual a anterior";
            }
            elseif(md5($_POST['password_old']) == md5($_POST['password'])){
                $erro = "Senha nova deve ser diferente a Senha atual!";
            }

            $this->validPassword = false;
            $validPass = $this->validPassword;
            return $this->editPassword($id, $erro); 
        }
    }

    public function updatePassword($validPass, $id)
    {
        if($this->valid->validation()){

            $this->user->where(['id' => $id])->update([
                'password' => $validPass
            ]);
            return redirect('/mainPage');
            
        }else{
            return $this->valid->redirectToLogin();
        }
    }
}