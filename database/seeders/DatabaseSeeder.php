<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Gunakan Faker bahasa Indonesia
        $faker = Faker::create('id_ID');

        // Nonaktifkan foreign key checks (versi PostgreSQL)
        DB::statement("SET session_replication_role = 'replica';");

        // Bersihkan tabel sebelum seeding
        DB::table('absensi')->truncate();
        DB::table('submission')->truncate();
        DB::table('tugas')->truncate();
        DB::table('materi')->truncate();
        DB::table('enrollment')->truncate();
        DB::table('kelas')->truncate();
        DB::table('mata_kuliah')->truncate();
        DB::table('dosen')->truncate();
        DB::table('mahasiswa')->truncate();

        // Aktifkan kembali foreign key checks (versi PostgreSQL)
        DB::statement("SET session_replication_role = 'origin';");

        // --- 1. Seed Dosen ---
        $dosenIds = [];
        for ($i = 0; $i < 5; $i++) {
            $dosenIds[] = DB::table('dosen')->insertGetId([
                'nim' => $faker->unique()->numerify('195#######'), // Anggap 'nim' di dosen adalah NIDN/NIP
                'nama' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password'), // Password default: 'password'
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        $this->command->info('Tabel Dosen telah di-seed.');

        // --- 2. Seed Mahasiswa ---
        $mahasiswaIds = [];
        for ($i = 0; $i < 50; $i++) {
            $mahasiswaIds[] = DB::table('mahasiswa')->insertGetId([
                'nama' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        $this->command->info('Tabel Mahasiswa telah di-seed.');

        // --- 3. Seed Mata Kuliah ---
        $matakuliahIds = [];
        $matakuliahData = [
            ['kode' => 'IF101', 'nama' => 'Dasar Pemrograman', 'sks' => 4],
            ['kode' => 'IF102', 'nama' => 'Struktur Data', 'sks' => 3],
            ['kode' => 'IF103', 'nama' => 'Basis Data', 'sks' => 3],
            ['kode' => 'IF104', 'nama' => 'Jaringan Komputer', 'sks' => 3],
            ['kode' => 'UM101', 'nama' => 'Pancasila', 'sks' => 2],
        ];

        foreach ($matakuliahData as $mk) {
            $matakuliahIds[] = DB::table('mata_kuliah')->insertGetId([
                'kode_mk' => $mk['kode'],
                'nama' => $mk['nama'],
                'sks' => $mk['sks'],
                'id_dosen' => $faker->randomElement($dosenIds), // Ambil ID Dosen secara acak
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        $this->command->info('Tabel Mata Kuliah telah di-seed.');

        // --- 4. Seed Kelas ---
        $kelasIds = [];
        foreach ($matakuliahIds as $matakuliahId) {
            // Buat 2 kelas (misal: A dan B) untuk setiap mata kuliah
            for ($i = 0; $i < 2; $i++) {
                $kelasIds[] = DB::table('kelas')->insertGetId([
                    'nama_kelas' => 'Kelas ' . chr(65 + $i), // Kelas A, Kelas B
                    'semester' => $faker->numberBetween(1, 8),
                    'id_matakuliah' => $matakuliahId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        $this->command->info('Tabel Kelas telah di-seed.');

        // --- 5. Seed Enrollment (Hubungkan Mahasiswa dengan Kelas) ---
        $enrollments = []; // Simpan pasangan [mahasiswa, kelas] untuk seeder berikutnya
        foreach ($mahasiswaIds as $mahasiswaId) {
            // Setiap mahasiswa mengambil 3 kelas acak
            $randomKelasIds = $faker->randomElements($kelasIds, 3);
            foreach ($randomKelasIds as $kelasId) {
                DB::table('enrollment')->insert([
                    'id_mahasiswa' => $mahasiswaId,
                    'id_kelas' => $kelasId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                // Simpan data ini untuk membuat absensi & submission yang valid
                $enrollments[] = ['id_mahasiswa' => $mahasiswaId, 'id_kelas' => $kelasId];
            }
        }
        $this->command->info('Tabel Enrollment telah di-seed.');


        // --- 6. Seed Materi & Tugas ---
        $tugasPerKelas = []; // Simpan tugas untuk setiap kelas
        foreach ($kelasIds as $kelasId) {
            // Buat 3 materi per kelas
            for ($i = 0; $i < 3; $i++) {
                DB::table('materi')->insert([
                    'judul' => 'Materi ' . ($i + 1) . ': ' . $faker->sentence(3),
                    'deskripsi' => $faker->paragraph(),
                    'file_url' => $faker->url() . '/file.pdf',
                    'id_kelas' => $kelasId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            // Buat 2 tugas per kelas
            for ($i = 0; $i < 2; $i++) {
                $tugasId = DB::table('tugas')->insertGetId([
                    'judul' => 'Tugas ' . ($i + 1) . ': ' . $faker->sentence(4),
                    'deskripsi' => $faker->paragraph(),
                    'deadline' => Carbon::now()->addDays($faker->numberBetween(7, 30)),
                    'id_kelas' => $kelasId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                $tugasPerKelas[$kelasId][] = $tugasId; // Simpan ID tugas untuk kelas ini
            }
        }
        $this->command->info('Tabel Materi dan Tugas telah di-seed.');


        // --- 7. Seed Submission & Absensi (Berdasarkan data Enrollment) ---
        foreach ($enrollments as $enroll) {
            $mahasiswaId = $enroll['id_mahasiswa'];
            $kelasId = $enroll['id_kelas'];

            // 7a. Seed Submission (jika ada tugas di kelas tsb)
            if (isset($tugasPerKelas[$kelasId])) {
                foreach ($tugasPerKelas[$kelasId] as $tugasId) {
                    // 70% kemungkinan mahasiswa mengumpulkan tugas
                    if ($faker->boolean(70)) {
                        DB::table('submission')->insert([
                            'file_url' => $faker->url() . '/submission.zip',
                            'nilai' => $faker->numberBetween(65, 100),
                            'id_tugas' => $tugasId,
                            'id_mahasiswa' => $mahasiswaId,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
                    }
                }
            }

            // 7b. Seed Absensi (buat 5 data absensi per mahasiswa per kelas)
            $statuses = ['Hadir', 'Izin', 'Alfa'];
            for ($i = 0; $i < 5; $i++) {
                DB::table('absensi')->insert([
                    'tanggal' => Carbon::now()->subDays($i * 7), // 5 pertemuan terakhir (mingguan)
                    'status' => $faker->randomElement($statuses),
                    'id_kelas' => $kelasId,
                    'id_mahasiswa' => $mahasiswaId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        $this->command->info('Tabel Submission dan Absensi telah di-seed.');
        $this->command->info('Database seeding selesai!');
    }
}
