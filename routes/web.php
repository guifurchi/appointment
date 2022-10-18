<?php

use App\Http\Controllers\importController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consultaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\authController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\apiController;

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
Route::get('/appointments', [consultaController::class, 'appointments']);
Route::get('/appointments/config', [consultaController::class, 'appointmentConfig']);
Route::get('/appointments/list', [consultaController::class, 'appointmentList']);
Route::get('/appointments/link', [consultaController::class, 'appointmentLink']);
Route::get('/appointments/calendar', [consultaController::class, 'appointmentCalendar']);
Route::get('/appointments/add_appointment', [consultaController::class, 'appointmentAdd']);
Route::get('/appointments/confirm', [consultaController::class, 'appointmentConfirm']);
Route::get('/appointments/config_holiday', [consultaController::class, 'appointmentConfigHoliday']);
Route::get('/appointments/add_holiday', [consultaController::class, 'appointmentAddHoliday']);

Route::get('/services/add', [consultaController::class, 'serviceAdd']);
Route::get('/services', [consultaController::class, 'services']);
Route::get('/panel', [consultaController::class, 'panel']);
