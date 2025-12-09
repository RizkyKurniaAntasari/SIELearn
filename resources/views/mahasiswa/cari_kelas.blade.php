@extends('layouts.mahasiswa_app')

@section('main-content')
    {{-- HEADER --}}
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Katalog Kelas</h1>
        <p class="text-gray-500">Cari dan ajukan pendaftaran untuk kelas yang Anda minati.</p>
    </div>

    {{-- GRID KELAS --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- KARTU 1: REGULAR (Ungu) --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col hover:shadow-md transition-shadow duration-300">
            <div class="p-6 flex-1">
                <div class="flex items-start justify-between">
                    <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-purple-100 text-purple-700">
                        Regular
                    </span>
                    {{-- Ikon opsional untuk visual --}}
                    <svg class="w-6 h-6 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mt-4 mb-2">Pemrograman Web Lanjut</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Mempelajari framework Laravel, ERD, dan Migrations. </p>
                <p class="text-gray-400 text-xs mt-2 pt-2 border-t border-gray-50">(Dosen: M. Iqbal Parabi, S.SI., M.T.)</p>
            </div>
            <div class="p-4 bg-gray-50/50 border-t border-gray-100">
                <button onclick="openEnrollModal('Pemrograman Web Lanjut', 'regular')" class="w-full px-4 py-2.5 bg-purple-600 text-white font-semibold rounded-xl shadow-sm hover:bg-purple-700 transition focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-1">
                    Daftar Sekarang
                </button>
            </div>
        </div>

        {{-- KARTU 2: PREMIUM (Amber/Emas) --}}
        <div class="bg-white rounded-2xl shadow-sm border border-amber-200 overflow-hidden flex flex-col hover:shadow-md transition-shadow duration-300 relative">
            {{-- Badge Premium di pojok --}}
            <div class="absolute top-0 right-0 -mt-1 -mr-1 flex h-4 w-4">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-4 w-4 bg-amber-500"></span>
            </div>

            <div class="p-6 flex-1">
                 <div class="flex items-start justify-between">
                    <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-amber-100 text-amber-800 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        Premium
                    </span>
                    <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mt-4 mb-2">Advanced Data Science</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Kelas intensif mentoring personal (by request). Membahas Machine Learning dan AI.</p>
                 <p class="text-gray-400 text-xs mt-2 pt-2 border-t border-gray-50">(Dosen: Ditentukan Admin)</p>
            </div>
            <div class="p-4 bg-amber-50/50 border-t border-amber-100">
                <button onclick="openEnrollModal('Advanced Data Science', 'premium')" class="w-full px-4 py-2.5 bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold rounded-xl shadow-sm hover:from-amber-600 hover:to-amber-700 transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-1">
                    Daftar & Pilih Paket
                </button>
            </div>
        </div>
    </div>
@endsection


@section('modal')
{{-- MODAL DENGAN ANIMASI FADE-IN DIKIT --}}
<div id="enrollModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-black/30 backdrop-blur-sm transition-opacity" aria-hidden="true"></div>

    {{-- Modal Dialog --}}
    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg scale-95 opacity-0 transition-all duration-300" id="modalContent">
            
            {{-- Header Modal --}}
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-lg font-bold text-gray-900">Konfirmasi Pendaftaran</h3>
                {{-- Tombol Close X kecil --}}
                <button type="button" onclick="closeEnrollModal()" class="text-gray-400 hover:text-gray-500">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <div class="px-6 py-6">
                <div class="mb-6 bg-purple-50 p-4 rounded-xl border border-purple-100 flex items-start gap-3">
                     <svg class="w-6 h-6 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                     <div>
                        <p class="text-sm text-gray-600">Anda akan mengajukan pendaftaran untuk kelas:</p>
                        <strong id="modal_nama_kelas" class="text-lg text-purple-900"></strong>
                     </div>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    <input type="hidden" id="modal_tipe_kelas" name="tipe_kelas">
                    <input type="hidden" id="modal_id_kelas" name="id_kelas">

                    {{-- OPSI PREMIUM --}}
                    <div id="premium_options" class="space-y-5 hidden">
                        <div class="pt-4 border-t border-gray-100">
                            <label for="pilih_paket" class="block text-sm font-medium text-gray-700 mb-2">Pilih Paket Sesi <span class="text-red-500">*</span></label>
                            <select id="pilih_paket" name="id_paket" class="block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                                <option value="">-- Pilih Paket --</option>
                                <option value="pkt1">Paket 1 (50 Menit) - Rp 50.000</option>
                                <option value="pkt2">Paket 2 (120 Menit) - Rp 100.000</option>
                                <option value="pkt3">Paket Full (30 Hari) - Rp 250.000</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="bukti_bayar" class="block text-sm font-medium text-gray-700 mb-2">Upload Bukti Pembayaran <span class="text-red-500">*</span></label>
                            <input type="file" id="bukti_bayar" name="bukti_bayar" accept="image/*" 
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100 border border-gray-300 rounded-xl cursor-pointer bg-white focus:outline-none">
                            <p class="text-xs text-gray-500 mt-2 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                Transfer ke BLA 123456 a.n. SIELearn.
                            </p>
                        </div>
                    </div>
                    
                    {{-- TOMBOL AKSI MODAL --}}
                    <div class="mt-8 flex justify-end space-x-3 pt-4 border-t border-gray-100">
                        <button type="button" onclick="closeEnrollModal()" class="px-5 py-2.5 bg-white border border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition">
                            Batal
                        </button>
                        <button type="submit" class="px-5 py-2.5 bg-purple-600 text-white font-bold rounded-xl shadow-md hover:bg-purple-700 transition focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                            Ajukan Pendaftaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const enrollModal = document.getElementById('enrollModal');
    const modalContent = document.getElementById('modalContent');
    const modalNamaKelas = document.getElementById('modal_nama_kelas');
    const modalTipeKelas = document.getElementById('modal_tipe_kelas');
    const premiumOptions = document.getElementById('premium_options');
    const inputPaket = document.getElementById('pilih_paket');
    const inputBukti = document.getElementById('bukti_bayar');

    function openEnrollModal(namaKelas, tipe) {
        // Reset form saat dibuka
        inputPaket.value = "";
        inputBukti.value = "";

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
        
        // Tampilkan modal dengan animasi sederhana
        enrollModal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 50); // Delay sedikit biar transisi jalan
    }

    function closeEnrollModal() {
        // Sembunyikan dengan animasi
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        
        setTimeout(() => {
            enrollModal.classList.add('hidden');
        }, 200); // Tunggu transisi selesai baru hide parent
    }

    // Tutup modal kalau klik di luar area konten (backdrop)
    enrollModal.addEventListener('click', function(event) {
        if (event.target === enrollModal || event.target.classList.contains('backdrop-blur-sm')) {
            closeEnrollModal();
        }
    });
</script>
@endsection