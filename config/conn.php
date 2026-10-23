<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'se310_quiz';

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    echo "Failed to connect database.";
}
