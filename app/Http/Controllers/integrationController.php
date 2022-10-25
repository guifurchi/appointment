<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class integrationController extends Controller
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

            return view('integration');
        
        }else{

            return $this->auth->redirectToLogin();

        }


    }

    public function integrationSite(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('integrationSite');
            
        }else{

            return $this->auth->redirectToLogin();

        }


    }

    public function integrationList(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('integrationList');
            
        }else{

            return $this->auth->redirectToLogin();

        }


    }


}