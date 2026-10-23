<?php
require_once __DIR__ . '/../config/conn.php';

$id = $_POST['id'];
$food_name = mysqli_escape_string($conn, $_POST['food_name']);
$food_price = mysqli_escape_string($conn, $_POST['food_price']);

$sql = "UPDATE foods SET f_name='$food_name', f_price='$food_price' WHERE f_id = $id";

mysqli_query($conn, $sql);

mysqli_close($conn);

header('Location: ../');

exit;
