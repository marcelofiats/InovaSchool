@extends('layouts.admin.app')

@section('content')

<div class="row justify-content-md-center">
    <div class="col-10">
        <div class="card mx-4">
            <div class="card-header py-4">
                <div class="d-flex justify-content-center">
                    <h2>Cadastro de Professor</h2>
                </div>
            </div>
            <div class="card-body px-5">
                <div class="area">
                    @if (session('error'))
                        <div class="text-center text-danger mt-2">{{ session('error') }}</div>
                    @endif
                    <form class="form-group" action="{{ route('professor.store') }}" method="POST">

                    @include('professor.partial._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
