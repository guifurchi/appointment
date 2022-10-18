<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class serviceController extends Controller
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
        return view('services');
    }

    public function serviceAdd(ConsultaRequest $request = null)
    {
        return view('serviceAdd');
    }

    public function serviceEdit(ConsultaRequest $request, $id)
    {
        /*
        if($this->auth->validation()){
            //
            $this->consulta->where(['id' => $id])->update([
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'data_consulta' => $request->data_consulta,
                'observacao' => $request->observacao,
                'dentista' => $request->dentista
            ]);
            return redirect('/consultaQuery');
        }else{
            return $this->auth->redirectToLogin();
        }
        */
    }

    public function serviceDestroy($id)
    {   /*
        if($this->auth->validation()){
            $this->consulta->destroy($id);
            return redirect('/consultaQuery');
        }else{
            return $this->auth->redirectToLogin();
        }
        */
    }

    public function appointmentsQuery()
    {   
        /*
        if($this->auth->validation()){
            $validA = $this->auth->validAction();
            $consulta = $this->read()->where('id_user',$_SESSION['id']);

            return $consulta;

        }else{
            return $this->auth->redirectToLogin();
        }
        */
    }

    public function read()
    {
        
        return $this->consulta;

    }

}