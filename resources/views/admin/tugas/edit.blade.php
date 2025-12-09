@extends('master.layout')


@section('content')
<div class="container mt-4">
<h2>Edit Tugas</h2>


<form action="{{ route('tugas.update', $tugas->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')


<div class="mb-3">
<label class="form-label">Judul</label>
<input type="text" name="judul" value="{{ $tugas->judul }}" class="form-control" required>
</div>


<div class="mb-3">
<label class="form-label">Deskripsi</label>
<textarea name="deskripsi" class="form-control" rows="4" required>{{ $tugas->deskripsi }}</textarea>
</div>


<div class="mb-3">
<label class="form-label">File Lama</label><br>
@if($tugas->file)
<a href="{{ asset('storage/tugas/'.$tugas->file) }}" target="_blank">Lihat File</a>
@else
Tidak ada file
@endif
</div>


<div class="mb-3">
<label class="form-label">Upload File Baru</label>
<input type="file" name="file" class="form-control">
</div>


<button type="submit" class="btn btn-primary">Update</button>
<a href="{{ route('tugas.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
@endsection