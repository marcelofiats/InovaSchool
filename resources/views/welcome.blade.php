<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>InovaScholl</title>
</head>
<style>
    body{
        background: url("{{asset('images/banner.jpg')}}") no-repeat 63%;
        background-size: cover;
    }

    .login{
        min-width: 380px;
        width: 40%;
        height: 550px;
        margin-top: 10%;
        background-color: rgb(200, 238, 248);
        border: 2px solid rgb(49, 49, 49);
        box-shadow: 10px 5px 5px rgb(47, 47, 48);
        //box-shadow: 12px -5px rgb(191, 199, 209);
        border-radius: 40px 10px;
        font-size: 14pt;
    }
    .title{
        font-size: 28pt;
    }
    .font14{
        font-size: 14pt;
    }

</style>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="login p-2">
                <form action="{{route('login')}}" method="post">
                    <div class="d-flex justify-content-center mt-3 mb-5">
                        <img src="{{asset('images/logo2.png')}}" width="280px">
                    </div>
                    <div class="row mt-3 ml-2">
                        <div class="col-3 text-right">
                            <label class="mt-1" for="username">Usuário: </label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" name="username" id="username" type="text" placeholder="Nome de usuário">
                        </div>
                    </div>
                    <div class="row mt-2  ml-2">
                        <div class="col-3 text-right">
                            <label class="mt-1" for="password">Senha: </label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Senha de usuário">
                        </div>
                    </div>
                    <div class="row mt-2 ml-2">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <input type="checkbox" name="lembrarme" id="lembrarme">
                            <label>Lembrar me</label>
                        </div>
                    </div>

                    <div class="row  ml-2">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <a href="#" style="font-size: 11pt;">Esqueci a Senha</a>
                        </div>
                    </div>

                    <div class="mt-4 d-flex justify-content-center">
                            <button class="btn-lg btn-success pl-5 pr-5"><i></i>Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
