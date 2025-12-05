<?php
include 'db.php';

$item = mysqli_real_escape_string($conn, $_POST['item_name']);
$price = floatval($_POST['price']);
$image = mysqli_real_escape_string($conn, $_POST['image']);

$sql = "INSERT INTO menu_items(item_name, price, image) VALUES('$item', $price, '$image')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Item added'); window.location='../admin/manage_items.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>