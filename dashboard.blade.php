
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Dashboard Grafik Stok</h2>
    <canvas id="stokChart"></canvas>

    <script>
    const ctx = document.getElementById('stokChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laptop', 'Printer', 'Mouse'],
            datasets: [{
                label: 'Jumlah Stok',
                data: [20, 10, 35]
            }]
        }
    });
    </script>
</body>
</html>
