<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('secretaria.home');
    }

    public function index(){
        $secretarias = Secretaria::all();
        return view("index", compact("secretarias"));
    }
}
