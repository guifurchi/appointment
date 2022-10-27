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
        $this->index = new indexController();
    }

    public function index()
    {
        if($this->valid->validation()){
            $level = DB::table('u_level')->get();
            return view('access', compact(['level']),[
                'title' => 'access Usuário', 
                'msg' => '',
                'erro' => ''
            ]);
        }else{

            return $this->valid->redirectToLogin();

        }

    }

    public function eula() 
    {
        return view('eula',[
            'title' => 'Termos de uso', 
            'msg' => '',
            'erro' => ''

        ]);
    }

    public function privacity() 
    {
        return view('privacity',[
            'title' => 'Privacidade', 
            'msg' => '',
            'erro' => ''

        ]);
    }

    public function newUserPage()
    {
            return view('newUser',[
                'title' => 'access Usuário', 
                'msg' => '',
                'erro' => ''
            ]);

    }

    public function create(UserRequest $request)
    {
        if($this->valid->validation()){
        
            //verificar se a email já foi cadastrada no sistema
            $users = DB::table('users')->where('u_email', $_POST['email'])->first();

            if(!isset($users)){
                $user = $this->user;
                $user->u_name = $request->input('name');
                $user->u_email = $request->input('email');
                $user->u_password = md5($request->input('password'));
                $user->u_agreementEulaPrivacity = $request->input('u_agreementEulaPrivacity');
                $user->u_planType = $request->input('u_planType');
                $user = $user->save();
                
                //autentica, inicia a sessão e cria as $_SESSION de usuário.
                return $this->valid->authCreate($request->input('email'), md5($request->input('password')));

            }else{
                return view('newUser', [
                    'title' => 'access Usuário', 
                    'msg' => '',
                    'erro' => 'Email já cadastrado!'
                ]);
            }

        }else{
            return $this->valid->redirectToLogin();
        }


    }

    public function read()
    {

        return $this->user;

    }


    public function update(Request $request, $id)
    {
        if($this->valid->validation()){

            $this->user->where(['id' => $id])->update([
                'u_name' => $request->name,
                'u_email' => $request->email
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
    public function editPassword($erro = null, $updated = null)
    {
        if($this->valid->validation()){

            $msg = null;

            if($updated){
                $msg = 'Senha atualizada com sucesso.';
            }

            return view('password',  
            [
                'msg' => $msg, 
                'erro' => $erro
            ]);

        }else{

            return $this->valid->redirectToLogin();

        }
    }

    public function validPassword($id)
    {
        $user = $this->user->find($id);

        if($user->u_password == md5($_POST['password_old'])  && $user->u_password != md5($_POST['password']) ){
            $this->validPassword = md5($_POST['password']);
            $validPass = $this->validPassword;

            return $this->updatePassword($validPass, $id);

        }else{

            if($user->u_password != md5($_POST['password_old'])){
                $erro = "Senha atual incorreta!";
            }
            elseif($user->u_password != md5($_POST['password'])){
                $erro = "Senha igual a anterior";
            }
            elseif(md5($_POST['password_old']) == md5($_POST['password'])){
                $erro = "Senha nova deve ser diferente a Senha atual!";
            }

            $this->validPassword = false;
            $validPass = $this->validPassword;
            return $this->editPassword($erro, null); 
        }
    }

    public function updatePassword($validPass, $id)
    {

            $update = $this->user->where(['id' => $id])->update([
                'u_password' => $validPass
            ]);

            if($update){
                return $this->editPassword(null, true);
            }
            
    }
}