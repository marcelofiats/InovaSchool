@extends('layouts.admin.app')

 @section('content')

    <div class="card-header py-4">
        <div class="d-flex justify-content-center">
            <h2>Secretárias</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="row p-3">
            <div class="col-md-10 d-flex">
                <input class="form-control" type="text" name="consulta" id="consulta" value="" style="border: 1px solid black; width: 50%; min-width: 360px;"/>
                <button class="btn btn-info mx-2" style="width: 10%;"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <a class="btn btn-success" href="{{ route('secretaria.create') }}"><i class="fa fa-plus"></i> Novo</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table" id="tabelaSecretaria">
                    <thead class="thear-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
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
            var busca = $('#consulta').val();
            $.getJSON('/api/secretarias/'+ busca, function(data){
                $('#tabelaSecretaria>tbody').empty();
                for(i=0;i<data.length;i++){
                   linha = montarLinha(data[i]);
                   $('#tabelaSecretaria>tbody').append(linha);
                }
           });
        });

        function montarLinha(secretaria){
            var linha = '<tr>'
                +'<td>' + secretaria.nome + '</td>'
                +'<td>' + secretaria.telefone1 + '@if('+ secretaria.telefone2 == null + ')  @else", " + secretaria.telefone2 @endif' + '</td>'
                +'<td class="text-center"><a href="/secretaria/'+secretaria.id+'/edit"><i class="fa fa-list text-center"></i></a></td>'
                +'</tr>';
            return linha;
        };

        $(function(){
            $('#consulta').keyup();
        });
    </script>

 @endsection
