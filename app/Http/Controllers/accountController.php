<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilities;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\AccountRequest;
use Carbon\Carbon;


class accountController extends Controller
{
    private $consulta;
    private $valid;
    private $validN;

    public function __construct()
    {
        $utilities = new Utilities();
        $this->nacionality = $utilities->nacionality();
        
        $this->auth = new authController();
        $this->users = new User();
    }

    public function index()
    {
        if($this->auth->validation()){

        return view('integration');

        }else{

            return $this->auth->redirectToLogin();

        }

    }

    public function accountAdd(AccountRequest $request = null)
    {
        if($this->auth->validation()){

            return view('accountAdd');
                    
        }else{

            return $this->auth->redirectToLogin();

        }
        
    }

    public function accountEdit(AccountRequest $request = null)
    {
        if($this->auth->validation()){

            $user = $this->users->find($_SESSION['id']);
            $nacionality = $this->nacionality;
            return view('accountEdit', compact('user', 'nacionality'));
                    
        }else{

            return $this->auth->redirectToLogin();

        }
        
    }
    public function accountUpdate(AccountRequest $request)
    {
        if($this->auth->validation()){
            $this->users->where(['id' => $_SESSION['id']])->update([
                'u_name' => $request->u_name,   
                'u_email' => $request->u_email,
                'u_phone' => $request->u_phone,
                'u_cpf' => $request->u_cpf ,
                'u_gender' => $request->u_gender ,
                'u_marital_status' => $request->u_marital_status ,
                'u_type_ident' => $request->u_type_ident ,
                'u_type_ident_num' => $request->u_type_ident_num ,
                'u_nacionality' => $request->u_nacionality ,
                'u_birthday' =>  date('Y-m-d', strtotime($request->u_birthday)),
                'u_occupation' => $request->u_occupation ,
                'u_address' => $request->u_address ,
    
            ]);

            return redirect('/account/edit');
                    
        }else{

            return $this->auth->redirectToLogin();

        }
        
    }

    public function accountConfig(AccountRequest $request = null)
    {
        if($this->auth->validation()){

            return view('accountConfig');
                    
        }else{

                return $this->auth->redirectToLogin();

        }
        
    }

    public function accountDelete(AccountRequest $request = null)
    {
        if($this->auth->validation()){

            return view('accountEdit');
                    
        }else{
                return $this->auth->redirectToLogin();
        }
    }


}