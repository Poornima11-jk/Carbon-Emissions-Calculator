<?php
session_start();
include __DIR__ . '/db.php';

if(isset($_POST['login'])){
    $e=$_POST['email'];
    $p=$_POST['password'];

    $res=$conn->query("SELECT * FROM users WHERE email='$e'");
    $user=$res->fetch_assoc();

    if($user && password_verify($p,$user['password'])){
        $_SESSION['user_id']=$user['id'];
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Your CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>

<h1 class="project-title">Carbon Emissions Calculator</h1>

<div class="center-box">

<div class="card p-4 shadow" style="width:350px; border-radius:15px;">

<h3 class="text-center mb-3">Login</h3>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
<input class="form-control mb-2" name="email" placeholder="Email" required>
<input class="form-control mb-2" type="password" name="password" placeholder="Password" required>

<button name="login" class="btn btn-success w-100">Login</button>
</form>

<p class="text-center mt-3">
Don't have account? <a href="register.php">Register</a>
</p>

</div>
</div>

</body>
</html>