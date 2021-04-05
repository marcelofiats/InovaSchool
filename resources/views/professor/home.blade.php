@extends('layouts.admin.app')

@section('content')
    <h3>Olá Professor!!!</h3>
    <div class="row m-t-25">
        <div class="col-sm-4">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>2</h2>
                            <span>Minhas Salas</span>
                        </div>
                        <div class="overview-chart">
                            <canvas></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>75</h2>
                            <span>Meus Alunos</span>
                        </div>
                        <div class="overview-chart">
                            <canvas></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
