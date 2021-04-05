<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-face.css')}}">
    <link rel="stylesheet" href="{{asset('/css/theme.css')}}">
    <title>InovaSchool - @yield('title')</title>
</head>
<style>
    body{
        background-color: rgb(219, 218, 219);

    }
    .principal{
        min-width: 360px;
        width: 55%;
        box-shadow: 10px 5px 5px rgb(85, 84, 85);
        margin-bottom: 30px;
    }
    header{
        background: url("{{asset('images/school3.jpg')}}") no-repeat 0px -320px;
        background-size: 100% 560px;
        width: 100%;
        padding:2%;
        height: 220px;
    }
    .container{
        min-height: 900px;
        background-color: white;
    }
    .section{
        margin-left: -1.5%;
        margin-right: -1.5%;
        border-top: 1px solid black;
    }
    .imag{
        width: 100%;
    }
    .footer{
        background-color: white;
        text-align: center;
        border-top: 1px solid black;
    }

    li{
        margin: -8px 5px -8px 5px;
        padding: 2px 25px;
        transition: 0.8s;
    }
    li:hover{
        background-color: rgb(165, 164, 164);
    }
    .active{
        background-color: rgb(165, 164, 164);
    }
    .Xbutton{
        padding: 0 5px 0 5px;
        border: 1px solid black;
        border-radius: 5px;
    }

</style>
<body class="d-flex justify-content-center" @if(count($errors)>0 || session('status') != null) onload="modal()"@endif>
    <div class="principal">
        <div class="menu">
            <header>
            </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{request()->routeIs('web.index') ? 'active' : '' }}">
                            <a class="nav-link" href="/"><i class="fa fa-globe"></i>
                                Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{request()->routeIs('web.escola') ? 'active' : '' }}">
                            <a class="nav-link" href="/escola"><i class="fa fa-university"></i>
                                Escola</a>
                        </li>
                        <li class="nav-item {{request()->routeIs('web.contatos') ? 'active' : '' }}">
                            <a class="nav-link" href="/contatos"><i class="fa fa-users"></i>
                                Contatos</a>
                        </li>
                    </ul>
                </div>
                <div class="text-right">
                    <ul class="navbar-nav mr-auto">
                        @if(isset(Auth::user()->email))
                            <li>
                                <a href="{{route(app(App\Policies\RedirectTo::class)->permission(Auth::user()))}}" class="nav-link"><i class="fa fa-user-circle"></i>
                                    Home</a>
                            </li>
                        @else
                            <li class="nav-item {{request()->routeIs('web.login') ? 'active' : '' }}">
                                <a id="modalActive" class="nav-link" onclick="modal()"><i class="fa fa-user-circle"></i>
                                    Login</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav><!--menu-->
        </div>
          <div class="container">
                @yield('content')
          </div>
          <div class="footer">
            <p>Copyright &copy; 2019 - by Marcelo Fiats</p>
            <p><i class="fa fa-whatsapp"></i> (19)99154-2927</p>
            <p><i class="fa fa-facebook mr-1"></i><a href="https://www.facebook.com/marcelofiats.dasilva" target="_blank">Facebook</a>|
                <i class="fa fa-linkedin mr-1"></i><a href="https://www.linkedin.com/in/marcelo-fiats-da-silva-5b00b297/" target="_blank">LinkedIn</a></p>
          </div>

          @include('layouts.web.modal')
          @include('layouts.web.forgotPassword')

    </div><!--principal-->
</body>

<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/moment.js')}}"></script>

<script>
    function modal(){
        $('#modal').modal('show');
    }

    function validation(){
        success = true;
        if($('#email').val() == ''){
            success = false;
            $('#error').html('digite um email');
        }
        if($('#password').val() == ''){
            success = false;
            $('#error').html('digite a senha');
        }
        if(success){
            $('#formLogin').submit();
        }
    }

    function forgotPassword(){
        $('#modal').modal('hide');
        $('#forgotPassword').modal('show');
    }

    function forgotValidation(){
        success = true;
        if($('#forgotEmail').val() == ''){
            success = false;
            $('#forgotError').html('Digite o e-mail cadastrado!!!');
        }
        if(success){
            $('#forgotForm').submit();
            alert("Nova senha gerada com sucesso \nSua nova senha foi enviada para o seu e-mail");
        }
    }

</script>

</html>
