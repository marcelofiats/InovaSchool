@extends('layouts.admin.app')

@section('content')

<div class="d-flex justify-content-center">
    <h2>Alterar Responsavel</h2>
</div>
<div class="area">
    <form class="form-group myform" action="{{ route('responsavel.update', $responsavel) }}" method="POST">
        @method("PUT")
        @include('responsavel.partial._form')
    </form>
</div>




@endsection
