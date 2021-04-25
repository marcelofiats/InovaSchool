@extends('layouts.admin.app')

@section('content')

    <div class="car-header py-3">
        <div class="d-flex justify-content-center">
            <h2>Cadastrar Nova Turma</h2>
        </div>
    </div>

    <div class="card-body">
        <form class="form-group" action="{{ route('turma.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4 col-sm-12">
                    <label for="nome"><span class="text-danger">*</span> Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" value="{{$turma->nome ?? old ('nome')}}">
                </div>
                <div class="col-12 text-danger" id="errornome"></div>
                @error('nome')
                    <div class="col-12">
                        <p class="text-danger">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-8">
                    <div class="min">
                        <label for="ano_letivo"><span class="text-danger">*</span>Ano Letivo:</label>
                        <input class="form-control" type="text" name="ano_letivo" id="ano_letivo" value="{{$turma->ano_letivo ?? old ('ano_letivo')}}">
                    </div>
                    <div class="col-12 text-danger" id="errorano_letivo" ></div>
                    @error('ano_letivo')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <a href="{{ route('turma.index') }}" class="btn btn-primary">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </a>
                    <button class="btn btn-success ml-1"><i class="fa fa-check"></i> Salvar</button>
                </div>
            </div>
        </form>
    </div>

@endsection
