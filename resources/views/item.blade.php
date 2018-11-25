@extends('global')
@section('content')
    <div id='intro'>
        <center>
            <div class="ml-5">
                <h2>{{$mounts->name}}</h2>
                <h5>{{$mounts->locations->name}}</h5>
                <br><br>
                <a class="btn btn-danger" href="{{route('shop',['id'=>$mounts->id])}}">BOOK NOW</a>
            </div>

        </center>
        <div class='cta container'>
            <div id="carouselExampleIndicators" class="carousel slide w-75" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('storage/'.$mounts->image_2)}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/'.$mounts->image_1)}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/'.$mounts->image_2)}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header" style="font-size:25px">
                Informasi
            </div>
            <div class="card-body">
                <h5 class="card-title">Deskripsi : </h5>
                <p class="card-text">{{$mounts->desc}}</p>
                <h5 class="card-title">Ketinggian : </h5>
                <p class="card-text">{{$mounts->height}} m</p>
                <h5 class="card-title">Waktu Tempuh : </h5>
                <p class="card-text">1,5 - 2 jam</p>
                <h5 class="card-title">Letak : </h5>
                <p class="card-text">{{$mounts->locations->name}}</p>
                <div class="row">
                    <iframe src="{{$mounts->link}}" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection