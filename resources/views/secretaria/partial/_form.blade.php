@csrf
@if(isset($secretaria))
    @php
    $pessoa = $secretaria->user->pessoa;
    $user = $secretaria->user
    @endphp
@endif
<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<div class="row mb-3">
    <div class="col-12 my-2"><span class="text-danger">*</span><strong> Campos Obrigatórios</strong></div>
    <div class="col-md-6 col-sm-12">
        <label for="nome"><span class="text-danger">*</span> Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{$pessoa->nome ?? old ('nome')}}">
    </div>
    <div class="col-12 text-danger" id="errornome"></div>
    @error('nome')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>
<div class="row mb-3">
    <div class="col-md-3 col-sm-8">
        <div class="min">
            <label for="dataNascimento"><span class="text-danger">*</span>Data de Nascimento:</label>
            <input class="form-control" type="date" name="dataNascimento" id="dataNascimento" value="{{$pessoa->data_nascimento ?? old ('dataNascimento')}}">
        </div>
        <div class="col-12 text-danger" id="errordataNascimento" ></div>
        @error('dataNascimento')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="row mb-3">
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
    <div id="errorsexo" class="col-12 cpf text-danger"></div>
    @error('sexo')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>

<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <label for="cpf"><span class="text-danger">*</span>CPF:</label>
        <input class="form-control cpf" type="text" name="cpf" id="cpf" value="{{$pessoa->cpf ?? old ('cpf')}}"/>
    </div>
    <div id="errorcpf" class="col-12 cpf text-danger"></div>
    @error('cpf')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <label for="rg"><span class="text-danger">*</span>RG:</label>
        <input class="form-control rg" type="text" name="rg" id="rg" value="{{$pessoa->rg ?? old ('rg')}}">
    </div>
    <div id="errorrg" class="col-12 cpf text-danger"></div>
    @error('rg')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <label for="email"><span class="text-danger">*</span>E-mail:</label>
        <input class="form-control" type="text" name="email" id="email" value="{{$user->email ?? old ('email')}}">
    </div>
    <div id="erroremail" class="col-12 cpf text-danger"></div>
    @error('email')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>
<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="telefone1"><span class="text-danger">*</span>Telefone 1:</label>
        <input class="form-control telefone" type="text" name="telefone1" id="telefone1" value="{{$pessoa->telefone1 ?? old ('telefone1')}}">
    </div>
    <div id="errortelefone" class="col-12 cpf text-danger"></div>
    @error('telefone1')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>

<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <label for="telefone2">Telefone 2:</label>
        <input class="form-control telefone" type="text" name="telefone2" id="telefone2" value="{{ $pessoa->telefone2 ?? old ('telefone2')}}">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-3 col-sm-12">
        <label for="cep"><span class="text-danger">*</span>CEP:</label>
        <input class="form-control cep" type="text" name="cep" id="cep" value="{{$pessoa->cep ?? old ('cep')}}">
    </div>
    <div id="errorcep" class="col-12 cpf text-danger"></div>
    @error('cep')
        <div class="col-12">
            <p class="text-danger">{{ $message }}</p>
        </div>
    @enderror
</div>

<div class="row mt-2">
    <div class="col-md-5 col-sm-12">
        <div class="row">
            <div class="col-12">
                <label for="rua"><span class="text-danger">*</span>Rua:</label>
                <input class="form-control" type="text" name="rua" id="rua" value="{{$pessoa->rua ?? old ('rua')}}">
            </div>
            <div id="errorrua" class="col-12 cpf text-danger"></div>
            @error('rua')
                <div class="col-12">
                    <p class="text-danger">{{ $message }}</p>
                </div>
            @enderror
        </div>

    </div>
    <div class="col-md-2 col-sm-12">
        <div class="row">
            <div class="col-12">
                <label for="numero"><span class="text-danger">*</span>Numero:</label>
                <input class="form-control" type="text" name="numero" id="numero" value="{{$pessoa->numero ?? old ('numero')}}">
                <div id="errornumero" class="col-12 cpf text-danger"></div>
                @error('numero')
                    <div class="col-12">
                        <p class="text-danger">{{ $message }}</p>
                    </div>
                @enderror
            </div>
        </div>
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
    <div class="col-12 text-danger" id="errorbairro" ></div>
        @error('bairro')
            <p class="text-danger">{{ $message }}</p>
        @enderror
