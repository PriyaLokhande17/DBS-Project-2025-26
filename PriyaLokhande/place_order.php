<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    echo "<script>alert('Please login'); window.location='../login.php';</script>";
    exit;
}

$user_id = intval($_SESSION['user_id']);
$item_id = intval($_POST['item_id']);
$qty = intval($_POST['qty']);

$sql = "INSERT INTO orders(user_id, item_id, quantity) VALUES($user_id, $item_id, $qty)";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Order placed successfully!'); window.location='../my_orders.php';</script>";
} else {
    echo "<script>alert('Error placing order'); window.location='../menu.php';</script>";
}
?>