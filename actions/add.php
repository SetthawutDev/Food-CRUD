<?php
require_once __DIR__ . '/../config/conn.php';

$food_name = mysqli_escape_string($conn, $_POST['food_name']);
$food_price = mysqli_escape_string($conn, $_POST['food_price']);

$sql = "INSERT INTO foods(f_name, f_price) VALUES ('$food_name','$food_price')";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: ../");

exit;
