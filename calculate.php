<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include __DIR__ . '/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

// CHECK FORM DATA
if(isset($_POST['transport'], $_POST['electricity'], $_POST['fuel'])){

    $t = $_POST['transport'];
    $e = $_POST['electricity'];
    $f = $_POST['fuel'];

    // CALCULATION
    $total = ($t * 0.21) + ($e * 0.5) + ($f * 2.3);

    // INSERT INTO DATABASE
    $sql = "INSERT INTO emissions(user_id, transport, electricity, fuel, total)
            VALUES('{$_SESSION['user_id']}', '$t', '$e', '$f', '$total')";

    if(!$conn->query($sql)){
        die("Database Error: " . $conn->error);
    }

} else {
    die("Form data not received!");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<h1 class="project-title">Carbon Emissions Calculator</h1>

<div class="center-box">
    
<div class="card p-4 shadow text-center" style="width:350px; border-radius:15px;">

<h2>🌍 Carbon Result</h2>

<h1 class="text-success"><?php echo $total; ?> kg CO₂</h1>

<a href="dashboard.php">
<button class="btn btn-primary w-100 mt-3">Back</button>
</a>

</div>
</div>

<!-- Carbon Tips -->
<div class="container mt-4">
<?php include 'tips.php'; ?>
</div>

</body>
</html>