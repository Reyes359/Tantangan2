@extends('layouts.app')
@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Jurusan</h1>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card">
    <div class="card-body p-0">
      <table class="table mb-0">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
     
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse($jurusans as $i => $jurusan)
          <tr>
            <th scope="row">{{ $i + 1 }}</th>
            <td>{{ $jurusan->nama_jurusan }}</td>
 
            <td>
              <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-sm btn-warning">Edit</a>

              <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus jurusan ini?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="4" class="text-center">Belum ada data jurusan.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
