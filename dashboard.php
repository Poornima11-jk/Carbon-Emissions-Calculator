<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Your CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>

<h1 class="project-title">Carbon Emissions Calculator</h1>

<div class="center-box">
    
<div class="card p-4 shadow text-center" style="width:350px; border-radius:15px;">

<h3 class="mb-3">🌿 Carbon Calculator</h3>

<!-- FORM START -->
<form action="calculate.php" method="post">

<input type="number" step="any" class="form-control mb-2" name="transport" placeholder="Transport (km)" required>

<input type="number" step="any" class="form-control mb-2" name="electricity" placeholder="Electricity (kWh)" required>

<input type="number" step="any" class="form-control mb-2" name="fuel" placeholder="Fuel (liters)" required>

<button type="submit" class="btn btn-success w-100">Calculate</button>

</form>
<!-- FORM END -->

<br>

<a href="history.php">
<button class="btn btn-primary w-100 mb-2">View History</button>
</a>

<a href="logout.php">
<button class="btn btn-danger w-100">Logout</button>
</a>

</div>
</div>

</body>
</html>