@extends('layout')

@section('content')
    <h2 class="mb-4">Daftar Perusahaan</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-primary mb-4">Tambah Perusahaan</a>
    @foreach($companies as $index => $company)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $company->name }}</h3>
                <p class="card-text">{{ $company->description }}</p>
                <p class="d-inline-flex gap-1">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#detail{{ $index }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Detail
                    </a>

                    <div class="collapse" id="detail{{ $index }}">
                        <div class="card card-body">
                            <h5 class="mt-3">Layanan</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($company->services as $service)
                                    <li class="list-group-item">{{ $service->service_name }}</li>
                                @endforeach
                            </ul>
                            <h5 class="mt-3">Karyawan</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($company->employees as $employee)
                                    <li class="list-group-item">{{ $employee->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                      </div>
            </div>
        </div>
    @endforeach
@endsection
