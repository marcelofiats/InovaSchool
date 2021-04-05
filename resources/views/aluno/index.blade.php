@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justyfi-content-center">
                <h2>Alunos</h2>
            </div>
        </div>
        <div class="card-body">
           <table class="table table-light">
               <thead class="thead-light">
                   <tr>
                       <th>id</th>
                       <th>Nome</th>
                       <th>Idade</th>
                       <th>RG</th>
                       <th>Detalhes</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->name }}</td>
                        <td>{{ $aluno->data_nascimento - Carbon/Carbon::now() }}</td>
                        <td>{{ $aluno->rg }}</td>
                        <td><a href="#"><i class="fa fa-list"></i> </a></td>
                    </tr>
                   @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection
