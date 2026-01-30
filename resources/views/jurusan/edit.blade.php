@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>Edit Jurusan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" required>
                </div>

                

                <button class="btn btn-primary">Perbarui</button>
                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <h2>Edit Jurusan</h2>

    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" 
                   id="nama_jurusan" name="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" required>
            @error('nama_jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskr</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                      id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
