@extends('layouts.app')

@section('template_title')
    Race
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Race') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('races.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
										<th>Description</th>
										<th>Ramp</th>
										<th>Max Participants</th>
                                        <th>Race Price</th>
										<th>Km</th>
										<th>Date</th>
										<th>Hour</th>
										<th>Starting Point</th>
										<th>Maps Image</th>
										<th>Promotional Poster</th>
                                        <th>Sponsor Price</th>
										<th>Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($races as $race)
                                        <tr>
                                            <td>{{ $race->id }}</td>
                                            <td>{{ $race->name }}</td>
											<td>{{ substr($race->description, 0, 20)."..." }} </td>
											<td>{{ $race->ramp }}</td>
											<td>{{ $race->max_participants }}</td>
                                            <td>{{ $race->race_price }}</td>
											<td>{{ $race->km }}</td>
											<td>{{ $race->date }}</td>
											<td>{{ $race->hour }}</td>
											<td>{{ $race->starting_point }}</td>
											<td><img src="/mapsImages/{{ $race->maps_image }}" width="100px"></td>
											<td><img src="/promotionalPosters/{{ $race->promotional_poster }}" width="100px"></td>
											<td>{{ $race->sponsor_price }}</td>
											<td>{{ $race->active }}</td>

                                            <td>
                                                <form action="{{ route('races.destroy',$race->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('races.show',$race->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('races.edit',$race->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    @if ( $race->active == 1)
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Deactivate</button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger btn-sm button-avtice-color"><i class="fa fa-fw fa-trash"></i> Active</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                {!! $races->links() !!}
            </div>
        </div>
    </div>
@endsection
