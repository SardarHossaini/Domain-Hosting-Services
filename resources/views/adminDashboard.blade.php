@extends("layouts.adminLayout")
@section("admin")
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <h6 class="mb-0">Dashboard</h6>
        <div class="row">
            <div class="col-md-6">
                <canvas id="ordersChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="hostsChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // Orders Chart
    var ctx = document.getElementById('ordersChart').getContext('2d');
    var ordersChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Orders',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Hosts Chart
    var ctx2 = document.getElementById('hostsChart').getContext('2d');
    var hostsChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Hosts',
                data: [5, 10, 5, 2, 20, 30],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection