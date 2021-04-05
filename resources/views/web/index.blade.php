@extends('layouts.web.app')

@section('title')
    Home
@endsection

@section('content')
<div class="section">
    <div id="carouselExampleIndicators" style="height: 600px;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px">
                <a class="imag" href="#">
                    <img class="d-block w-100" style="height: 600px" src="{{asset('images/noticia1.png')}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item" style="height: 600px">
                <a class="imag" href="">
                    <img class="d-block w-100"  style="height: 600px" src="{{asset('images/noticia2.png')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item" style="height: 600px">
                <a class="imag" href="">
                    <img class="d-block w-100" style="height: 600px" src="{{asset('images/noticia3.png')}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" style="margin-left: -5%;" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" style="margin-right: -5%;"  href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection
