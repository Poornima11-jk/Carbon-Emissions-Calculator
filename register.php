<?php
include __DIR__ . '/db.php';

if(isset($_POST['register'])){
    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username,email,password) VALUES('$u','$e','$p')";

    if($conn->query($sql)){
        $success = "Registered Successfully!";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>

<body>

<h1 class="project-title">Carbon Emissions Calculator</h1>

<div class="center-box">
<div class="card p-4 shadow" style="width:350px; border-radius:15px;">

<h3 class="text-center">Register</h3>

<!-- SUCCESS MESSAGE -->
<?php if(isset($success)) echo "<p style='color:green;'>$success</p>"; ?>

<!-- ERROR MESSAGE -->
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
<input class="form-control mb-2" name="username" placeholder="Username" required>
<input class="form-control mb-2" name="email" type="email" placeholder="Email" required>
<input class="form-control mb-2" name="password" type="password" placeholder="Password" required>

<button class="btn btn-success w-100" name="register">Register</button>
</form>

<p class="text-center mt-3">
Already have account? <a href="login.php">Login</a>
</p>

</div>
</div>

</body>
</html>