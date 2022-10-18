<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ConsultaRequest;


class appointmentController extends Controller
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

    public function appointmentHolidayConfig(ConsultaRequest $request = null)
    {
            return view('appointmentConfigHoliday');
    }
    
    public function appointmentHolidayAdd(ConsultaRequest $request = null)
    {
            return view('appointmentAddHoliday');
    }

    public function appointmentHolidayEdit(ConsultaRequest $request = null)
    {
            return view('appointmentAddHoliday');
    }

}