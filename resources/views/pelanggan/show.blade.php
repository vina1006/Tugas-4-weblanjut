@extends('layouts.app')

@section('title', 'Detail pelanggan')

@section('content')
<div class="container mt-4">
    <h1>Detail pelanggan</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pelanggan->nama_lengkap }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $pelanggan->email }}</p>
            <p class="card-text"><strong>Telepon:</strong> {{ $pelanggan->telepon }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
            <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection