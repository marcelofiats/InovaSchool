<?php

use App\Models\User;
use App\Mail\SendMailUser;
use GuzzleHttp\Middleware;
use App\Models\Responsavel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\DiretoriaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\SecretariaController;
use App\Jobs\sendMailUser as JobsSendMailUser;
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

Route::middleware('auth')->group(function () {

    Route::get('diretoria/home', [DiretoriaController::class,'home'])->middleware('role:diretor')->name('diretoria.home');
    Route::get('professor/home', [ProfessorController::class, 'home'])->middleware('role:professor')->name('professor.home');
    Route::get('secretaria/home', [SecretariaController::class, 'home'])->middleware('role:secretaria')->name('secretaria.home');
    Route::get('responsavel/home', [ResponsavelController::class, 'home'])->middleware('role:responsavel')->name('responsavel.home');
    Route::get('admin/home', [AdminController::class, 'home'])->middleware(['auth' ,'role:admin'])->name('admin.home');

    Route::resource('admin', AdminController::class)->middleware(['auth','role:admin']);
    Route::resource('diretoria', DiretoriaController::class)->middleware(['auth', 'role:admin|diretor']);
    Route::resource('secretaria', SecretariaController::class)->middleware(['auth', 'role:admin|diretor']);
    Route::resource('professor', ProfessorController::class)->middleware(['auth', 'role:admin|diretor|secretaria']);
    Route::resource('responsavel', ResponsavelController::class)->middleware(['auth', 'role:admin|diretor|secretaria']);
    Route::resource('aluno', AlunoController::class)->middleware(['auth', 'role:admin|diretor|secretaria']);

    Route::resource('turma', TurmaController::class);

    Route::resource('calendario', CalendarioController::class);
});


