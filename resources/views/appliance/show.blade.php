@extends('layouts.app')

@section('template_title')
    {{ $appliance->name ?? 'Show Appliance' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Appliance</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appliances.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $appliance->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $appliance->description }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $appliance->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $appliance->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $appliance->stock }}
                        </div>
                        <div class="form-group">
                            <strong>File Path:</strong>
                            {{ $appliance->file_path }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
