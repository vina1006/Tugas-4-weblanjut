@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="container mt-4">
    <div class="d-flex align-items-center mb-4">
        <i class="fas fa-box-open fa-2x me-3"></i>
        <h1 class="mb-0">Daftar Barang</h1>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $key => $barang)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kategori_barang }}</td>
                <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info btn-sm" title="Lihat">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline">
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