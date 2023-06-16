@extends('layouts.app')

@section('template_title')
    {{ $runner->name ?? 'Show Runner' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Runner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('runners.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $runner->name }}
                        </div>
                        <div class="form-group">
                            <strong>Sex:</strong>
                            {{ $runner->sex }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $runner->address }}
                        </div>
                        <div class="form-group">
                            <strong>Birth Date:</strong>
                            {{ $runner->birth_date }}
                        </div>
                        <div class="form-group">
                            <strong>Federation:</strong>
                            {{ $runner->federation }}
                        </div>
                        <div class="form-group">
                            <strong>Num Federation:</strong>
                            {{ $runner->num_federation }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
