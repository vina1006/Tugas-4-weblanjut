@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Barang</h1>
    
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
                <th>Kategori_barang</th>
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
                    <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection