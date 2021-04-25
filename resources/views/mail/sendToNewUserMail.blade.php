@component('mail::message')
<style>
    .center{
        text-align: center;
    }
</style>
<body>
    <div class="row">
        <div>
            <h3 class="center">Usuário Criado com sucesso</h3></div>
            <div class="card-body m-4">
            <p>Olá {{ $user->pessoa->nome }} </p>
            <p>Seu usuário no sistema do <strong>InovaSchool</strong> foi gerado com sucesso.</p>
            <p>para acessar o sistema use este endereco de e-mail</p>
            <p>sua senha e o numero do seu CPF</p>
            <br>
            <p>Por medida de segurança pedimos que apos o primeiro acesso faça a mudança da senha para uma de sua confiança</p>
            <br><br>
            <p>Obrigado</p>
        </div>
    </div>
</body>

@endcomponent
