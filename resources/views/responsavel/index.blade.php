@extends('layouts.admin.app')

 @section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h2>Responsavel</h2>
            </div>
        </div>
        <div class="card-bady">
            <div class="text-right m-3">
                <a class="btn btn-success" href="{{ route('responsavel.create') }}"><i class="fa fa-plus"></i> Novo</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead class="thear-dark">
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th style="width: 100px" class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($responsaveis))
                                @foreach ($responsaveis as $responsavel)
                                <tr>
                                    <td>{{ $responsavel->user->pessoa->nome }}</td>
                                    <td>{{ $responsavel->user->pessoa->telefone1 }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('responsavel.edit', $responsavel->id) }}">
                                            <i class="fa fa-pencil-alt" title="editar"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
 @endsection
