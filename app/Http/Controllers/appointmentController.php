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

    public function panel()
    {
        if($this->auth->validation()){

            $user = $this->users->find($_SESSION['id']);

                return view('panel', compact('user'));

        }else{

                return $this->auth->redirectToLogin();

        }
    
    }

    public function appointments(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointments');
        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentConfig(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentConfig');

        }else{

                return $this->auth->redirectToLogin();

        }

    }
    
    public function appointmentConfigPage(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentConfigPage');
            
        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentList(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentList');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentLink(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentLink');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentCalendar(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentCalendar');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentAdd(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentAdd');

        }else{

                return $this->auth->redirectToLogin();

        }

    }
    
    public function appointmentConfirm(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentConfirm');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentHolidayConfig(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentConfigHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }
    
    public function appointmentHolidayAdd(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentAddHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentHolidayEdit(ConsultaRequest $request = null)
    {
        if($this->auth->validation()){

            return view('appointmentAddHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

}