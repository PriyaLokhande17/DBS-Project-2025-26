<?php
session_start();
include 'db.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = $_POST['password'];

$res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if($res && mysqli_num_rows($res)==1){
    $user = mysqli_fetch_assoc($res);
    if(password_verify($pass, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        echo "<script>alert('Login successful'); window.location='../menu.php';</script>";
        exit;
    }
}

echo "<script>alert('Invalid credentials'); window.location='../login.php';</script>";
?>