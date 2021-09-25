<?php

include 'database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

print_r($_POST);
echo '<br>';
$sql = "INSERT INTO users (username, password, email) VALUES ('{$username}','{$password}','{$email}')";

print_r($sql);

mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_close($conn);

echo mysqli_error($conn);