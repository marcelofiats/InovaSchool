<?php

namespace App\Http\Controllers;

use App\Models\Diretoria;
use Illuminate\Http\Request;

class DiretoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('diretoria.home');
    }

    public function index()
    {
        $diretores = Diretoria::all();
        return view ("index", compact("diretores"));
    }
}
