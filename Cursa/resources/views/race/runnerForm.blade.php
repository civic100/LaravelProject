@extends('layouts.app')

@section('js')
    <script src="{{asset('js/totalPriceRace.js')}}"></script>
@stop
@once
    @push('scripts')
      <script src="{{asset('js/totalPriceRace.js')}}"></script>
    @endpush
@endonce

@section('content')
@if ($lleno == true)
  <h1>Carrera Llena</h1>
@else
@if(Session::has('error'))
  <div class="alert alert-danger">{{Session::get('error') }}</div>
@endif
@if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success') }}</div>
    <a href="{{ route('generatePDF', $response['id'].','.$response['status'].','.$response['payment_source']['paypal']['name']['given_name'].','.$response['payment_source']['paypal']['name']['surname'].','.$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['value'])}}" class="btn btn-primary"> Generate invoice (PDF)</a>

@endif
<p class="text-center">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Register with ID</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Register from scratch</button>
</p>
    <div class="row">
      <div class="col-6">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            {{ method_field('PATCH') }}
            @csrf
            @include('race.runnerFormDni')
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            {{ method_field('PATCH') }}
            @csrf
            @include('race.runnerFormRegister')
          </div>
        </div>
      </div>
    </div>
@endif
@endsection
