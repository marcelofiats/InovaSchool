@extends('layouts.admin.app')

@section('content')
    <div class="card-header">
        <h3>Seja bem vindo {{ Auth::user()->pessoa->nome }}</h3>
    </div>
    <div class="card-body">

    </div>

@endsection
