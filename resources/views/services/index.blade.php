@extends('layout')

@section('content')
    <h2 class="mb-4">Daftar Layanan</h2>
    @foreach($services as $service)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $service->service_name }}</h3>
                <p class="card-text">{{ $service->service_description }}</p>
            </div>
        </div>
    @endforeach
@endsection
