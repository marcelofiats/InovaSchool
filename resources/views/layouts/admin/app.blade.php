@include('layouts.admin.header')
<div class="row justify-content-md-center">
    <div class="col-10">
        <div class="card mx-4">
            @yield('content')
        </div>
    </div>
</div>
@include('layouts.admin.partial.footer')
