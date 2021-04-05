
@can('is_admin')
    @include('layouts.admin.partial.menu.admin')

@elsecan('is_diretor')
    @include('layouts.admin.partial.menu.diretores')

@elsecan('is_professor')
    @include('layouts.admin.partial.menu.professor')

@elsecan('is_secretaria')
    @include('layouts.admin.partial.menu.secretaria')

@elsecan('is_responsavel')
    @include('layouts.admin.partial.menu.responsavel')
@endcan






