@extends('layouts.admin.app')

@section('content')
    <div class="card-header py-4">
        <div class="d-flex justify-content-center">
            <h2>Cadastro de Diretores</h2>
        </div>
    </div>
    <div class="card-body px-5">
        <div class="area">
            @if (session('error'))
                <div class="text-center text-danger mt-2">{{ session('error') }}</div>
            @endif
            <form class="form-group" action="{{ route('diretoria.store') }}" method="POST">

            @include('diretoria.partial._form')
            </form>
        </div>
    </div>
@endsection
