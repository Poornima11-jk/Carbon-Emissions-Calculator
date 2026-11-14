<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logout Successful</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg,#4CAF50,#2e7d32);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:0;
}

.container{
    background:white;
    padding:40px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    width:350px;
}

h1{
    color:#2e7d32;
}

p{
    color:#555;
    margin:15px 0;
}

button{
    background:#4CAF50;
    color:white;
    border:none;
    padding:12px 25px;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1b5e20;
}

</style>
</head>

<body>

<div class="container">

<h1>✓ Logout Successful</h1>

<p>Thank you for using <b>Carbon Calculator 🌿</b></p>

<a href="login.php">
<button>Login Again</button>
</a>

</div>

</body>
</html>