</div>
<div class="row mt-2">
    <div class="col-md-4 col-sm-12">
        <div class="row">
            <div class="col-12">
                <label for="cidade"><span class="text-danger">*</span>Cidade:</label>
                <input class="form-control" type="text" name="cidade" id="cidade" value="{{$pessoa->cidade ?? old ('cidade')}}">
            </div>
            <div class="col-12">
                <div class="col-12 text-danger" id="errorcidade" ></div>
                @error('cidade')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="row">
            <div class="col-12">
                <label for="uf"><span class="text-danger">*</span>Estado:</label>
                <br>
                <input type="hidden" id="estadoSelecionado" value="{{ $pessoa->uf ?? old ('estado') }}"/>
                <div id="estadoSelect">
                    <select class="form-control" name="uf" id="estado" style="max-width: 180px;">
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="col-12 text-danger" id="errorestado" ></div>
                @error('estado')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

    </div>
</div>

<div class="row mt-5">
    <div class="col-8">
        <a href="{{ route('secretaria.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left mr-2"></i> Voltar</a>
        <button type="button" id="confirmButton" class="btn btn-success" onclick='validar()'><i class="fa fa-check"></i> Salvar</button>
    </div>
</div>

<script>
    function validar() {
        limparCampos();
        var index = true;
        if ($('#nome').val() == "") {
            $('#errornome').html("O campo nome é obrigatorio");
            index = false;
        }
        if ($('#dataNascimento').val() == "") {
            $('#errordataNascimento').html("Data de Nascimento é obrigatório");
            index = false;
        }
        if ($('input[name=sexo]:checked').val() == null) {
            $('#errorsexo').html("Selecione um sexo");
            index = false;
        }
        if ($('#cpf').val() == "") {
            $('#errorcpf').html("O campo CPF é obrigatorio");
            index = false;
        }
        if ($('#cpf').val().length < 9) {
            $('#errorcpf').html("CPF Inválido");
            index = false;
        }
        if ($('#rg').val() == "") {
            $('#errorrg').html("O Campo RG é Obrigatorio");
            index = false;
        }
        if ($('#rg').val().length < 8) {
            $('#errorrg').html("RG Inválido");
            index = false;
        }
        if ($('#email').val().indexOf('@') < 1) {
            $('#erroremail').html("Digite um e-mail valido");
            index = false;
        }
        if ($('#telefone1').val() == "") {
            $('#errortelefone').html("Digite um telefone");
            index = false;
        }
        if ($('#cep').val().length < 8) {
            $('#errorcep').html("Digite um CEP valído");
            index = false;
        }
        if ($('#rua').val() == "") {
            $('#errorrua').html("O campo rua é obrigatório");
            index = false;
        }
        if ($('#numero').val() == "") {
            $('#errornumero').html("O campo numero é obrigatório");
            index = false;
        }
        if ($('#bairro').val() == "") {
            $('#errorbairro').html("O campo bairro é obrigatório");
            index = false;
        }
        if ($('#cidade').val() == "") {
            $('#errorcidade').html("O campo cidade é obrigatório");
            index = false;
        }
        if ($('#estado').val() == "") {
            $('#errorestado').html("Selecione um estado");
            index = false;
        }
        if (index){
            $('#confirmButton').attr('type', 'submit');
            $('#confirmButton').attr('clicked');
        }
    }

    function limparCampos(){
        $('#errornome').html("");
        $('#errordataNascimento').html("");
        $('#errorsexo').html("");
        $('#errorcpf').html("");
        $('#errorrg').html("");
        $('#erroremail').html("");
        $('#errortelefone').html("");
        $('#errorcep').html("");
        $('#errorrua').html("");
        $('#errornumero').html("");
        $('#errorbairro').html("");
        $('#errorcidade').html("");
    }
</script>
