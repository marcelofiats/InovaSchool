@extends('layouts.admin.app')

 @section('content')

        <h3>Seja bem vindo Administrador {{Auth::user()->name}}!!!</h3>

        @include('layouts.admin.card')

 @endsection
