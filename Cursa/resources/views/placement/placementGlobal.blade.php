@extends('layouts.app')

@section('template_title')
    Race
@endsection

@section('content')
<h1 class="text-center">Ranking</h1>
<div class="card m-5">
    <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <tr>
                <th>Name</th>
                <th>Points</th>
            </tr>
            @foreach($ranking as $runner)
                <tr>
                    <td>{{$runner->name}}</td>
                    <td>{{$runner->points}}</td>
                </tr>
            @endforeach
          </table>
        </div>
    </div>
</div>
@endsection
