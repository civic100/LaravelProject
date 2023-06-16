@extends('layouts.app')

@section('template_title')
    Update Race Insurer
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Race Insurer</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('race-insurers.update', $raceInsurer->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('race-insurer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
