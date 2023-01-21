@extends('layouts.app')

@section('template_title')
    Create Appliance
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Appliance</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('appliances.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('appliance.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
