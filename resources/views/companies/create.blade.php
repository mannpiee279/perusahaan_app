@extends('layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Perusahaan Baru</h2>
    <div class="card p-4 shadow-sm">
        <form action="{{ route('companies.tambah') }}" method="POST">
            @csrf

            <!-- Field Nama Perusahaan -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama perusahaan">
            </div>

            <!-- Field Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Deskripsikan perusahaan">{{ old('description') }}</textarea>
            </div>

            <!-- Field Alamat -->
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Masukkan alamat perusahaan">
            </div>

            <!-- Field Telepon -->
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon">
            </div>

            <!-- Field Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email perusahaan">
            </div>

            <!-- Select Layanan -->
            <div class="mb-3">
                <label for="services" class="form-label">Pilih Layanan</label>
                <select class="form-select" id="services" name="services[]">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Pilih layanan yang disediakan perusahaan.</small>
            </div>

            <!-- Select Karyawan -->
            <div class="mb-3">
                <label for="employees" class="form-label">Pilih Karyawan</label>
                <select class="form-select" id="employees" name="employees[]">
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Pilih karyawan yang bekerja di perusahaan ini.</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
