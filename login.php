
<?php

session_start();

include 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='{$username}' LIMIT 1";

print_r($sql);

$result = mysqli_query($conn, $sql);

$user_data = mysqli_fetch_assoc($result);


    if (!empty($password) && $password == $user_data['password']) {
        $_SESSION['permission'] = 1;
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: ./index.html?id={$user_data['id']}");
    } else {
        header('Location: ./index.php');
    }
