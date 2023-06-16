
@extends('layouts.app')
    @section('template_title')
    racePage
    @endsection

    @section('content')

    <!--SCRIPTS-->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- The Close Button -->
      <span class="close">&times;</span>
    
      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">
    
      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
    </div>
    <div class="super_container">
        <header class="header" style="display: none;">
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="single_product">
            <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                <div class="row">
                    <div class="col-lg-2 order-lg-1 order-2">
                        <ul class="image_list">
                            <li><img id="myImg" src="/mapsImages/{{ $race->maps_image }}" ></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="/promotionalPosters/{{ $race->promotional_poster }}" alt=""></div>
                    </div>
                        <div class="col-lg-6 order-3">
                            <div class="product_description">

                                <div class="product_name"> {{$race->name}}</div>
                                <div> <span class="product_price">{{$race->race_price}}€</span> <strike class="product_discount"> <span style='color:black'>{{$race->race_price+20}}€<span> </strike> </div>
                                <div> <span class="product_saved">You Saved:</span> <span style='color:black'>20€<span> </div>
                                <div> <span class="product_info">Start of bike race: {{$race->date}}<span></div>
                                <hr class="singleline">
                                <div> <span class="product_info">{{$race->description}}<span></div>
                                <div>
                                    <div class="row">

                                        <div class="col-md-7"> </div>
                                    </div>
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="col-xs-6" > <span class="product_options">Ramp: {{$race->ramp}}</span><br> </div>
                                        <div class="col-xs-6" > <span class="product_options">{{$race->km}}km</span><br></div>

                                    </div>
                                    @if ($date < $race->date)
                                        <br>
                                        <div> <span class="product_info">Sign up for our race<span></div>
                                        <a href="{{ route('runnerForm',$race->id )}}" class="btn btn-primary">Enroll in the race</a>
                                    @endif
                                    <br>
                                    <div class="product_name">Sponsors</div>

                                    @foreach ($sponsorImage as $sponsor)

                                        <img src="/logoImages/{{ $sponsor['logo'] }}" width="100px">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(count($raceImage) > 0)
                    <div class="container py-5">
                        <section class="pt-5 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="mb-3">Gallery</h3>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <i class="fa fa-arrow-left"></i>
                                        </a>
                                        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="row">
                                                        @for($i = 0; $i < 3; $i++)
                                                            @if(isset($raceImage[$i]))
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid p-2" alt="100%x280" src="/images/{{$raceImage[$i]->race_image}}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </div>
                                                @for ($i = 1; $i < intval(ceil((count($raceImage)-3)/3)+1); $i++)
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        @for($j = intval($i*3); $j < intval(($i*3)+3); $j++)
                                                            @if(isset($raceImage[$j]))
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="/images/{{$raceImage[$j]->race_image}}">
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
                            </div>
                        </section>
                    </div>
                    @endif
                    <div class="card">
                      <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">By Sex</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">By Age</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          @include('placement.rankingGeneral')
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          @include('placement.rankingSex')
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                          @include('placement.rankingAge')
                        </div>
                      </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
