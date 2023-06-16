@extends('layouts.app')
@section('template_title')
    Gallery
@endsection
@section('content')
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <div class="container py-5">
        <h1>Gallery</h1>
        <section class="pt-5 pb-5">
            <div class="container">
                @foreach ($races as $race)
                    @if(count($race->raceImage) >  0 )
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-3">Race - {{$race->id}} </h3>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators{{$race->id}}" role="button" data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators{{$race->id}}" role="button" data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators{{$race->id}}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                @for($i = 0; $i < 3; $i++)
                                                    @if(isset($race->raceimage[$i]))
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="img-fluid p-2" alt="100%x280" src="/images/{{$race->raceimage[$i]->race_image}}">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        @for ($i = 1; $i < intval(ceil((count($race->raceimage)-3)/3)+1); $i++)
                                        <div class="carousel-item">
                                            <div class="row">
                                                @for($j = intval($i*3); $j < intval(($i*3)+3); $j++)
                                                    @if(isset($race->raceimage[$j]))
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="img-fluid" alt="100%x280" src="/images/{{$race->raceimage[$j]->race_image}}">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Special title treatment</h4>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

    </div>
    <script type='text/javascript'></script>
@endsection
