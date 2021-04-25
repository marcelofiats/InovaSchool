@extends('layouts.admin.app')

@section('content')
    <div class="card-header py-4">
        <div class="d-flex justify-content-center">
            <h2>Alterar Responsavel</h2>
        </div>
    </div>
    <div class="card-body px-5">
        <div class="area">
            <form class="form-group myform" action="{{ route('responsavel.update', $responsavel->id) }}" method="POST">
                @method("PUT")
                @include('responsavel.partial._form')
            </form>
        </div>
    </div>
@endsection
