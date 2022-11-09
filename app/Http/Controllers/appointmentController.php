<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\available_opening_hour;
use App\Models\services_appointment;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use App\Http\Controllers\authController;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

class appointmentController extends Controller
{
    private $consulta;
    private $valid;
    private $validN;

    public function __construct()
    {
        $this->availableOpenningHours = new available_opening_hour();
        $this->serviceAppointments = new services_appointment();
        $this->appointments = new Appointment();
        $this->services = new Service();
        $this->auth = new authController();
        $this->users = new User();
    }

    public function index($updated = null)
    {
        if($this->auth->validation()){

            $appointments = $this->appointments->where('user_id',$_SESSION['id'])->get();

            $services_appointments = DB::table('services_appointments')
            ->join('appointments', 'services_appointments.appointment_id', '=', 'appointments.id')
            ->where('appointments.user_id',$_SESSION['id'])
            ->get();

            return view('appointments', compact('appointments','services_appointments'));

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


    public function appointmentConfig()
    {
        if($this->auth->validation()){

            $services = $this->services->get();
            
            return view('appointmentConfig', compact('services'));

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function getAppointmentArray($id)
    {

        return $data[] = [
            'user_id' => $id,
            'name' => isset($_POST['name']) ? $_POST['name'] : null,
            'presential'=> isset($_POST['presential']) ? $_POST['presential'] : null,
            'video' => isset($_POST['video']) ? $_POST['video'] : null,
            'video_provider' => isset($_POST['video_provider']) ? $_POST['video_provider'] : null,
            'is_hybrid' => isset($_POST['is_hybrid']) ? $_POST['is_hybrid'] : null,
            'att_local' => isset($_POST['att_local']) ? $_POST['att_local'] : null,
            'b_confirmar' => isset($_POST['b_confirmar']) ? $_POST['b_confirmar'] : null,
            'pass_agenda' => isset($_POST['pass_agenda']) ? $_POST['pass_agenda'] : null,
            'cancel_minimum_time_aux' => isset($_POST['cancel_minimum_time_aux']) ? $_POST['cancel_minimum_time_aux'] : null,
            'request_email' => isset($_POST['request_email']) ? $_POST['request_email'] : null,
            'request_telefone' => isset($_POST['request_telefone']) ? $_POST['request_telefone'] : null,
            'request_data_nascimento' => isset($_POST['request_data_nascimento']) ? $_POST['request_data_nascimento'] : null,
            'request_genero' => isset($_POST['request_genero']) ? $_POST['request_genero'] : null,
            'request_profession' => isset($_POST['request_profession']) ? $_POST['request_profession'] : null,
            'request_place_of_birth' => isset($_POST['request_place_of_birth']) ? $_POST['request_place_of_birth'] : null,
            'request_nacionalidade' => isset($_POST['request_nacionalidade']) ? $_POST['request_nacionalidade'] : null,
            'request_address' => isset($_POST['request_address']) ? $_POST['request_address'] : null,
            'request_doc_id' => isset($_POST['b_solicita_add']) ? $_POST['b_solicita_add'] : null,
            'desc' => isset($_POST['desc']) ? $_POST['desc'] : null,
            'b_notify_email' => isset($_POST['b_notify_email']) ? $_POST['b_notify_email'] : null,
            'email_cc' => isset($_POST['email_cc']) ? $_POST['email_cc'] : null,
            'national_holiday' => isset($_POST['national_holiday']) ? $_POST['national_holiday'] : null,
            'state_holiday' => isset($_POST['state_holiday']) ? $_POST['state_holiday'] : null,
            'time_between' => isset($_POST['time_between']) ? $_POST['time_between'] : null,
            'time_before' => isset($_POST['time_before']) ? $_POST['time_before'] : null,
            'time_after' => isset($_POST['time_after']) ? $_POST['time_after'] : null,
            'time_after_hour' => isset($_POST['time_after_hour']) ? $_POST['time_after_hour'] : null
        ];

        
    }


    public function getServicesArray($appointment_id)
    {
        foreach ($_POST['service_id'] as $i => $d) {

            $data = explode(';',$d);

            $service[] = [
                'user_id' => $_SESSION['id'],
                'appointment_id' => $appointment_id,
                'service_id' => $data[0],
                's_name' => $data[1]
            ];

        }

        return $service;

    }

    public function getAvailableOpenningHoursArray($appointment_id)
    {
        foreach($_POST['initial_time_monday'] as $i => $d){

            $data[] = [
                'user_id' => $_SESSION['id'],
                'appointment_id' => $this->getAppointmentId(),
                
                'initial_time_monday' => isset($_POST['initial_time_monday'][$i]) ? $_POST['initial_time_monday'][$i] : null,
                'end_time_monday' => isset($_POST['end_time_monday'][$i]) ? $_POST['end_time_monday'][$i] : null,
                'amount_monday' => isset($_POST['amount_monday'][$i]) ? $_POST['amount_monday'][$i] : null,
                
                'initial_time_tuesday' => isset($_POST['initial_time_tuesday'][$i]) ? $_POST['initial_time_tuesday'][$i] : null,
                'end_time_tuesday' => isset($_POST['end_time_tuesday'][$i]) ? $_POST['end_time_tuesday'][$i] : null,
                'amount_tuesday' => isset($_POST['amount_tuesday'][$i]) ? $_POST['amount_tuesday'][$i] : null,
    
                'initial_time_wednesday' => isset($_POST['initial_time_wednesday'][$i]) ? $_POST['initial_time_wednesday'][$i] : null,
                'end_time_wednesday' => isset($_POST['end_time_wednesday'][$i]) ? $_POST['end_time_wednesday'][$i] : null,
                'amount_wednesday' => isset($_POST['amount_wednesday'][$i]) ? $_POST['amount_wednesday'][$i] : null,
    
                'initial_time_thursday' => isset($_POST['initial_time_thursday'][$i]) ? $_POST['initial_time_thursday'][$i] : null,
                'end_time_thursday' => isset($_POST['end_time_thursday'][$i]) ? $_POST['end_time_thursday'][$i] : null,
                'amount_thursday' => isset($_POST['amount_thursday'][$i]) ? $_POST['amount_thursday'][$i] : null,
    
                'initial_time_friday' => isset($_POST['initial_time_friday'][$i]) ? $_POST['initial_time_friday'][$i] : null,
                'end_time_friday' => isset($_POST['end_time_friday'][$i]) ? $_POST['end_time_friday'][$i] : null,
                'amount_friday' => isset($_POST['amount_friday'][$i]) ? $_POST['amount_friday'][$i] : null,
    
                'initial_time_saturday' => isset($_POST['initial_time_saturday'][$i]) ? $_POST['initial_time_saturday'][$i] : null,
                'end_time_saturday' => isset($_POST['end_time_saturday'][$i]) ? $_POST['end_time_saturday'][$i] : null,
                'amount_saturday' => isset($_POST['amount_saturday'][$i]) ? $_POST['amount_saturday'][$i] : null,
    
                'initial_time_sunday' => isset($_POST['initial_time_sunday'][$i]) ? $_POST['initial_time_sunday'][$i] : null,
                'end_time_sunday' => isset($_POST['end_time_sunday'][$i]) ? $_POST['end_time_sunday'][$i] : null,
                'amount_sunday' => isset($_POST['amount_sunday'][$i]) ? $_POST['amount_sunday'][$i] : null
    
                ];

        }

        return $data;

    }

    public function getAppointmentId()
    {
        $appointment_id = $this->appointments->select('id')->where('user_id', $_SESSION['id'])->orderBy('id', 'desc')->limit(1)->get();

        foreach($appointment_id as $i => $id){
           return $id->id;
        }

    }
   

    public function appointmentCreate(AppointmentRequest $request, $id)
    {
        if($this->auth->validation()){

            $this->appointments->insert($this->getAppointmentArray($id));

            return $this->serviceAppointmentsCreate($this->getAppointmentId());

        }else{
            return $this->valid->redirectToLogin();
        }

    }


    public function serviceAppointmentsCreate($appointment_id)
    {
        if(isset($_POST['service_id'])){

            $this->serviceAppointments->insert($this->getServicesArray($appointment_id));

            return $this->availableOpenningHoursCreate($appointment_id);

        }else{

            return $this->availableOpenningHoursCreate();

        }

    }

    public function availableOpenningHoursCreate($appointment_id)
    {

        $this->availableOpenningHours->insert($this->getAvailableOpenningHoursArray($appointment_id));

        return redirect('/appointments')->with('msg', 'Registro inserido com sucesso');

    }

    public function appointmentUpdate($id)
    {
        if($this->auth->validation()){

            $appointment = $this->appointments
            ->where('id', $id)
            ->update($this->getAppointmentArray($_SESSION['id']));

            return $this->serviceAppointmentsUpdate($id);

        }else{

            return $this->auth->redirectToLogin();

        }
    }

    public function serviceAppointmentsUpdate($appointment_id)
    {
        if(isset($_POST['service_id'])){

            $this->serviceAppointmentDelete($appointment_id);

            $this->serviceAppointments->insert($this->getServicesArray($appointment_id));

            return $this->availableOpenningHourUpdate($appointment_id);

        }else{

            return $this->availableOpenningHourUpdate($appointment_id);

        }

    }

    public function serviceAppointmentsUpdate_($appointment_id)
    {
        if(isset($_POST['service_id'])){

            $this->serviceAppointmentDelete($appointment_id);

            $this->serviceAppointments->insert($this->getServicesArray($appointment_id));

            return $this->availableOpenningHourUpdate($appointment_id);

        }else{

            return $this->availableOpenningHourUpdate($appointment_id);

        }

    }


    public function availableOpenningHourUpdate($appointment_id)
    {

        $this->availableOpenningHoursDelete($appointment_id);

        $this->availableOpenningHours->insert($this->getAvailableOpenningHoursArray($appointment_id));

        return redirect('/appointments')->with('msg', 'Registro alterado com sucesso!');
    }


    public function appointmentEdit($id)
    {
        if($this->auth->validation()){

            $appointments = $this->appointments->find($id);
            
            $services = $this->services
            ->where('services.user_id',$_SESSION['id'])
            ->get();

            $services_appointments = $this->serviceAppointments
            ->where('appointment_id',$id)
            ->where('user_id',$_SESSION['id'])
            ->get();

            $availableOpenningHours = $this->availableOpenningHours
            ->where('appointment_id',$id)
            ->get();

            foreach($services as $i => $s){

                foreach($services_appointments as $serv){
    
                    if($s->id == $serv->service_id){
                        $services[$i]['s_id'] = $serv->service_id;
                        $services[$i]['name'] = $serv->s_name;
                        $services[$i]['s_time'] = $serv->s_serviceTime;

                    }
                }

            }

            return view('appointmentConfig', compact('appointments', 'services', 'availableOpenningHours'));

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    
    public function appointmentDelete($appointment_id)
    {
        $this->serviceAppointmentDelete($appointment_id);
        $this->availableOpenningHoursDelete($appointment_id);
        $this->appointments
        ->where('id', $appointment_id)->delete();
        
    }

    public function serviceAppointmentDelete($appointment_id)
    {
        $this->serviceAppointments
        ->where('appointment_id', $appointment_id)->delete();
    }

    public function availableOpenningHoursDelete($appointment_id)
    {
        $this->availableOpenningHours
        ->where('appointment_id', $appointment_id)->delete();
    }

    public function appointmentConfigPage()
    {
        if($this->auth->validation()){

            return view('appointmentConfigPage');
            
        }else{

            return $this->auth->redirectToLogin();

        }

    }

    public function appointmentList()
    {
        if($this->auth->validation()){

            return view('appointmentList');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentLink()
    {
        if($this->auth->validation()){

            return view('appointmentLink');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentCalendar()
    {
        if($this->auth->validation()){

            return view('appointmentCalendar');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentAdd()
    {
        if($this->auth->validation()){

            return view('appointmentAdd');

        }else{

                return $this->auth->redirectToLogin();

        }

    }
    
    public function appointmentConfirm()
    {
        if($this->auth->validation()){

            return view('appointmentConfirm');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentHolidayConfig()
    {
        if($this->auth->validation()){

            return view('appointmentConfigHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }
    
    public function appointmentHolidayAdd()
    {
        if($this->auth->validation()){

            return view('appointmentAddHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

    public function appointmentHolidayEdit()
    {
        if($this->auth->validation()){

            return view('appointmentAddHoliday');

        }else{

                return $this->auth->redirectToLogin();

        }

    }

}