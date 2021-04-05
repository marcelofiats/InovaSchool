<div class="modal fade" id="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="border-radius: 40px 10px;">
          <button type="button" class="close text-right m-2" style="size: 18px;" data-dismiss="modal" aria-label="Close">
            <span class="Xbutton" aria-hidden="true">&times;</span>
          </button>
        <div class="modal-body">
            <div class="login" style="margin: -30px -20px 0 -20px;">
                <form id="formLogin" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center mt-1 mb-5">
                        <img src="{{asset('images/logo2.png')}}" width="280px">
                    </div>
                    @if($errors->all())
                        <div class="d-flex justify-content-center mt-1 mb-1">
                            @foreach($errors->all() as $error)
                                <div class="text-danger" onload="modal()">
                                    {{$error}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="text-success text-center">
                            E-mail com link de troca de senha foi enviado ao email cadastrado.
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
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>

