<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

    <div class="p-6">
        <h1 class="text-3xl font-semibold mb-6">Dashboard</h1>

        <!-- GRID KARTU -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <!-- Kartu 1 -->
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
                <h2 class="text-gray-600 text-lg">Total Mahasiswa</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalMahasiswa }}</p>
            </div>

            <!-- Kartu 2 -->
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-500">
                <h2 class="text-gray-600 text-lg">Total Dosen</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalDosen }}</p>
            </div>

            <!-- Kartu 3 -->
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-purple-500">
                <h2 class="text-gray-600 text-lg">Total Kelas</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalKelas }}</p>
            </div>
        </div>

        <!-- GRAFIK -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Grafik Aktivitas</h2>
            <canvas id="activityChart" height="100"></canvas>
        </div>
    </div>


<script>
    const ctx = document.getElementById('activityChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($chartLabels),
            datasets: [{
                label: 'Aktivitas Bulanan',
                data: @json($chartData),
                borderWidth: 3,
                tension: 0.4
            }]
        }
    });
</script>

</body>
</html>
