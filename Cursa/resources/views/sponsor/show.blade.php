@extends('layouts.app')

@section('template_title')
    {{ $sponsor[0]->sponsor->name ?? 'Show Sponsor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sponsor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sponsors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Cif:</strong>
                            {{ $sponsor[0]->sponsor->cif }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $sponsor[0]->sponsor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $sponsor[0]->sponsor->address }}
                        </div>

                        <h3>Races</h3>
                        <ul class="list-group list-group-numbered">
                            @foreach($sponsor as $insu)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Race {{$insu->race_id}}</div>
                                    {{$insu->race->race_price}} €
                                  </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
