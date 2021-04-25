<?php

namespace App\Http\Controllers\API;

use App\Models\Diretoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DiretorController extends Controller
{
    public function index($nome = '', $order_by='nome', $desc = 'DESC')
    {
        $diretores = DB::table('pessoas')
                        ->join('users', 'pessoas.id', '=', 'users.pessoa_id')
                        ->join('diretores', 'users.id', '=', 'diretores.user_id')
                        ->where('nome', 'like', $nome.'%');

        $diretores->when($order_by, function($q) use($order_by, $desc) {
            return $q->orderBy($order_by, $desc);
        });

        return $diretores->get()->toJson();
    }
}
