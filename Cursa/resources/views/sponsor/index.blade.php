@extends('layouts.app')

@section('template_title')
    Sponsor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sponsor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sponsors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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


										<th>Cif</th>
										<th>Name</th>
										<th>Logo</th>
										<th>Address</th>
										<th>Email</th>
										<th>Home</th>
										<th>Total</th>
										<th>Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sponsors as $sponsor)
                                        <tr>


											<td>{{ $sponsor->cif }}</td>
											<td>{{ $sponsor->name }}</td>
											<td><img src="/logoImages/{{ $sponsor->logo }}" width="100px"></td>
											<td>{{ $sponsor->address }}</td>
											<td>{{ $sponsor->email }}</td>
											<td>{{ $sponsor->home }}</td>
											<td>{{ $sponsor->total }}</td>
											<td>{{ $sponsor->active }}</td>

                                            <td>
                                                <form action="{{ route('sponsors.destroy',$sponsor->cif) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sponsors.show',$sponsor->cif) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sponsors.edit',$sponsor->cif) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    @if ( $sponsor->active == 1)
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Deactivate</button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger btn-sm button-avtice-color"><i class="fa fa-fw fa-trash"></i> Active</button>
                                                    @endif

                                                    <a href="{{ route('generatePDF2',$sponsor->cif)}}" class="btn btn-primary">Invoice (PDF)</a>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sponsors->links() !!}
            </div>
        </div>
    </div>
@endsection
