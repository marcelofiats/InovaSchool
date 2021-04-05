<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function home(){
        return view('professor.home');
    }

    public function index()
    {
        $professores = Professor::all();
        return view("index", compact("professores"));
    }
}
