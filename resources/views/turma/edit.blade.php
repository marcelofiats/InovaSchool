@extends('layouts.admin.app')

@section('content')

    <div class="card-header text-center">
        <h2> Turma </h2>
        <h3> {{ $turma->ano_letivo }} {{ $turma->nome }} - {{ \Carbon\Carbon::now()->format('Y') }}</h3>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-between p-2">
            <div class="col-md-4">
                <a href="#" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Adicionar</a>
                <div class="d-flex mb-2">
                    <input type="text" class="form-control" id="consultaAluno">
                    <a href="" class="btn btn-info"><i class="fa fa-search"></i></a>
                </div>
                <table class="table" id="tabelaAluno">
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            <th style="width: 20px;">Retirar</th>
                        </tr>
                    </thead>
                    <div class="text-danger text-center" id="errorAluno"></div>
                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-6">
                <a href="#" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Adicionar</a>
                <div class="d-flex mb-2">
                    <input type="text" class="form-control" id="consultaProfessor">
                    <a href="" class="btn btn-info"><i class="fa fa-search"></i></a>
                </div>
                <table class="table" id="tabelaProfessor">
                    <thead>
                        <tr>
                            <th>Professor</th>
                            <th>Disciplina</th>
                            <th>Retirar</th>
                        </tr>
                    </thead>
                    <div class="text-danger text-center" id="errorProfessor"></div>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
@section('script')

    var token = "{{ session('token') }}";
    var xhr = new XMLHttpRequest();

    $(function(){
        buscarAlunos();
        buscarProfessores();
    });

    $('#consultaAluno').keyup(function(){
        buscarAlunos();
    })

    function buscarAlunos(){

        var busca = $('#consultaAluno').val();
        var tabela = $('#tabelaAluno>tbody');

        $.ajax({
            url: '/api/alunosTurma/{{ $turma->id }}/'+ busca,
            dataType: 'json',
            contentType: 'application/json',
            beforeSend: setHeader,
            success: function(alunos){
                tabela.empty();
                if ( alunos.length < 1) {
                    $('#errorAluno').html('não há alunos cadastrados nessa turma');
                } else {
                    $('#errorAluno').html('');
                    for(i = 0; i < alunos.length; i++){
                        linha = montarLinhaAluno(alunos[i]);
                        tabela.append(linha);
                    }
                }
            }
        });
    }

    function setHeader(xhr) {
        xhr.setRequestHeader('Authorization', 'Bearer '+token);
    }

    function montarLinhaAluno(aluno){
        linha = '<tr>'
                    +'<td>'+ aluno.nome + '</td>'
                    +'<td class="text-center" style="background-color: red;">'
                    +'<a href="#" style="color: white;"><i class="fa fa-minus"></i></a>'
                    +'</td>'
                +'</tr>';
        return linha;
    }



    function buscarProfessores(){
        var busca = $('#consultaProfessor').val();
        var tabela = $('#tabelaProfessor>tbody');

        $.ajax({
            url: '/api/professoresTurma/{{ $turma->id }}/'+ busca,
            dataType: 'json',
            contentType: 'application/json',
            beforeSend: setHeader,
            success: function(professores){
                tabela.empty();
                if (professores.length < 1) {
                    $('#errorProfessor').html('Não há professores cadastrado nesta turma');
                } else {
                    $('#errorProfessor').html('');
                    for(i = 0; i < professores.length; i++){
                        linha = montarLinhaProfessor(professores[i]);
                        tabela.append(linha);
                    }
                }
            }
        });
    }
    function montarLinhaProfessor(professor){
        linha = '<tr><td>'+ professor.nome + '</td>';
        linha +='<td>'
            for (i = 0; i < professor.disciplinas.length; i++){
                linha += professor.disciplinas[i]['nome'];
                if(professor.disciplinas[i + 1] != null){
                    linha += ' / ';
                }
            }
        linha +='</td>';
        linha +='<td class="text-center" style="background-color: red;">'
                +'<a href="#" style="color: white;"><i class="fa fa-minus"></i></a>'
                +'</td>'
            +'</tr>';

        return linha;
    }
@endsection
