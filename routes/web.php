<?php

use App\Http\Controllers\importController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultaController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\authController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\communicationController;
use App\Http\Controllers\integrationController;
use App\Http\Controllers\accountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [indexController::class, 'index']);

//appointments
Route::get('/panel', [appointmentController::class, 'panel']);
Route::get('/panel/config', [appointmentController::class, 'panelConfig']);
Route::get('/appointments', [appointmentController::class, 'appointments']);
Route::get('/appointments/config', [appointmentController::class, 'appointmentConfig']);
Route::get('/appointments/config/page', [appointmentController::class, 'appointmentConfigPage']);
Route::get('/appointments/list', [appointmentController::class, 'appointmentList']);
Route::get('/appointments/link', [appointmentController::class, 'appointmentLink']);
Route::get('/appointments/calendar', [appointmentController::class, 'appointmentCalendar']);
Route::get('/appointments/appointment/add', [appointmentController::class, 'appointmentAdd']);
Route::get('/appointments/confirm', [appointmentController::class, 'appointmentConfirm']);
Route::get('/appointments/holiday/config', [appointmentController::class, 'appointmentHolidayConfig']);
Route::get('/appointments/holiday/add', [appointmentController::class, 'appointmentHolidayAdd']);
Route::get('/appointments/holiday/edit/{id}', [appointmentController::class, 'appointmentHolidayEdit']);

//services
Route::get('/services', [serviceController::class, 'index']);
Route::get('/services/add', [serviceController::class, 'serviceAdd']);
Route::get('/services/edit/{id}', [serviceController::class, 'serviceEdit']);
Route::get('/services/delete/{id}', [serviceController::class, 'serviceDestroy']);

//clients
Route::get('/clients', [clientController::class, 'index']);
Route::get('/clients/add', [clientController::class, 'clientAdd']);
Route::get('/clients/list', [clientController::class, 'clientList']);

//communications
Route::get('/communications', [communicationController::class, 'index']);
Route::get('/communications/notify', [communicationController::class, 'communicationNotify']);
Route::get('/communications/notify/add', [communicationController::class, 'communicationNotifyAdd']);
Route::get('/communications/email', [communicationController::class, 'communicationEmail']);
Route::get('/communications/email/add', [communicationController::class, 'communicationEmailAdd']);
Route::get('/communications/email/edit', [communicationController::class, 'communicationEmailEdit']);

//integration
Route::get('/integrations', [integrationController::class, 'index']);
Route::get('/integrations/site', [integrationController ::class, 'integrationSite']);

//account
Route::get('/account', [accountController::class, 'index']);
Route::get('/account/add', [accountController ::class, 'accountAdd']);
Route::get('/account/edit', [accountController ::class, 'accountEdit']);
Route::post('/account/edit/{id}', [accountController ::class, 'accountUpdate']);
Route::get('/account/config', [accountController ::class, 'accountConfig']);

//CRUD user
Route::get('/access', [UserController::class, 'index']);
Route::get('/access/create', [UserController::class, 'newUserPage']);
Route::post('/access/create', [UserController::class, 'create']);
Route::post('/access/{id}/edit', [UserController::class, 'update']);
Route::post('/access/{id}/delete', [UserController::class, 'destroy']);

Route::get('/confirm/{action}', [indexController::class, 'confirmAction']);

//Queries user
Route::get('/usuarios', [UserController::class, 'usersQuery']);
Route::get('/showUser/{id}', [UserController::class, 'showUser']);
Route::get('/cadastrar/{id}/edit', [UserController::class, 'edit']);

//change password
Route::get('/password', [UserController::class, 'editPassword']);
Route::post('/password/{id}/edit', [UserController::class, 'validPassword']);

//login and logout
Route::post('/login', [authController::class, 'auth']);//mudar para auth
Route::get('/logout', [authController::class, 'logout']);


//privacity , eula
Route::get('/eula', [UserController::class, 'eula']);
Route::get('/privacity', [UserController::class, 'privacity']);

