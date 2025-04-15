@extends('layouts.app')

@section('title', 'Detail kategori')

@section('content')
<div class="container mt-4">
    <h1>Detail kategori</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $kategori->nama_kategori }}</h5>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $kategori->deskripsi }}</p>
            <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection