<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Jumlah keseluruhan Sample HPA</h6> <!-- Judul grafik -->
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> <!-- Ikon untuk dropdown -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div> <!-- Header dropdown -->
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div> <!-- Pemisah dalam dropdown -->
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas> <!-- Area chart untuk menampilkan grafik -->
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var chartData = <?= $chartData; ?>;  // Data dari PHP (sudah dalam JSON)

        console.log("Chart Data:", chartData); // Cek data di Console Browser

        if (!Array.isArray(chartData)) {
            console.error("Data chart tidak valid:", chartData);
            return;
        }

        // Mapping data ke dalam labels dan values
        var labels = chartData.map(data => {
            return data.bulan + " " + data.tahun; // Contoh: "Feb 2025"
        });

        var values = chartData.map(data => parseInt(data.total));

        // Inisialisasi Chart.js
        var ctx = document.getElementById("myAreaChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: "Jumlah Sample HPA",
                    data: values,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2
                }]
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 10, // Jarak nilai sumbu Y
                            suggestedMin: 0,
                            suggestedMax: 100
                        }
                    }
                }
            }
        });
    });
    </script>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Jumlah keseluruhan jenis pemeriksaan</h6> <!-- Judul grafik pie -->
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> <!-- Ikon untuk dropdown -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div> <!-- Header dropdown -->
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div> <!-- Pemisah dalam dropdown -->
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas> <!-- Pie chart untuk menampilkan jenis pemeriksaan -->
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> HPA <!-- Label untuk HPA -->
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> FNAB <!-- Label untuk FNAB -->
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Sitologi <!-- Label untuk Sitologi -->
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>