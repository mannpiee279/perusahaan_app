@extends('layout')

@section('content')
    <h2 class="mb-4">Daftar Karyawan</h2>
    @foreach($employees as $employee)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $employee->name }}</h3>
                <p class="card-text">{{ $employee->position }}</p>
                <p class="card-text">{{ $employee->email }}</p>
            </div>
        </div>
    @endforeach
@endsection
