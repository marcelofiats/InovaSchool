<div class="modal fade" id="forgotPassword"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="border-radius: 40px 10px;">
          <button type="button" class="close text-right m-2" style="size: 18px;" data-dismiss="modal" aria-label="Close">
            <span class="Xbutton" aria-hidden="true">&times;</span>
          </button>
        <div class="modal-body">
            <div class="login" style="margin: -30px -20px 0 -20px;">
                <form id="forgotForm" action="{{ route('password.email') }}" method="POST">
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
                    <div class="d-flex justify-content-center mt-1 mb-1">
                        <div id="forgotError" class="text-danger"></div>
                    </div>
                    <div class="row mt-3 ml-1">
                        <div class="col-3 text-right">
                            <label class="mt-1" for="emailPasswordReset">E-mail: </label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" name="emailPasswordReset" id="emailPasswordReset" type="emailPasswordReset" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <button type="button" onclick="forgotValidation()" class="btn-lg btn-success pl-5 pr-5 mb-4"><i></i>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
