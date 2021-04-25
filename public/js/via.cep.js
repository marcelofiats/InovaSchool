$(function() {

    estados();
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        //$("#ibge").val(dados.ibge);
                        desabilitarCampos();
                        $('#numero').focus();
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
            abilitarCampos();
            $('#rua').focus();
        }
    });
});


function limpa_formulário_cep() {
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#optionSelect").attr('selected', 'selected');
}

function desabilitarCampos(){
    $("#rua").prop('readonly', true);
    $("#bairro").prop('readonly', true);
    $("#cidade").prop('readonly', true);
    $("#estado").prop('readonly', true);
}

function abilitarCampos(){
    $("#rua").prop('readonly', false);
    $("#bairro").prop('readonly', false);
    $("#cidade").prop('readonly', false);
    $("#estado").prop('readonly', false);
}

function estados(){
    $.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome', function(estados){
        $('#estado').empty();
        $('#estado').append('<option id="optionSelect" value="">Selecione</option>');
        estados.forEach(function(estado){
            var opcao = montarOpcao(estado);
            $('#estado').append(opcao);
        });
    });
}

function montarOpcao(estado){

    if ($('#estadoSelecionado').val() != null && $('#estadoSelecionado').val() != '') {
        uf = $('#estadoSelecionado').val();
        if (uf == estado.sigla) {
            var opcao = '<option value="'+ estado.sigla +'" selected>' + estado.nome + '</option>';
        } else {
            var opcao = '<option value="'+ estado.sigla +'">' + estado.nome + '</option>';
        }
    }
    else {
        var opcao = '<option value="'+ estado.sigla +'">' + estado.nome + '</option>';
    }

    return opcao;
}
