
@if(count($responsavel->alunos) > 1)
    <select class="form-control" name="aluno" id="aluno" style="border: none;">
        @foreach ($responsavel->alunos as $aluno)
            <option>
                <a href="#">{{ $aluno->nome }}</a>
            </option>
        @endforeach
    </select>
@else
    @foreach ($responsavel->alunos as $aluno)
        <li>
            <a href="#"><i></i>{{ $aluno->nome }}</a>
        </li>
    @endforeach
@endif

<li class="has-sub mt-3">
    <a class="js-arrow" href="#">
        <i class="far fa-calendar-alt"></i>Aluno
    </a>
    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list" >
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Tarefas</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Notas</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Calendario de Frequência</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Pedido de Documentos</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Anotações</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Fazer Observações</a>
        </li>
    </ul>
</li>

<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="far fa-calendar-alt"></i>Financeiro
    </a>
    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list" >
        <li><span class="text-success"><h4>em dia</h4></span></li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>2º Via Boleto</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Boletos Anteriores</a>
        </li>
        <li>
            <a href="#"><i class="far fa-calendar-alt"></i>Consultar</a>
        </li>
    </ul>
</li>

<li>
    <a href="calendar.html">
        <i class="fa fa-book"></i>Calendario
    </a>
</li>
<li>
    <a href="map.html">
        <i class="fa fa-cog"></i>Configurações
    </a>
</li>
