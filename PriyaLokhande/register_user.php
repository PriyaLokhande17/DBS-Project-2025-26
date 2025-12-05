<?php
include 'db.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$exists = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
if(mysqli_num_rows($exists) > 0){
    echo "<script>alert('Email already registered'); window.location='../register.php';</script>";
    exit;
}

$sql = "INSERT INTO users(name, email, password) VALUES('$name','$email','$pass')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registration successful'); window.location='../login.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>