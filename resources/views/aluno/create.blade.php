@extends('layouts.admin.app')

@section('content')
<style>
    #hidden{
        display: none;
    }
</style>
<div class="row justify-content-md-center">
    <div class="col-md-10 col-sm-12">
        <div class="card mx-4">
            <div class="card-header py-4">
                <div class="d-flex justify-content-center">
                    <h2>Cadastro de Aluno</h2>
                </div>
            </div>
            <div class="card-body px-5">
                <div class="area">
                    <form class="form-group myform" action="#">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <label for="nome"><span class="text-danger">*</span> Nome:</label>
                                <input class="form-control" type="text" name="nome" id="nome">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-4 col-sm-12">
                                <div class="min">
                                    <label for="dataNascimento"><span class="text-danger">*</span>Data de Nascimento:</label>
                                    <input class="form-control" type="date" name="dataNascimento" id="dataNascimento">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 col-sm-12">
                                <label for="rg">RG:</label>
                                <input class="form-control" type="text" name="rg" id="rg">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 col-sm-12">
                                <label for="rg">Ano letivo:</label>
                                <input class="form-control" type="text" name="ano_letivo" id="ano_letivo">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 col-sm-12">
                                <label for="rg">Turma</label>
                                <input class="form-control" type="text" name="turma" id="turma">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 col-sm-12">
                                <label>Responsavel já Cadastrado? </label>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <input type="radio" name="resonsavel" onclick="visible()" id="responsavel" checked> Não
                                <input class="checked ml-4" type="radio" onclick="visible()" name="resonsavel" id="responsavel1"> Sim
                                <div id="hidden" class="mt-2">
                                    <label for="cpfResponsavel">CPF Responsavel</label>
                                    <input class="form-control" type="text"  name="cpfResponsavel" id="cpfResponsavel">
                                    <a href="" class="btn btn-info mt-2">Buscar</a>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 col-sm-12">
                                Caso o aluno tenha sido transferido, por favor anexar documento de transferencia abaixo.
                                <br>
                                <input type="file" name="trasferencia" id="tranferencia">
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-8 cla-sm-12">
                                <a href="#" class="btn btn-primary"><i class="fa fa-arrow-left mr-2"></i> Voltar</a>
                                <button class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function visible(){
        if($("#responsavel1").prop('checked'))
        {
            document.getElementById("hidden").style.display = "block";
        }
        else
        {
            document.getElementById("hidden").style.display = "none";
        }
    }

</script>

@endsection
