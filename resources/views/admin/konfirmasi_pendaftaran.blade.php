@extends('layouts.admin_app')

@section('main-content')
<h1 class="text-2xl font-semibold mb-4">Konfirmasi Pendaftaran Kelas</h1>
<p class="text-gray-600 mb-6">Tinjau pengajuan pendaftaran kelas dari mahasiswa dan setujui atau tolak.</p>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h3 class="font-semibold text-lg mb-4">Daftar Pengajuan (Pending)</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mahasiswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas Diajukan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tipe</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Paket</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Bukti Bayar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Rizky Kurnia Antasari</td>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold">Advanced Data Science</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Premium</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">Paket 2 (120 Menit)</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-600 hover:underline text-sm">Lihat Bukti</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                        <button onclick="openApproveModal('Rizky Kurnia Antasari', 'Advanced Data Science (Premium)', '103')" class="px-3 py-1 bg-green-600 text-white rounded-md hover:bg-green-700">
                            Approve
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700">Reject</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Aulia Dwi Husnawati</td>
                    <td class="px-6 py-4 whitespace-nowrap font-semibold">Pemrograman Web Lanjut</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Regular</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500 italic">N/A</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500 italic">N/A</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                         <button onclick="openApproveModal('Aulia Dwi Husnawati', 'Pemrograman Web Lanjut (Regular)', '101')" class="px-3 py-1 bg-green-600 text-white rounded-md hover:bg-green-700">
                            Approve
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700">Reject</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection


@section('modal')
<div id="approveModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 hidden z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg">
        
        <h3 class="text-lg font-semibold mb-2">Setujui Pendaftaran & Tentukan Dosen</h3>
        
        <div class="mb-4 bg-gray-50 p-3 rounded-md border">
            <p class="text-sm">Mahasiswa: <strong id="modal_acc_nama" class="block text-base"></strong></p>
            <p class="text-sm mt-2">Kelas: <strong id="modal_acc_kelas" class="block text-base"></strong></p>
        </div>

        <form action="#" method="POST">
            @csrf
            <input type="hidden" id="modal_acc_id_kelas" name="id_kelas">
            <input type="hidden" id="modal_acc_id_mahasiswa" name="id_mahasiswa">
            <div class="space-y-4">
                <div>
                    <label for="pilih_dosen" class="block text-sm font-medium text-gray-700">Tentukan Dosen Pengampu <span class="text-red-600">*</span></label>
                    <select id="pilih_dosen" name="id_dosen" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="" disabled selected>Pilih Dosen...</option>
                        <option value="dosen1">M. Iqbal Parabi, S.SI., M.T.</option>
                        <option value="dosen2">Muhammad Ikhsan, S.Kom., M.Cs.</option>
                        <option value="dosen3">Dosen Premium 1</option>
                    </select>
                </div>
                
                <div>
                    <label for="link_gmeet" class="block text-sm font-medium text-gray-700">Link Google Meet (Opsional)</label>
                    <input type="text" id="link_gmeet" name="link_gmeet" placeholder="https://meet.google.com/xyz-abc-def"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeApproveModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-md shadow-md hover:bg-green-700">
                    ACC Pendaftaran
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const approveModal = document.getElementById('approveModal');
    const modalNama = document.getElementById('modal_acc_nama');
    const modalKelas = document.getElementById('modal_acc_kelas');
    const modalIdKelas = document.getElementById('modal_acc_id_kelas');
    const selectDosen = document.getElementById('pilih_dosen');

    function openApproveModal(nama, kelas, idKelas) {
        modalNama.textContent = nama;
        modalKelas.textContent = kelas;
        modalIdKelas.value = idKelas;
        // Reset form
        selectDosen.value = "";
        document.getElementById('link_gmeet').value = "";
        
        approveModal.classList.remove('hidden');
    }

    function closeApproveModal() {
        approveModal.classList.add('hidden');
    }
</script>
@endsection