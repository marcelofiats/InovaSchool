    <div class="row m-t-25">
        <div class="col-sm-8">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ 350.456 }}</h2>
                            <span>Acessos</span>
                        </div>
                        <div class="overview-chart">
                            <canvas></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-4">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>{{ count(App\Models\Aluno::all()) }}</h2>
                            <span>Alunos</span>
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
                            <h2>{{ count(App\Models\User::all()) }}</h2>
                            <span>Responsaveis</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="row m-t-25">
                <div class="col-sm-4">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ count(App\Models\Professor::all()) }}</h2>
                                    <span>Professores</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ count(App\Models\Secretaria::all()) }}</h2>
                                    <span>Secretarias</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>{{ count(App\Models\Diretoria::all()) }}</h2>
                                    <span>Diretores</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
