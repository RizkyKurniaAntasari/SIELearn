<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Tugas;
use App\Models\Absensi;
use App\Models\Nilai;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // ======================================================
        //  Statistik Utama
        // ======================================================
        $mahasiswa = User::where('role', 'mahasiswa')->count();
        $dosen     = User::where('role', 'dosen')->count();
        $kelas     = Kelas::count();
        $materi    = Materi::count();
        $tugas     = Tugas::count();
        $absensi   = Absensi::count();
        $nilai     = Nilai::count();

        // Total pembayaran diterima (untuk statistik)
        $totalPembayaran = Pembayaran::where('status', 'diterima')->sum('nominal');

        // Statistik jumlah pembayaran
        $jumlahPembayaran = Pembayaran::count();
        $pembayaranSukses = Pembayaran::where('status', 'diterima')->count();
        $pembayaranPending = Pembayaran::where('status', 'pending')->count();

        // ======================================================
        //  Grafik Pembayaran Bulanan
        // ======================================================
        $bulan = [];
        $nominal = [];

        for ($i = 1; $i <= 12; $i++) {
            $bulan[] = Carbon::create()->month($i)->translatedFormat('F');
            $nominal[] = Pembayaran::where('status', 'diterima')
                ->whereMonth('created_at', $i)
                ->sum('nominal');
        }

        // ======================================================
        //  Pembayaran Terbaru (FIX untuk tabel dashboard)
        // ======================================================
        $pembayaranTerbaru = Pembayaran::with(['user', 'kelas'])
            ->latest()
            ->take(5)
            ->get();

        // ======================================================
        //  Materi Terbaru
        // ======================================================
        $materiTerbaru = Materi::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // ======================================================
        //  Aktivitas Materi Chart
        // ======================================================
        $aktivitasData = Materi::select(
                DB::raw('MONTH(created_at) as bulan'),
                DB::raw('COUNT(id) as total')
            )
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $labelsAktivitas = $aktivitasData->pluck('bulan')->map(function ($bulan) {
            return date("M", mktime(0, 0, 0, $bulan, 1));
        });

        $jumlahAktivitas = $aktivitasData->pluck('total');

        // ======================================================
        //  Pendaftaran Pending
        // ======================================================
        $pendaftaran = Pendaftaran::where('status', 'pending')
            ->orderBy('created_at', 'asc')
            ->take(5)
            ->get();

        // ======================================================
        //  Kirim Semua Data ke View
        // ======================================================
        return view('admin.dashboard', [
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
            'kelas' => $kelas,
            'materi' => $materi,
            'tugas' => $tugas,
            'absensi' => $absensi,
            'nilai' => $nilai,

            'totalPembayaran' => $totalPembayaran,
            'jumlahPembayaran' => $jumlahPembayaran,
            'pembayaranSukses' => $pembayaranSukses,
            'pembayaranPending' => $pembayaranPending,

            'bulan' => $bulan,
            'nominal' => $nominal,

            'materiTerbaru' => $materiTerbaru,
            'pembayaranTerbaru' => $pembayaranTerbaru,

            'labelsAktivitas' => $labelsAktivitas,
            'jumlahAktivitas' => $jumlahAktivitas,

            'pendaftaran' => $pendaftaran,
        ]);
    }
}
