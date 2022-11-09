<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Http\Controllers\authController;
use App\Http\Requests\ServiceRequest;


class serviceController extends Controller
{
    private $consulta;
    private $valid;
    private $validN;

    public function __construct()
    {
        $this->service = new Service();
        $this->auth = new authController();
        $this->users = new User();
    }

    public function index($updated = null)
    {
        if($this->auth->validation()){

            $services = $this->service->where('user_id',$_SESSION['id'])->get();
            $msg = null;

            if($updated){
                $msg = 'Dados Atualizados com sucesso';
            }

            return view('services', compact('services'),
            [
                'msg' => $msg
            ]);


        }else{

            return $this->auth->redirectToLogin();

        }

    }

    public function serviceAdd(ServiceRequest $request = null)
    {
        if($this->auth->validation()){

            return view('serviceAdd');

        }else{

            return $this->auth->redirectToLogin();

        }

    }

    public function create(ServiceRequest $request, $id)
    {
        if($this->auth->validation()){

            $services = $this->service;
            $user = $this->users->find($id);

            $services->user_id = $user->id;
            $services->s_name = $request->input('s_name');
            $services->s_value = $request->input('s_value');
            $services->s_showValuesToCustomers = $request->input('s_showValuesToCustomers');
            $services->s_paymentLink = $request->input('s_paymentLink');
            $services->s_serviceTime = $request->input('s_serviceTime');
            $services->s_instruction = $request->input('s_instruction');

            $services = $services->save();

            return redirect('/services');
            
        }else{

            return $this->valid->redirectToLogin();

        }



    }

    public function edit($id)
    {
        
        if($this->auth->validation()){

            $servicess = $this->service->find($id);

            return view('serviceAdd', compact('services'));
          
        }else{
            return $this->valid->redirectToLogin();
        }
    }


    public function update(ServiceRequest $request, $id)
    {

            $update = $this->service->where(['id' => $id])->update([
                's_name' => $request->s_name,
                's_value' => $request->s_value,
                's_showValuesToCustomers' => $request->s_showValuesToCustomers,
                's_paymentLink' => $request->s_paymentLink,
                's_serviceTime' => $request->s_serviceTime,
                's_instruction' => $request->s_instruction
            ]);

            if($update){
                return $this->index(true);
            }

    }

    public function delete($id)
    {  
        
        if($this->auth->validation()){

            $this->service->destroy($id);

        }else{
            return $this->auth->redirectToLogin();
        }
        
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