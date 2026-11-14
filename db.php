<?php
$conn = new mysqli("localhost", "root", "", "carbon_emission_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>