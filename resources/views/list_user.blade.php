@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0">Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
</div>

{{-- Memanggil Komponen Tabel Dinamis --}}
<x-user-table :users="$users" />
@endsection