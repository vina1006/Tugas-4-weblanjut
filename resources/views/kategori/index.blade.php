@extends('layouts.app')

@section('title', 'Daftar kategori')

@section('content')
<div class="container mt-4">
    <div class="d-flex align-items-center mb-4">
        <i class="fas fa-tags fa-2x me-3"></i>
        <h1 class="mb-0">Daftar kategori</h1>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah kategori</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Nama Kategori</th>
                    <th width="50%">Deskripsi</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $key => $kategori)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td class="text-wrap">{{ $kategori->deskripsi }}</td>
                    <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('kategori.show', $kategori->id) }}" class="btn btn-info btn-sm" title="Lihat">
                            <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')"
                                    title="Hapus">
                                <i class="fas fa-trash-alt"></i>
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
@endsection