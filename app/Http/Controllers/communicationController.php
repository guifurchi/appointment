<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class communicationController extends Controller
{
    private $consulta;
    private $valid;
    private $validN;

    public function __construct()
    {
        $this->consulta = new Consulta();
        $this->auth = new authController();
        $this->users = new User();
    }
    
    public function index()
    {
        if($this->auth->validation()){

        return view('client');
        
        }else{

            return $this->auth->redirectToLogin();

        }


    }

    public function communicationNotify()
    {
        if($this->auth->validation()){

            return view('communicationNotify');
            
        }else{

                return $this->auth->redirectToLogin();
    
        }
    
    
    }

    public function communicationNotifyCreate()
    {
        if($this->auth->validation()){

            return view('communicationNotifyAdd');
            
        }else{

                return $this->auth->redirectToLogin();
    
        }
    
    
    }

    public function communicationEmail()
    {
        if($this->auth->validation()){

            return view('communicationEmail');
            
        }else{

                return $this->auth->redirectToLogin();
    
        }
    
    
    }

    public function communicationEmailCreate()
    {
        if($this->auth->validation()){

            return view('communicationEmailAdd');
            
        }else{

                return $this->auth->redirectToLogin();
    
        }
    
    
    }

    public function communicationEmailEdit()
    {
    if ($this->auth->validation()) {
        return view('communicationEmailEdit');
    } else {
        return $this->auth->redirectToLogin();
    }
}

    public function communicationEmailDelete()
    {
        if($this->auth->validation()){

            return view('communicationEmailDelete');
            
        }else{

                return $this->auth->redirectToLogin();
    
        }
    
    
    }


}