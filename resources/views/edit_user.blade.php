@extends('layouts.app')

@section('content')
<div class='container py-4'>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0">Buat Pengguna Baru</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <!-- Nama Lengkap -->
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- NPM / NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label fw-semibold">NPM / NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" required>
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Pilihan Kelas (Dropdown dari Database) -->
                        <div class="mb-3">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}" {{ old('kelas_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ url('/user') }}" class="btn btn-secondary px-4 rounded-pill">Kembali</a>
                            <button type="submit" class="btn btn-success px-4 rounded-pill shadow-sm">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection