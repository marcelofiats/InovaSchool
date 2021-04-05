<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DiretoriaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\ResponsavelController;

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

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

Route::get('escola', function () {
    return view('web.escola');
})->name('web.escola');

Route::get('contatos', function () {
    return view('web.contatos');
})->name('web.contatos');

Auth::routes(['except' =>  'register']);

Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('diretoria/home', [DiretoriaController::class,'home'])->name('diretoria.home');
Route::get('professor/home', [ProfessorController::class, 'home'])->name('professor.home');
Route::get('secretaria/home', [SecretariaController::class, 'home'])->name('secretaria.home');
Route::get('responsavel/home', [ResponsavelController::class, 'home'])->name('responsavel.home');

//Route::get('responsavel/home', 'ResponsavelController@index')->name('responsavel.index');

Route::resource('aluno', AlunoController::class);

Route::resource('responsavel', ResponsavelController::class);
Route::resource('professor', ProfessorController::class);
Route::resource('diretoria', DiretoriaController::class);
Route::resource('secretaria', SecretariaController::class);

