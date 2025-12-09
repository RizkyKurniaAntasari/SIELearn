@extends('admin.layouts.master')

@section('content')

<style>
    .card-stat {
        padding: 20px;
        border-radius: 15px;
        color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: 0.2s;
    }
    .card-stat:hover {
        transform: translateY(-4px);
    }
</style>

<div class="p-4">

    <h2 class="text-2xl font-bold mb-4">Dasbor</h2>

    <!-- ===================== CARD STAT ===================== -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="card-stat" style="background:#1E3A8A;">
            <h4 class="text-lg">Mahasiswa</h4>
            <p class="text-3xl font-bold">{{ $mahasiswa }}</p>
        </div>

        <div class="card-stat" style="background:#059669;">
            <h4 class="text-lg">Dosen</h4>
            <p class="text-3xl font-bold">{{ $dosen }}</p>
        </div>

        <div class="card-stat" style="background:#7C3AED;">
            <h4 class="text-lg">Kelas</h4>
            <p class="text-3xl font-bold">{{ $kelas }}</p>
        </div>

        <div class="card-stat" style="background:#EA580C;">
            <h4 class="text-lg">Materi</h4>
            <p class="text-3xl font-bold">{{ $materi }}</p>
        </div>
    </div>

    <!-- ===================== GRAFIK + AKTIVITAS ===================== -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- GRAFIK PEMBAYARAN -->
        <div class="bg-white p-4 rounded-xl shadow h-64">
            <h4 class="text-xl font-semibold mb-2">Grafik Pembayaran Bulanan</h4>
            <canvas id="chartPembayaran"></canvas>
        </div>

        <!-- AKTIVITAS MATERI -->
        <div class="bg-white p-4 rounded-xl shadow">
            <h4 class="text-xl font-semibold mb-2">Aktivitas Materi Terbaru</h4>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Judul</th>
                        <th class="py-2">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($materiTerbaru as $m)
                        <tr class="border-b text-sm">
                            <td class="py-2">{{ $m->judul }}</td>
                            <td>{{ $m->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center py-3 text-gray-500">Belum ada materi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <!-- ===================== PENDAFTARAN PENDING ===================== -->
    <div class="bg-white p-4 mt-6 rounded-xl shadow">
        <h4 class="text-xl font-semibold mb-3">Pendaftaran Akun Tertunda</h4>

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-2">Nama</th>
                    <th class="py-2">Kelas</th>
                    <th class="py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pendaftaran as $p)
                    <tr class="border-b text-sm">
                        <td class="py-2">{{ $p->nama }}</td>
                        <td>{{ $p->kelas }}</td>
                        <td>
                            <span class="px-3 py-1 text-xs rounded bg-yellow-400">Menunggu</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-3 text-gray-500">Tidak ada pendaftaran yang menunggu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


    <!-- ===================== PEMBAYARAN TERBARU ===================== -->
    <div class="bg-white p-6 shadow rounded mt-6">
        <h3 class="text-lg font-bold mb-4">Pembayaran Terbaru</h3>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 text-left">Nama</th>
                        <th class="py-2 px-4 text-left">Kelas</th>
                        <th class="py-2 px-4 text-left">Nominal</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left">Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($pembayaranTerbaru as $p)
                        <tr class="border-t text-sm">
                            <td class="py-2 px-4">{{ $p->user->name ?? '-' }}</td>
                            <td class="py-2 px-4">{{ $p->kelas->nama_kelas ?? '-' }}</td>
                            <td class="py-2 px-4">Rp {{ number_format($p->nominal) }}</td>
                            <td class="py-2 px-4">
                                @if($p->status == 'diterima')
                                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm">Diterima</span>
                                @elseif($p->status == 'pending')
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">Pending</span>
                                @else
                                    <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-sm">Ditolak</span>
                                @endif
                            </td>
                            <td class="py-2 px-4">{{ $p->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-3 text-gray-500">
                                Belum ada pembayaran.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>

<!-- ===================== SCRIPT GRAFIK ===================== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // ========== GRAFIK PEMBAYARAN ==========
    const ctxPembayaran = document.getElementById('chartPembayaran').getContext('2d');

    new Chart(ctxPembayaran, {
        type: 'line',
        data: {
            labels: @json($bulan),
            datasets: [{
                label: "Total Pembayaran",
                data: @json($nominal),
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                backgroundColor: "rgba(59,130,246,0.2)",
                borderColor: "rgba(59,130,246,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(59,130,246,1)",
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

});
</script>

@endsection
