<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class clientController extends Controller
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

    public function clientAdd(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('clientAdd');

        }else{

            return $this->auth->redirectToLogin();

        }

    }

    public function clientList(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('clientList');
            
        }else{

            return $this->auth->redirectToLogin();

        }

    }


}