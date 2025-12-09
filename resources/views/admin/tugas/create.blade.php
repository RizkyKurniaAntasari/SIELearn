@extends('master.layout')


@section('content')
<div class="container mt-4">
<h2>Tambah Tugas</h2>


<form action="{{ route('tugas.store') }}" method="POST" enctype="multipart/form-data">
@csrf


<div class="mb-3">
<label class="form-label">Judul Tugas</label>
<input type="text" name="judul" class="form-control" required>
</div>


<div class="mb-3">
<label class="form-label">Deskripsi</label>
<textarea name="deskripsi" class="form-control" rows="4" required></textarea>
</div>


<div class="mb-3">
<label class="form-label">Upload File (optional)</label>
<input type="file" name="file" class="form-control">
</div>


<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('tugas.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
@endsection