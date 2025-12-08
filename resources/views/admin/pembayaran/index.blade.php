@extends('admin.layouts.master')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-bold mb-4">Data Pembayaran</h1>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="bg-green-500 text-white px-4 py-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg p-5">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">Nama User</th>
                    <th class="p-3 border">Kelas</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pembayaran as $item)
                <tr>
                    <td class="p-3 border">{{ $loop->iteration }}</td>
                    <td class="p-3 border">{{ $item->user->name ?? '-' }}</td>
                    <td class="p-3 border">{{ $item->kelas ?? '-' }}</td>
                    <td class="p-3 border">
                        @if($item->status == 'pending')
                            <span class="px-2 py-1 text-xs bg-yellow-400 text-white rounded">Pending</span>
                        @elseif($item->status == 'diterima')
                            <span class="px-2 py-1 text-xs bg-green-600 text-white rounded">Diterima</span>
                        @else
                            <span class="px-2 py-1 text-xs bg-red-600 text-white rounded">Ditolak</span>
                        @endif
                    </td>

                    <td class="p-3 border text-center flex gap-2 justify-center">
                        <!-- ACC Button -->
                        <form action="{{ route('admin.pembayaran.acc', $item->id) }}" method="POST">
                            @csrf
                            <button class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">
                                ACC
                            </button>
                        </form>

                        <!-- Tolak Button -->
                        <form action="{{ route('admin.pembayaran.tolak', $item->id) }}" method="POST">
                            @csrf
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Tolak
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center p-4 border text-gray-500">
                        Belum ada data pembayaran.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
