@extends('layouts.app')

@section('template_title')
    {{ $raceImage->name ?? 'Show Race Image' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Race Image</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('race-images.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Race Id:</strong>
                            {{ $raceImage->race_id }}
                        </div>
                        <div class="form-group">
                            <strong>Race Image:</strong>
                            {{ $raceImage->race_image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
