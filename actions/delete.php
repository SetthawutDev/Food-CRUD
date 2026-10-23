<?php
require_once __DIR__ . '/../config/conn.php';

$id = $_GET['food_id'];

$sql = "DELETE FROM foods WHERE f_id='$id'";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: ../");

exit;
