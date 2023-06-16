@extends('layouts.app')
    @section('template_title')
    Home
    @endsection

    @section('content')
        <div class="container py-5">
            <h1>Races available
                <br>Sign up now </h1>
            <!-- For Demo Purpose -->
            <!-- DEMO 5 -->

            <div class="row row-cols-1 row-cols-md-2 g-4">

            @foreach ($races->slice(0, 4) as $race => $value)
                @if ($diaActual<$value->date)
                <div class="col-md-4">

                            <h4 class="text-center"><strong>{{$value->name}}</strong></h4>
                            <hr>
                            <a class="dropdown-item" href="{{ route('racePage',$value->id) }}">
                                <div class="profile-card-6"><img src="/promotionalPosters/{{ $value->promotional_poster }}"  width="100%" class="img img-responsive">
                                    <div class="profile-name"> {{$value->date}}</div>
                                    <div class="profile-position">{{substr($value->description, 0, 10)."...";}}</div>
                                    <div class="profile-overview">
                                        <div class="profile-overview">
                                            <div class="row text-center">
                                                <div class="col-xs-4">
                                                    <h3>Price</h3>
                                                    <p>{{$value->race_price}}€</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endif
                        @endforeach
                </div>
             <div class="product_description">
                <div class="product_name">Sponsors</div>
                @foreach ($sponsorImage as $sponsor)
                    @if ($sponsor->home == 1 )
                    <img src="/logoImages/{{ $sponsor->logo }}" width="100px" style="margin-left:10%">
                    @endif
                @endforeach

            </div>
        </div>
    @endsection
