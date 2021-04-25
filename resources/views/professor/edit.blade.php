@extends('layouts.admin.app')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-10">
        <div class="card mx-4">
            <div class="card-header py-4">
                <div class="d-flex justify-content-center">
                    <h2>Alterar Professor</h2>
                </div>
            </div>
            <div class="card-body px-5">
                <div class="area">
                    <form class="form-group myform" action="{{ route('professor.update', $professor->id) }}" method="POST">
                        @method("PUT")
                        @include('professor.partial._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
