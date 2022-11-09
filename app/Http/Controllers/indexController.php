<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\authController;

class indexController extends Controller
{

    public function __construct()
    {
        $this->valid = new authController();
    }


    public function index()
    {
        return view('login', [
            'title' => 'Login', 
            'action' => '',
            'erro' => ''
        ]);
    }

    public function confirmAction($action)
    {
        if($action == 'destroy'){

            return view('/confirmAction',[
                'action' => 'delete',
                'title' => 'Sucesso!',
                'msg' => 'Usuário excluído!',
                'msg2' => 'Caso queira criar ou acessar outra conta clique em um dos botões abaixo.'
            ]);

        }
}

}
