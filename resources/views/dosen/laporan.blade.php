@extends('layouts.dosen_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Laporan Nilai & Aktivitas Mahasiswa</h1>

    <div class="mb-4">
        <label for="kelas" class="block text-sm font-medium text-gray-700">Pilih Kelas:</label>
        <select id="kelas" name="kelas" class="mt-1 block w-full max-w-xs pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
            <option>Pemrograman Web Lanjut A</option>
            <option>Pemrograman Web Lanjut B</option>
        </select>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NPM</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Mahasiswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kehadiran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tugas 1</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kuis 1</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai Rata-rata</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2317051003</td>
                    <td class="px-6 py-4 whitespace-nowrap">Aulia Dwi Husnawati</td>
                    <td class="px-6 py-4 whitespace-nowrap">100% (4/4)</td>
                    <td class="px-6 py-4 whitespace-nowrap">95</td>
                    <td class="px-6 py-4 whitespace-nowrap">90</td>
                    <td class="px-6 py-4 whitespace-nowrap font-bold">92.5</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2317051029</td>
                    <td class="px-6 py-4 whitespace-nowrap">Khomarul Hidayat</td>
                    <td class="px-6 py-4 whitespace-nowrap">75% (3/4)</td>
                    <td class="px-6 py-4 whitespace-nowrap">80</td>
                    <td class="px-6 py-4 whitespace-nowrap">85</td>
                    <td class="px-6 py-4 whitespace-nowrap font-bold">82.5</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2317051088</td>
                    <td class="px-6 py-4 whitespace-nowrap">Wiranti Oktaviani Tanwin</td>
                    <td class="px-6 py-4 whitespace-nowrap">100% (4/4)</td>
                    <td class="px-6 py-4 whitespace-nowrap">90</td>
                    <td class="px-6 py-4 whitespace-nowrap">90</td>
                    <td class="px-6 py-4 whitespace-nowrap font-bold">90.0</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection