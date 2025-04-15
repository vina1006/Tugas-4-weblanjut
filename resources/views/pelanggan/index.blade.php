@extends('layouts.app')

@section('title', 'Daftar pelanggan')

@section('content')
<div class="container mt-4">
    <div class="d-flex align-items-center mb-4">
        <i class="fas fa-users fa-2x me-3"></i>
        <h1 class="mb-0">Daftar Pelanggan</h1>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah pelanggan</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $key => $pelanggan)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $pelanggan->nama_lengkap }}</td>
                <td>{{ $pelanggan->email }}</td>
                <td>{{ $pelanggan->telepon }}</td>
                <td>{{ $pelanggan->alamat }}</td>
                <td>
                    <a href="{{ route('pelanggan.show', $pelanggan->id) }}" class="btn btn-info btn-sm" title="Lihat">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus?')"
                                title="Hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection