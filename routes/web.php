<?php

use App\Http\Controllers\importController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\authController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\serviceController;

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
Route::get('/mainPage', [indexController::class, 'mainPage']);
Route::get('/QRcode', [apiController::class, 'index']);

//rotas de autenticação e login
Route::post('/login', [authController::class, 'auth']);//mudar para auth
Route::get('/logout', [authController::class, 'logout']);

//rotas do CRUD de consulta
Route::get('/consulta', [consultaController::class, 'index']);
Route::post('/consulta/create', [consultaController::class, 'create']);
Route::put('/consulta/{id}/edit', [consultaController::class, 'update']);
Route::get('/consulta/{id}/delete', [consultaController::class, 'destroy']);

//rotas do CRUD de usuÃÂ¡rio
Route::get('/cadastrar', [UserController::class, 'index']);
Route::get('/cadastrar/create', [UserController::class, 'newUserPage']);
Route::post('/cadastrar/create', [UserController::class, 'create']);
Route::post('/cadastrar/{id}/edit', [UserController::class, 'update']);
Route::get('/cadastrar/{id}/delete', [UserController::class, 'destroy']);

//rotas para alterar a senha
Route::get('/password/{id}', [UserController::class, 'editPassword']);
Route::post('/password/{id}/edit', [UserController::class, 'validPassword']);

//rotas de consulta de 
Route::get('/consultaQuery', [consultaController::class, 'consultaQuery']);
Route::get('/showDetails/{id}', [consultaController::class, 'showDetails']);
Route::get('/consulta/{id}/edit/', [consultaController::class, 'edit']);

//rotas de consultas de user
Route::get('/usuarios', [UserController::class, 'usersQuery']);
Route::get('/showUser/{id}', [UserController::class, 'showUser']);
Route::get('/cadastrar/{id}/edit', [UserController::class, 'edit']);

//rotas para tratar dados
Route::get('/import', [importController::class, 'index']);

//appointments
Route::get('/panel', [appointmentController::class, 'panel']);
Route::get('/appointments', [appointmentController::class, 'appointments']);
Route::get('/appointments/config', [appointmentController::class, 'appointmentConfig']);
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
