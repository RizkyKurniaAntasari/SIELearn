@extends('master.layout')


@section('content')
<div class="container mt-4">
<h2>Data Tugas</h2>
<a href="{{ route('tugas.create') }}" class="btn btn-primary mb-3">Tambah Tugas</a>


@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif


<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>File</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($tugas as $t)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $t->judul }}</td>
<td>{{ Str::limit($t->deskripsi, 50) }}</td>
<td>
@if($t->file)
<a href="{{ asset('storage/tugas/'.$t->file) }}" target="_blank">Lihat File</a>
@else
-
@endif
</td>
<td>
<a href="{{ route('tugas.show', $t->id) }}" class="btn btn-info btn-sm">Show</a>
<a href="{{ route('tugas.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('tugas.destroy', $t->id) }}" method="POST" class="d-inline">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm" onclick="return confirm('Hapus tugas?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection