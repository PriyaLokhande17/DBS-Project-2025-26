<?php
include 'db.php';
$id = intval($_GET['id']);
mysqli_query($conn, "DELETE FROM orders WHERE id=$id");
echo "<script>alert('Order cancelled'); window.location='../my_orders.php';</script>";
?>