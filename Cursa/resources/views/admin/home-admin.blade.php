@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="card-group">
          <div class="card d-flex align-items-center">
           <a href="/races"><img src="logoImages/race_icon.png" height="150px" class="p-2" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title"><a href="/races" class="nav-link link-success">Races</a></h5>
            </div>
          </div>
          <div class="card d-flex align-items-center">
            <a href="/insurers"><img src="logoImages/insurer_icon.png" height="150px" class="p-2" alt="..."></a>
            <div class="card-body ">
              <h5 class="card-title"><a href="/insurers" class="nav-link link-success">Insurers</a></h5>
            </div>
          </div>
          <div class="card d-flex align-items-center">
            <a href="/sponsors"><img src="logoImages/sponsor_icon.png" height="150px" class="p-2" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title"><a href="/sponsors" class="nav-link link-success">Sponsors</a></h5>
            </div>
          </div>
        </div>
    </div>
@endsection
