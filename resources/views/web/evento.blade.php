@extends('layouts.web.app')

@section('title')
    Eventos
@endsection

@section('content')

<div class="imageEvento">
    <img src="{{$evento->image}}" width="100%" height="300px">
</div>

<div class="text-center"></div>

@endsection
