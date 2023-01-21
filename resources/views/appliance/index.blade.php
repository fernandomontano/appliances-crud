@extends('layouts.app')

@section('template_title')
    Appliance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Appliance') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appliances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Description</th>
										<th>Brand</th>
										<th>Price</th>
										<th>Stock</th>
										<th>File Path</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appliances as $appliance)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appliance->name }}</td>
											<td>{{ $appliance->description }}</td>
											<td>{{ $appliance->brand }}</td>
											<td>{{ $appliance->price }}</td>
											<td>{{ $appliance->stock }}</td>
											<td>{{ $appliance->file_path }}</td>

                                            <td>
                                                <form action="{{ route('appliances.destroy',$appliance->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appliances.show',$appliance->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appliances.edit',$appliance->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $appliances->links() !!}
            </div>
        </div>
    </div>
@endsection
