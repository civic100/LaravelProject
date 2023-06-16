@extends('layouts.app')

@section('template_title')
    {{ $race->name ?? 'Show Race' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Race</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('races.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2>Ranking Runners</h2>
                        <table class='table table-bordered'>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>QR</th>
                                <th>Dorsal</th>
                                <th>Time</th>
                                <th>Points</th>
                                <th>Insurer</th>

                            </tr>

                            @foreach ($runners as $runner)
                                <tr>
                                    <td>{{$runner->runner->dni}}</td>
                                    <td>{{$runner->runner->name}}</td>
                                    <td>{{$runner->runner->address}}</td>
                                    <td>{{$runner->runner->birth_date}}</td>
                                    <td><img src="/qrcodes/{{$runner->qr}}" /></td>
                                    <td>{{$runner->dorsal}}</td>
                                    <td>{{$runner->time}}</td>
                                    <td>{{$runner->points}}</td>
                                    @if(isset($runner->insurer->name))
                                        <td>{{$runner->insurer->name}}</td>
                                    @else
                                        <td>Federado</td>
                                    @endif

                                   
                                </tr>

                            @endforeach

                        </table>

                        <td> <a href="{{ route('generatePDF3',$id)}}" class="btn btn-primary">All Dorsals</a> </td>

                    </div>
                </div>
                @if($race->date < $dateDais)
                    @include('race.upload')
                @endif


            </div>
        </div>
    </section>
@endsection
