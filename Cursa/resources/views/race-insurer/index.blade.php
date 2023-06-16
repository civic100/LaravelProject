@extends('layouts.app')

@section('template_title')
    Race Insurer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Race Insurer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('race-insurers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Race Id</th>
										<th>Insurer Cif</th>
										<th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($raceInsurers as $raceInsurer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $raceInsurer->race_id }}</td>
											<td>{{ $raceInsurer->insurer_cif }}</td>
											<td>{{ $raceInsurer->price }}</td>

                                            <td>
                                                <form action="{{ route('race-insurers.destroy',$raceInsurer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('race-insurers.show',$raceInsurer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('race-insurers.edit',$raceInsurer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $raceInsurers->links() !!}
            </div>
        </div>
    </div>
@endsection
