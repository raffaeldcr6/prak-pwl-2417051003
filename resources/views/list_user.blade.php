@extends('layouts.app')

@section('content')
<div class='container py-4'>
    <h1 class='mb-4 fw-bold text-primary'>Daftar Mahasiswa / User</h1>

    <!-- Notifikasi / Alert Sukses -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID (UUID)</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td><code>{{ $user->id }}</code></td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <!-- Tombol Edit Kreatif -->
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm text-white px-3 shadow-sm rounded-pill">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>

                                <!-- Tombol Hapus dengan Konfirmasi -->
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-3 shadow-sm rounded-pill" onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?')">
                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection