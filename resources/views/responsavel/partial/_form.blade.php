@csrf
@if(isset($responsavel))
    @php
    $pessoa = $responsavel->user->pessoa;
    $user = $responsavel->user
    @endphp
@endif
<div class="row">
    <div class="col-md-6 col-sm-12">
        <label for="nome"><span class="text-danger">*</span> Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{$pessoa->nome ?? old ('nome')}}">
    </div>
    @error('nome')
        <p class="text-danger">{{ $message }}</p>
    @enderror

</div>
<div class="row mt-1">
    <div class="col-md-2 col-sm-8">
        <div class="min">
            <label for="dataNascimento"><span class="text-danger">*</span>Data de Nascimento:</label>
            <input class="form-control" type="date" name="dataNascimento" id="dataNascimento" value="{{$pessoa->data_nascimento ?? old ('dataNascimento')}}">
        </div>
        @error('dataNascimento')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="sexo"><span class="text-danger">*</span>Sexo:</label>
            @php
                $female = "";
                $male = "";
            @endphp
        @if(isset($pessoa))
            @php
                $female = (old('sexo', $pessoa->sexo) == 'F') ? 'checked' : '';
                $male = (old('sexo', $pessoa->sexo) == 'M') ? 'checked' : '';
            @endphp
        @endif

        <input class="ml-3" type="radio" name="sexo" id="sexoFeminino" value="F" {{ $female }}> Feminino
        <input class="ml-3" type="radio" name="sexo" id="sexoMasculino" value="M" {{ $male }}> Masculino
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="cpf"><span class="text-danger">*</span>CPF:</label>
        <input class="form-control" type="text" name="cpf" id="cpf" value="{{$pessoa->cpf ?? old ('cpf')}}">
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="rg"><span class="text-danger">*</span>RG:</label>
        <input class="form-control" type="text" name="rg" id="rg" value="{{$pessoa->rg ?? old ('rg')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6 col-sm-12">
        <label for="email"><span class="text-danger">*</span>E-mail:</label>
        <input class="form-control" type="text" name="email" id="email" value="{{$user->email ?? old ('email')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="telefone1"><span class="text-danger">*</span>Telefone 1:</label>
        <input class="form-control" type="text" name="telefone1" id="telefone1" value="{{$pessoa->telefone1 ?? old ('telefone1')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="telefone2">Telefone 2:</label>
        <input class="form-control" type="text" name="telefone2" id="telefone2" value="{{ $pessoa->telefone1 ?? ('telefone2')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3 col-sm-12">
        <label for="cep"><span class="text-danger">*</span>CEP:</label>
        <input class="form-control" type="text" name="cep" id="cep" value="{{$pessoa->cep ?? old ('cep')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-5 col-sm-12">
        <label for="rua"><span class="text-danger">*</span>Rua:</label>
        <input class="form-control" type="text" name="rua" id="rua" value="{{$pessoa->rua ?? old ('rua')}}">
    </div>
    <div class="col-md-1 col-sm-12">
        <label for="numero"><span class="text-danger">*</span>Numero:</label>
        <input class="form-control" type="text" name="numero" id="numero" value="{{$pessoa->numero ?? old ('numero')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-5 col-sm-12">
        <label for="complemento">Complemento:</label>
        <input class="form-control" type="text" name="complemento" id="complemento" value="{{$pessoa->complemento ?? old ('complemento')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="bairro"><span class="text-danger">*</span>Bairro:</label>
        <input class="form-control" type="text" name="bairro" id="bairro" value="{{$pessoa->bairro ?? old ('bairro')}}">
    </div>
</div>

<div class="row mt-2">

</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="cidade"><span class="text-danger">*</span>Cidade:</label>
        <input class="form-control" type="text" name="cidade" id="cidade" value="{{$pessoa->cidade ?? old ('cidade')}}">
    </div>
    <div class="col-md-3 col-sm-12">
        <label for="uf"><span class="text-danger">*</span>Estado:</label>
        <br>
        <select name="uf" id="estado">
            <option value="">{{ $pessoa->uf ?? 'Selecione'}}  </option>
            <option value="sp">SP</option>
        </select>
    </div>
</div>

<div class="row mt-5">
    <div class="col-8">
        <a href="{{ route('responsavel.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left mr-2"></i> Voltar</a>
        <button class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
    </div>
</div>
