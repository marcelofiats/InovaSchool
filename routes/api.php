<?php

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AlunoController;
use App\Http\Controllers\API\DiretorController;
use App\Http\Controllers\api\EventoController;
use App\Http\Controllers\API\ProfessorController;
use App\Http\Controllers\API\SecretariaController;
use App\Http\Controllers\API\ResponsavelController;
use App\Http\Controllers\API\TurmaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/eventos', [EventoController::class, 'loadEvent'])->name('loadEvents');

Route::middleware(['auth:api', 'role:admin|diretor|secretaria'])->get('/createEvent', [EventoController::class, 'createEvent'])->name('createEvent');

Route::middleware(['auth:api', 'role:admin|diretor|secretaria'])->get('/updateEvent', [EventoController::class, 'updateEvent'])->name('updateEvent');

Route::middleware('auth:api')->get('/responsaveis/{nome?}', [ResponsavelController::class, 'index']);

Route::middleware('auth:api')->get('/professores/{nome?}', [ProfessorController::class, 'index']);

Route::middleware('auth:api')->get('/secretarias/{nome?}', [SecretariaController::class, 'index']);

Route::middleware('auth:api')->get('/diretores/{nome?}/{order_by?}/{desc?}', [DiretorController::class, 'index']);

Route::middleware('auth:api')->get('/alunos/{nome?}/{order_by?}/{desc?}', [AlunoController::class, 'index']);

Route::middleware('auth:api')->get('/alunosTurma/{id}/{nome?}', [AlunoController::class, 'alunosTurma']);

Route::middleware('auth:api')->get('/professoresTurma/{id}/{nome?}', [ProfessorController::class, 'professoresTurma']);

Route::middleware('auth:api')->get('/turmas/{nome?}', [TurmaController::class, 'buscarTurma']);


Route::post('/login', function(Request $request){
    $credential = request(['email', 'password']);
    if (! Auth::attempt($credential)){
        $erro = "não autorizado";
        $response = [
            'error' => $erro,
        ];
        return response()->json($response, 404);
    }

    $usuario = $request->user();
    $response['name'] = $usuario->name;
    $response['email'] = $usuario->email;
    $response['token'] = $usuario->createToken('token')->accessToken;

    return $response;
});
