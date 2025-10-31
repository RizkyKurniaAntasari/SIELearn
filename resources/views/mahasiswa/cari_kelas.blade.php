@extends('layouts.mahasiswa_app')

@section('main-content')
<h1 class="text-2xl font-semibold mb-4">Katalog Kelas</h1>
<p class="text-gray-600 mb-6">Cari dan ajukan pendaftaran untuk kelas yang Anda minati.</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
        <div class="p-6 flex-1">
            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                Regular
            </span>
            <h3 class="text-xl font-semibold mt-3 mb-2">Pemrograman Web Lanjut</h3>
            <p class="text-gray-600 text-sm">Mempelajari framework Laravel, ERD, dan Migrations. (Dosen: M. Iqbal Parabi, S.SI., M.T.)</p>
        </div>
        <div class="bg-gray-50 p-4">
            <button onclick="openEnrollModal('Pemrograman Web Lanjut', 'regular')" class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                Daftar Sekarang
            </button>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col border-2 border-yellow-500">
        <div class="p-6 flex-1">
            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                Premium
            </span>
            <h3 class="text-xl font-semibold mt-3 mb-2">Advanced Data Science</h3>
            <p class="text-gray-600 text-sm">Kelas intensif mentoring personal (by request). Membahas Machine Learning dan AI. (Dosen: Ditentukan Admin)</p>
        </div>
        <div class="bg-gray-50 p-4">
            <button onclick="openEnrollModal('Advanced Data Science', 'premium')" class="w-full px-4 py-2 bg-yellow-600 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-700">
                Daftar & Pilih Paket
            </button>
        </div>
    </div>
    
    </div>
@endsection


@section('modal')
<div id="enrollModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg">
        <h3 class="text-lg font-semibold mb-4">Konfirmasi Pendaftaran</h3>
        <p class="mb-4">Anda akan mengajukan pendaftaran untuk kelas: <br> <strong id="modal_nama_kelas" class="text-xl"></strong></p>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="modal_tipe_kelas" name="tipe_kelas">
            <input type="hidden" id="modal_id_kelas" name="id_kelas">

            <div id="premium_options" class="space-y-4 hidden">
                <div>
                    <label for="pilih_paket" class="block text-sm font-medium text-gray-700">Pilih Paket Sesi <span class="text-red-600">*</span></label>
                    <select id="pilih_paket" name="id_paket" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="pkt1">Paket 1 (50 Menit) - Rp 50.000</option>
                        <option value="pkt2">Paket 2 (120 Menit) - Rp 100.000</option>
                        <option value="pkt3">Paket Full (30 Hari) - Rp 250.000</option>
                    </select>
                </div>
                
                <div>
                    <label for="bukti_bayar" class="block text-sm font-medium text-gray-700">Upload Bukti Pembayaran <span class="text-red-600">*</span></label>
                    <input type="file" id="bukti_bayar" name="bukti_bayar" accept="image/*" class="w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    <p class="text-xs text-gray-500 mt-1">Silakan transfer ke BLA 123456 a.n. SIELearn.</p>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeEnrollModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700">
                    Ajukan Pendaftaran
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const enrollModal = document.getElementById('enrollModal');
    const modalNamaKelas = document.getElementById('modal_nama_kelas');
    const modalTipeKelas = document.getElementById('modal_tipe_kelas');
    const premiumOptions = document.getElementById('premium_options');
    const inputPaket = document.getElementById('pilih_paket');
    const inputBukti = document.getElementById('bukti_bayar');

    function openEnrollModal(namaKelas, tipe) {
        modalNamaKelas.textContent = namaKelas;
        modalTipeKelas.value = tipe;
        
        if (tipe === 'premium') {
            premiumOptions.classList.remove('hidden');
            inputPaket.required = true;
            inputBukti.required = true;
        } else {
            premiumOptions.classList.add('hidden');
            inputPaket.required = false;
            inputBukti.required = false;
        }
        
        enrollModal.classList.remove('hidden');
    }

    function closeEnrollModal() {
        enrollModal.classList.add('hidden');
    }
</script>
@endsection