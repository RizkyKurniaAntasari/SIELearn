@extends('layouts.mahasiswa_app')

@section('main-content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <div class="flex items-center gap-2 text-gray-500 text-sm mb-1">
                <a href="#" class="hover:text-blue-600 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali
                </a>
                <span>/</span>
                <span>Pemrograman Web Lanjut</span>
            </div>
            <h1 class="text-2xl font-bold text-gray-900">Diskusi Tugas 1</h1>
        </div>
        <div class="flex -space-x-2">
            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Iqbal+Parabi&background=random" alt="">
            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Khomarul&background=random" alt="">
            <span class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-white bg-gray-100 text-xs text-gray-500 font-medium">+3</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col h-[600px]">
        
        <div class="flex-1 p-6 space-y-6 overflow-y-auto bg-gray-50/50" id="chatContainer">
            
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3 relative">
                    <img class="h-10 w-10 rounded-full object-cover border border-gray-200" src="https://ui-avatars.com/api/?name=Iqbal+Parabi&background=bfdbfe&color=1e40af" alt="Avatar Dosen">
                    <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-400 ring-2 ring-white"></span>
                </div>
                <div class="max-w-[80%]">
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-sm font-bold text-gray-900">M. Iqbal Parabi</span>
                        <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-indigo-100 text-indigo-700">DOSEN</span>
                        <span class="text-xs text-gray-400">10:30 AM</span>
                    </div>
                    <div class="bg-white border border-indigo-100 p-4 rounded-2xl rounded-tl-none shadow-sm text-gray-800 leading-relaxed">
                        <p>Selamat pagi. Jika ada yang ingin ditanyakan mengenai Tugas 1, silakan sampaikan di sini.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-end">
                <div class="flex items-center gap-2 mb-1">
                     <span class="text-xs text-gray-400">10:32 AM</span>
                     </div>
                <div class="bg-blue-600 text-white p-4 rounded-2xl rounded-tr-none shadow-md max-w-[80%] leading-relaxed">
                    <p>Permisi, Pak. Untuk deadline-nya apakah benar tanggal 30 Oktober?</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=Khomarul+Hidayat&background=random" alt="Avatar Mhs">
                </div>
                <div class="max-w-[80%]">
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-sm font-semibold text-gray-900">Khomarul Hidayat</span>
                        <span class="text-xs text-gray-400">10:33 AM</span>
                    </div>
                    <div class="bg-white border border-gray-200 p-4 rounded-2xl rounded-tl-none shadow-sm text-gray-800 leading-relaxed">
                        <p>Izin bertanya, apakah boleh dikerjakan berkelompok?</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="border-t border-gray-100 p-4 bg-white z-10">
            <form action="#" method="POST" class="relative flex items-end gap-2">
                @csrf
                
                <button type="button" class="p-3 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full transition" title="Lampirkan File">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                </button>

                <div class="flex-1 bg-gray-50 border border-gray-200 rounded-xl px-4 py-2 focus-within:ring-2 focus-within:ring-blue-100 focus-within:border-blue-400 transition">
                    <textarea 
                        name="message" 
                        class="w-full bg-transparent border-none focus:ring-0 text-gray-800 placeholder-gray-400 resize-none py-2" 
                        rows="1" 
                        placeholder="Ketik pesan Anda..." 
                        style="min-height: 44px;"></textarea>
                </div>

                <button type="submit" class="p-3 bg-blue-600 text-white rounded-xl shadow-md hover:bg-blue-700 transition hover:scale-105 active:scale-95 flex items-center justify-center">
                    <svg class="w-6 h-6 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                </button>
            </form>
            <p class="text-xs text-gray-400 text-center mt-2">Tekan Enter untuk mengirim</p>
        </div>
    </div>
@endsection