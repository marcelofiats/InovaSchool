@extends('layouts.admin.app')

@section('content')

    <div class="card-header py-4">
        <div class="d-flex justify-content-center">
            <h2>Alunos</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="row py-3">
            <div class="col-md-10 d-flex">
                    <input type="text" name="consulta" id="consulta" class="form-control" style="width: 50%">
                    <a href="" class="btn btn-info"><i class="fa fa-search"></i></a>
            </div>
            <div class="col-md-2 text-right">
                <a href="" class="btn btn-success"><i class="fa fa-plus mr-1"></i>Novo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table" id="tabelaAlunos">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th><a href="#" onclick="busca('nome')">Nome</a></th>
                            <th><a href="#" onclick="busca('data_nascimento')">Idade</a></th>
                            <th>RG</th>
                            <th style="width: 100px;">Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <div id="error" class="text-danger"></div>
                </table>
                <input type="hidden" id="order_by" value="1">
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $('#consulta').keyup(function() {
            busca();
        });

         function busca(order_by) {
            var index = $('#order_by').val();
            var order_by_desc;
            var final;
            var desc = 'DESC'

            if (order_by == undefined) {
                order_by = 'nome';
            }

            if(index == 2){
                desc = 'ASC';
            }
            else {
                desc = 'DESC';
            }
            var url = '/api/alunos';

            var busca = $('#consulta').val();
            if (busca != '') {
                url += '/' + busca;
            } else {
                url += '/todos';
            }

            if (order_by != '') {
                url += '/' + order_by;
            } else {
                url += '/nome';
            }

            url += '/' + desc;

            xhr = new XMLHttpRequest();
            var token = "{{ session('token') }}";

            $.ajax({
                url: url,
                dataType: 'json',
                contentType: "application/json",
                beforeSend: setHeader,
                success: function(alunos){
                    $('#tabelaAlunos>tbody').empty();
                    if (alunos.length < 1) {
                        $('#error').html("Nenhum aluno Encontrado");
                    } else {
                        $('#error').html("");
                        for (i = 0; i<alunos.length; i++) {
                            linha = montarLinha(alunos[i]);
                            $('#tabelaAlunos>tbody').append(linha);
                        }
                    }
                }
            });

            function setHeader(xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer '+token);
            }

             if (index == '2') {
                index = $('#order_by').val('1');
             } else {
                 index = $('#order_by').val('2');
             }

         }

         function montarLinha(aluno){
             var nascimento = new Date(aluno.data_nascimento);
             var hoje = new Date(Date.now());
             hoje = hoje.getFullYear();
             nascimento = nascimento.getFullYear();
             idade = hoje - nascimento;
             var linha = '<tr>'
                 +'<td>'+ aluno.id + '</td>'
                 +'<td>'+ aluno.nome +'</td>'
                 +'<td>'+ idade +'</td>'
                 +'<td>'+ aluno.rg +'</td>'
                 +'<td class="text-center"><a href="#"><i class="fa fa-list"></i> </a></td>'
                 +'</tr>';
            return linha;
         };

         $(function() {
            busca();

         });

    </script>
@endsection
