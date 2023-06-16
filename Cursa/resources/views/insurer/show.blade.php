@extends('layouts.app')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Insurer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('insurers.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Cif:</strong>
                            {{ $insurer[0]->insurer->cif }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $insurer[0]->insurer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $insurer[0]->insurer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $insurer[0]->insurer->active }}
                        </div>
                        <h3>Races</h3>
                        <ul class="list-group list-group-numbered">
                            @foreach($insurer as $insu)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Race {{$insu->race_id}}</div>
                                    {{$insu->race->description}}
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
