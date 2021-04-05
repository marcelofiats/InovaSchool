<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('/css/font-face.css')}}">
        <link rel="stylesheet" href="{{asset('/css/theme.css')}}">
        <title>Document</title>
    </head>
    <style>
        .form{
            margin-top: 10%;
            width: 25%;
            min-width: 330px;
            background-color: rgba(220, 221, 240, 0.623);
            height: 510px;
            border: 1px solid black;
            border-radius: 30px 5px;
            box-shadow: 5px 5px black;
        }
    </style>
<body>
@if(isset($route))
    <form id="formLogin" action="{{route("$route")}}" method="post">
        <div class="d-flex justify-content-center">
            <div class="form">
                @csrf
                <div class="d-flex justify-content-center mt-1 mb-5">
                    <img src="{{asset('images/logo2.png')}}" width="280px">
                </div>
                <div class="d-flex justify-content-center mt-1 mb-1">
                    @if (session('error'))
                    <div class="text-danger" id="error1">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
                @if($errors->all())
                    <div class="d-flex justify-content-center mt-1 mb-1">
                        @foreach($errors->all() as $error)
                            <div class="text-danger" id="error1">
                                {{$error}}
                            </div>
                        @endforeach
                    </div>
                elseif($error)
                    <div class="text-danger">
                        {{$error}}
                    </div>
                @endif

                <div class="d-flex justify-content-center mt-1 mb-1">
                    <div id="error" class="text-danger"></div>
                </div>
                <div class="row mt-3 ml-1">
                    <div class="col-3 text-right">
                        <label class="mt-1" for="email">E-mail: </label>
                    </div>
                    <div class="col-8">
                        <input class="form-control" name="email" id="email" type="email" placeholder="e-mail">
                    </div>
                </div>
                <div class="row mt-2  ml-1">
                    <div class="col-3 text-right">
                        <label class="mt-1" for="password">Senha: </label>
                    </div>
                    <div class="col-8">
                        <input class="form-control" name="password" id="password" type="password" placeholder="Senha de usuário">
                    </div>
                </div>
                <div class="row mt-2 ml-1">
                    <div class="col-3"></div>
                    <div class="col-8">
                        <input type="checkbox" name="lembrarme" id="lembrarme">
                        <label>Lembrar me</label>
                    </div>
                </div>

                <div class="row  ml-1">
                    <div class="col-3"></div>
                    <div class="col-8">
                        <a href="#" onclick="forgotPassword()" style="font-size: 11pt;">Esqueci a Senha</a>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    <button type="button" onclick="validation()" class="btn-lg btn-success pl-5 pr-5 mb-4"><i></i>Entrar</button>
                </div>
            </div>
        </div>
    </form>
@else
    <h2>Não há rota definida</h2>
@endif
</body>

<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/moment.js')}}"></script>

<script>
    function validation(){
        $('#error').html('');
        $('#error1').html('');
        success = true;

        if($('#password').val() == ''){
            success = false;
            $('#error').html('digite a senha');
        }
        if($('#email').val() == ''){
            success = false;
            $('#error').html('digite um email');
        }
        if(success){
            $('#formLogin').submit();
        }
    }
</script>

</html>




