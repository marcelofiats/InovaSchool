<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SecretariaController extends Controller
{
    public function index($nome = '', $order_by='nome', $desc = 'DESC')
    {
        $secretarias = DB::table('pessoas')
        ->join('users', 'pessoas.id', '=', 'users.pessoa_id')
        ->join('secretarias', 'users.id', '=', 'secretarias.user_id')
        ->where('nome', 'like', $nome.'%');

        $secretarias->when($order_by, function($q) use($order_by, $desc) {
            return $q->orderBy($order_by, $desc);
        });

        return $secretarias->get()->toJson();
    }
}
