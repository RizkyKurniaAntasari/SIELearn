@extends('layouts.admin_app')

@section('main-content')
<h1 class="text-2xl font-semibold mb-4">Riwayat Pembayaran</h1>
<p class="text-gray-600 mb-6">Melihat seluruh riwayat transaksi pembayaran dari pendaftaran kelas premium.</p>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h3 class="font-semibold text-lg mb-4">Seluruh Riwayat Transaksi</h3>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID Transaksi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mahasiswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Paket</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">PAY-001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">08 Nov 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rizky Kurnia Antasari</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Advanced Data Science</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Paket 2 (120 Menit)</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Approved
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="showDetailModal(
                                    'PAY-001',
                                    '08 Nov 2025',
                                    'Rizky Kurnia Antasari (23570510XX)',
                                    'Advanced Data Science',
                                    'Paket 2 (120 Menit)',
                                    'Approved',
                                    'https://i.imgur.com/example-proof.jpg'
                                )" 
                                class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Detail
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">PAY-002</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">07 Nov 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Wiranti Oktaviani Tanwin</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">UI/UX Intensive</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Paket Full (30 Hari)</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Rejected
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="showDetailModal(
                                    'PAY-002',
                                    '07 Nov 2025',
                                    'Wiranti Oktaviani Tanwin (2317051088)',
                                    'UI/UX Intensive',
                                    'Paket Full (30 Hari)',
                                    'Rejected',
                                    'https://i.imgur.com/another-example.png'
                                )" 
                                class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Detail
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">PAY-003</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">09 Nov 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Aulia Dwi Husnawati</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">PemWeb Lanjut (Premium)</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">Paket 1 (50 Menit)</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="showDetailModal(
                                    'PAY-003',
                                    '09 Nov 2025',
                                    'Aulia Dwi Husnawati (2317051003)',
                                    'PemWeb Lanjut (Premium)',
                                    'Paket 1 (50 Menit)',
                                    'Pending',
                                    'https://i.imgur.com/pending-proof.jpg'
                                )" 
                                class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Detail
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection


@section('modal')
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 hidden z-50">
    
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-3xl relative">
        <button onclick="closeDetailModal()" class="absolute -top-3 -right-3 bg-red-600 text-white h-8 w-8 rounded-full shadow-lg">
            &times;
        </button>
        
        <h3 class="text-xl font-semibold mb-4">Detail Riwayat Pembayaran</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-gray-500">ID Transaksi</label>
                    <p id="modal_id" class="text-sm font-semibold text-gray-900"></p>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">Tanggal</label>
                    <p id="modal_tanggal" class="text-sm text-gray-900"></p>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">Mahasiswa</label>
                    <p id="modal_mahasiswa" class="text-sm text-gray-900"></p>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">Kelas</label>
                    <p id="modal_kelas" class="text-sm text-gray-900"></p>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">Paket</label>
                    <p id="modal_paket" class="text-sm text-gray-900"></p>
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500">Status</label>
                    <p id="modal_status_text" class="text-sm font-bold"></p>
                </div>
            </div>

            <div>
                <h4 class="text-sm font-medium text-gray-700 mb-2">Bukti Pembayaran</h4>
                <div class="border rounded-md overflow-hidden bg-gray-50">
                    <img id="modal_proof_image" src="" alt="Bukti Pembayaran" class="w-full h-auto object-contain max-h-[40vh]">
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button onclick="closeDetailModal()" class="px-5 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">
                Tutup
            </button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('detailModal');
    
    // Ambil semua elemen 'p' untuk detail
    const modalId = document.getElementById('modal_id');
    const modalTanggal = document.getElementById('modal_tanggal');
    const modalMahasiswa = document.getElementById('modal_mahasiswa');
    const modalKelas = document.getElementById('modal_kelas');
    const modalPaket = document.getElementById('modal_paket');
    const modalStatusText = document.getElementById('modal_status_text');
    const modalProofImage = document.getElementById('modal_proof_image');

    function showDetailModal(id, tanggal, mahasiswa, kelas, paket, status, proofUrl) {
        // Isi data ke modal
        modalId.textContent = id;
        modalTanggal.textContent = tanggal;
        modalMahasiswa.textContent = mahasiswa;
        modalKelas.textContent = kelas;
        modalPaket.textContent = paket;
        modalStatusText.textContent = status;
        
        // Atur warna status
        modalStatusText.className = 'text-sm font-bold'; // Reset class
        if (status === 'Approved') {
            modalStatusText.classList.add('text-green-600');
        } else if (status === 'Rejected') {
            modalStatusText.classList.add('text-red-600');
        } else {
            modalStatusText.classList.add('text-yellow-600');
        }
        
        // Set gambar
        modalProofImage.src = proofUrl; 
        
        // Tampilkan modal
        modal.classList.remove('hidden');
    }

    function closeDetailModal() {
        modal.classList.add('hidden');
        // Kosongkan src saat ditutup
        modalProofImage.src = ""; 
    }
</script>
@endsection