@extends('layouts.admin.app')

@section('content')
<style>
    .area{
        width: 40%;
        min-width: 340px;
        margin-top: 20px;
    }
    .myform{
        width: 100%;
    }
    .min{
        width: 25%;
        min-width: 190px;
    }
</style>
<div class="d-flex justify-content-center">
    <h2>Alterar Professor</h2>
</div>
<div class="area">
    <form class="form-group myform" action="#">
        <div class="row">
            <div class="col-12">
                <label for="nome"><span class="text-danger">*</span> Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-8">
                <div class="min">
                    <label for="dataNascimento"><span class="text-danger">*</span>Data de Nascimento:</label>
                    <input class="form-control" type="date" name="dataNascimento" id="dataNascimento">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                <label for="rg">RG:</label>
                <input class="form-control" type="text" name="rg" id="rg">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                <label for="rg">Ano letivo:</label>
                <input class="form-control" type="text" name="rg" id="rg">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                <label for="rg">Turma</label>
                <input class="form-control" type="text" name="rg" id="rg">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                <label for="rg">CPF Responsavel</label>
                <input class="form-control" type="text" name="rg" id="rg">
                <a href="" class="btn btn-info mt-2">Buscar</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-8">
                Caso o aluno tenha sido transferido, por favor anexar documento de transferencia abaixo.
                <br>
                <input type="file" name="trasferencia" id="tranferencia">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-8">
                <a href="#" class="btn btn-primary"><i class="fa fa-arrow-left mr-2"></i> Voltar</a>
                <button class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
            </div>
        </div>
    </form>
</div>




@endsection
