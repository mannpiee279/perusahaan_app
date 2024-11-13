@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Perusahaan</h2>
    <div class="card p-4 shadow-sm">
        <form action="{{ route('companies.update', $companies->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $companies->name) }}" placeholder="Masukkan nama perusahaan">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Deskripsikan perusahaan">{{ old('description', $companies->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $companies->address) }}" placeholder="Masukkan alamat perusahaan">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $companies->phone) }}" placeholder="Masukkan nomor telepon">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $companies->email) }}" placeholder="Masukkan email perusahaan">
            </div>

            <div class="mb-3">
                <label for="services" class="form-label">Pilih Layanan</label>
                <select class="form-select" id="services" name="services[]">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->services_name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Pilih layanan yang disediakan perusahaan.</small>
            </div>

            <div class="mb-3">
                <label for="employees" class="form-label">Pilih Karyawan</label>
                <select class="form-select" id="employees" name="employee[]">
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Pilih karyawan yang bekerja di perusahaan ini.</small>
            </div>

            <button type="submit" class="btn btn-success">Perbarui</button>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
