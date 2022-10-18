<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class consultaController extends Controller
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
            
            $user = $this->users->find($_SESSION['id']);
            
            return view('consulta', compact('user'), [
            'title' => 'Agendar Consulta', 
            'action' => 'Por favor preencher os dados do formulário'
            ]);
        }else{
            return $this->auth->redirectToLogin();
        }
    }

    public function create(ConsultaRequest $request)
    {
        if($this->auth->validation()){
            $consulta = $this->consulta;
            $consulta->nome = $request->input('nome');
            $consulta->id_user = $_SESSION['id'];
            $consulta->telefone = $request->input('telefone');
            $consulta->endereco = $request->input('endereco');
            $consulta->data_consulta = $request->input('data_consulta');
            $consulta->dentista = $request->input('dentista');
            $consulta->observacao = $request->input('observacao');
            $insert = $consulta->save();

            if($insert){
                return redirect('/consultaQuery');
            }
        }else{
            return $this->auth->redirectToLogin();
        }
        
    }

    public function read()
    {
        
        return $this->consulta;

    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showDetails($id)
    {
        if($this->auth->validation()){
            $consulta = $this->consulta->find($id);

            return view('showDetail', compact('consulta'), [
                'title' => 'Detalhes do agendamento', 
                'action' => ''
            ]);
        }else{
            return $this->auth->redirectToLogin();
        }
}

    public function edit($id)
    {
        if($this->auth->validation()){
            $consulta = $this->consulta->find($id);

            return view('consulta', compact('consulta'), [
                'title' => 'Alterar agendamento', 
                'action' => 'Por favor preencher os dados do formulário'
            ]);
        }else{
            return $this->auth->redirectToLogin();
        }
    }

    public function update(ConsultaRequest $request, $id)
    {
        if($this->auth->validation()){
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
    }

    public function destroy($id)
    {
        if($this->auth->validation()){
            $this->consulta->destroy($id);
            return redirect('/consultaQuery');
        }else{
            return $this->auth->redirectToLogin();
        }

    }

    public function consultaQuery()
    {
        if($this->auth->validation()){
            $validA = $this->auth->validAction();
            $consulta = $this->read()->where('id_user',$_SESSION['id'])->paginate(5);

            return view('consultaQuery', compact(['consulta','validA']), [
                'title' => 'Agendamentos', 
                'action' => 'Agendamentos realizados'
            ]);
        }else{
            return $this->auth->redirectToLogin();
        }
    }

    public function panel(ConsultaRequest $request = null)
    {
            return view('panel');
    }

    public function appointments(ConsultaRequest $request = null)
    {
            return view('appointments');
    }

    public function appointmentConfig(ConsultaRequest $request = null)
    {
            return view('appointmentConfig');
    }

    public function appointmentList(ConsultaRequest $request = null)
    {
            return view('appointmentList');
    }

    public function appointmentLink(ConsultaRequest $request = null)
    {
            return view('appointmentLink');
    }

    public function appointmentCalendar(ConsultaRequest $request = null)
    {
            return view('appointmentCalendar');
    }

    public function appointmentAdd(ConsultaRequest $request = null)
    {
            return view('appointmentAdd');
    }
    
    public function appointmentConfirm(ConsultaRequest $request = null)
    {
            return view('appointmentConfirm');
    }

    public function appointmentConfigHoliday(ConsultaRequest $request = null)
    {
            return view('appointmentConfigHoliday');
    }
    
    public function appointmentAddHoliday(ConsultaRequest $request = null)
    {
            return view('appointmentAddHoliday');
    }

    public function services(ConsultaRequest $request = null)
    {
            return view('services');
    }

    public function serviceAdd(ConsultaRequest $request = null)
    {
            return view('serviceAdd');
    }
}