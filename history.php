<?php
session_start();
include __DIR__ . '/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}

$res = $conn->query("SELECT * FROM emissions WHERE user_id='{$_SESSION['user_id']}'");

// STORE DATA FOR GRAPH
$transport = [];
$electricity = [];
$fuel = [];
$total = [];

while($row = $res->fetch_assoc()){
    $transport[] = $row['transport'];
    $electricity[] = $row['electricity'];
    $fuel[] = $row['fuel'];
    $total[] = $row['total'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>History</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/style.css">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<h1 class="project-title">Carbon Emissions Calculator</h1>

<div class="container mt-5">

<h2 class="text-center mb-4">📊 Emission History</h2>

<!-- GRAPH -->
<canvas id="myChart"></canvas>

<br><br>

<!-- TABLE -->
<table class="table table-bordered bg-white">
<tr>
<th>Transport</th>
<th>Electricity</th>
<th>Fuel</th>
<th>Total</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM emissions WHERE user_id='{$_SESSION['user_id']}'");
while($row = $res->fetch_assoc()){
?>
<tr>
<td><?php echo $row['transport']; ?></td>
<td><?php echo $row['electricity']; ?></td>
<td><?php echo $row['fuel']; ?></td>
<td><?php echo $row['total']; ?></td>
</tr>
<?php } ?>

</table>

<a href="dashboard.php">
<button class="btn btn-primary">Back</button>
</a>

</div>

<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Transport', 'Electricity', 'Fuel', 'Total'],
        datasets: [{
            label: 'Carbon Data',
            data: [
                <?php echo array_sum($transport); ?>,
                <?php echo array_sum($electricity); ?>,
                <?php echo array_sum($fuel); ?>,
                <?php echo array_sum($total); ?>
            ],
            borderWidth: 1
        }]
    }
});
</script>

</body>
</html>