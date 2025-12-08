@extends('master.layout')


@section('content')
<div class="container mt-4">
<h2>Detail Tugas</h2>


<div class="card p-3">
<p><strong>Judul:</strong> {{ $tugas->judul }}</p>
<p><strong>Deskripsi:</strong> {{ $tugas->deskripsi }}</p>


<p><strong>File:</strong><br>
@if($tugas->file)
<a href="{{ asset('storage/tugas/'.$tugas->file) }}" target="_blank">Download / Lihat File</a>
@else
Tidak ada file
@endif
</p>


<a href="{{ route('tugas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
</div>
@endsection