<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// WELCOME AND HOME
Route::get('/', [PageController::class, 'Welcome']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// EDIT PROFILE
Route::get('/editProfile/{id}', [PageController::class, 'EditProfileForm']);
Route::post('/edit/{id}', [PageController::class, 'EditProfile']);

// AGENDA
Route::get('/agenda/{id}', [PageController::class, 'Agenda'])->name('agenda_view');
Route::post('/agenda/{id}', [PageController::class, 'AddAgenda']);
Route::get('/editAgendaForm/{id}', [PageController::class, 'EditAgendaForm']);
Route::post('/editAgenda/{id}', [PageController::class, 'EditAgenda']);
Route::delete('/delete/{id}', [PageController::class, 'CompleteAgenda']);

Route::get('/file', [FileController::class, 'index']);
Route::get('/view/{id}', [FileController::class, 'viewer']);
Route::get('/share/{id}', [FileController::class, 'share']);
Route::delete('/destroy/{id}', [FileController::class, 'delete']);
Route::post('/upload',[FileController::class,'upload']);
Route::post('/update/{id}',[FileController::class,'update']);




Auth::routes();

