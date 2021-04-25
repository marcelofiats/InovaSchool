<?php

namespace App\Http\Controllers\API;

use App\Models\Responsavel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResponsavelController extends Controller
{
    public function index($nome = '', $order_by='nome', $desc = 'DESC')
    {
        $responsaveis = DB::table('pessoas')
                            ->join('users', 'pessoas.id', '=', 'users.pessoa_id')
                            ->join('responsaveis', 'users.id', '=', 'responsaveis.user_id')
                            ->where('nome', 'like', $nome.'%');

        $responsaveis->when($order_by, function($q) use($order_by, $desc) {
            return $q->orderBy($order_by, $desc);
        });
        return $responsaveis->get()->toJson();
    }
}
