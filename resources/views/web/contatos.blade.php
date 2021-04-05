@extends('layouts.web.app')
@section('title')
    Contato
@endsection

@section('content')

<div class="p-4">
        <div class="text-center">
            <h2>Contatos</h2>
        </div>

        <div class="row mt-5">
            <div class="col-6 p-3 mt-2"  style="border-radius: 8px; border:1px solid black; min-width: 320px;">
                <form action="#" method="get">
                    <div class="text-center mb-4">
                        <h3>Formulario</h3>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right">
                            <label for="name" class="mt-2">Nome: </label>
                        </div>
                        <div class="col-8"><input type="text" id="name" name="name" class="form-control"></div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-3 text-right">
                            <label for="name" class="mt-2">E-mail: </label>
                        </div>
                        <div class="col-8"><input type="text" id="name" name="name" class="form-control"></div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-3 text-right">
                            <label for="name" class="mt-2">Telefone: </label>
                        </div>
                        <div class="col-8"><input type="text" id="name" name="name" class="form-control"></div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                         <div class="col-11">
                            <label for="name" class="mt-2">Assunto: </label>
                            <textarea class="form-control" style="border: 1px solid black; border-radius: 10px; resize: none;" name="assunto" id="" cols="45" rows="12" ></textarea>
                        </div>

                        <button class="btn-lg btn-success pl-5 pr-5 mt-3">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-6 mt-2" style="min-width: 320px;">
                <div class="box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14992.020557669144!2d144.96137823337736!3d-37.8208680339909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b1b46283b9%3A0x33718f02306f1e54!2sNational%20Gallery%20of%20Victoria!5e0!3m2!1spt-BR!2sbr!4v1608758704330!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0"  style="border-radius: 10px; border:1px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="p-2">
                    <h4 class="m-2">Horario de funcionamento:</h4>
                    <h5 class="m-2">Segunda a Sexta das 08:00 as 17:00</h5>
                    <h3 class="m-2 mt-4">Telefones para contato:</h3>
                    <div class="mt-3 ml-4">
                        <h4><i class="fa fa-phone mr-2"></i>(19) 3352 - 2929</h4>
                    </div>
                </div>

            </div>
        </div>
</div>

@endsection
