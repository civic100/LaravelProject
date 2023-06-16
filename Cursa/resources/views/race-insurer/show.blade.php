@extends('layouts.app')

@section('template_title')
    {{ $raceInsurer->name ?? 'Show Race Insurer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Race Insurer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('race-insurers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Race Id:</strong>
                            {{ $raceInsurer->race_id }}
                        </div>
                        <div class="form-group">
                            <strong>Insurer Cif:</strong>
                            {{ $raceInsurer->insurer_cif }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $raceInsurer->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
