@extends('layouts.admin.app')

 @section('content')

    <div class="card-header py-4">
        <div class="d-flex justify-content-center">
            <h2>Turmas</h2>
        </div>
    </div>
    <div class="card-bady">
        <div class="row p-3">
            <div class="col-md-10 d-flex">
                <input class="form-control" type="text" name="consulta" id="consulta" value="" style="border: 1px solid black; width: 50%; min-width: 360px;"/>
                <button class="btn btn-info mx-2" style="width: 10%;"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <a class="btn btn-success" href="{{ route('turma.create') }}"><i class="fa fa-plus"></i> Novo</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="error" class="text-danger"></div>
                <table class="table" id="tabelaTurma">
                    <thead class="thear-dark">
                        <tr>
                            <th>Ano letivo</th>
                            <th>Nome</th>
                            <th>Qtd Alunos</th>
                            <th style="width: 100px" class="text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $('#consulta').keyup(function(){
           buscar();
        });

        function buscar(){
            var busca = $('#consulta').val();
            xhr = new XMLHttpRequest();
            var token = "{{ session('token') }}";
            console.log("ok");
            $.ajax({
                url: '/api/turmas/'+ busca,
                dataType: 'json',
                contentType: 'application/json',
                beforeSend: setHeader,
                success: function(turmas){
                    $('#tabelaTurma>tbody').empty();
                    if (turmas.length < 1) {
                        $('#error').html('Nenhuma turma encontrada');
                    } else {
                        $('#error').html('');
                        for (i = 0; i<turmas.length; i++) {
                            linha = montarLinha(turmas[i]);
                            $('#tabelaTurma>tbody').append(linha);
                        }
                    }
                }
            });
            function setHeader(xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer '+token);
            }

        }

        function montarLinha(turma){
            var linha = '<tr>'
                +'<td>' + turma.ano_letivo + '</td>'
                +'<td>' + turma.nome + '</td>'
                +'<td>' + turma.qtyAluno + '</td>'
                +'<td class="text-center"><a href="/turma/'+turma.id+'/edit"><i class="fa fa-list text-center"></i></a></td>'
                +'</tr>';
            return linha;
        };

        $(function(){
            buscar();
        });
    </script>

 @endsection


