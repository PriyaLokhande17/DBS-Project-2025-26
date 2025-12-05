<?php session_start(); include 'backend/db.php'; include 'partials/navbar.php';

if(!isset($_SESSION['user_id'])){
    echo "<script>alert('Please login to place order'); window.location='login.php';</script>";
    exit;
}

if(!isset($_GET['id'])){
    echo "<script>alert('No item selected'); window.location='menu.php';</script>";
    exit;
}

$id = intval($_GET['id']);
$item_q = mysqli_query($conn, "SELECT * FROM menu_items WHERE id=$id");
if(mysqli_num_rows($item_q)==0){
    echo "<script>alert('Item not found'); window.location='menu.php';</script>";
    exit;
}
$item = mysqli_fetch_assoc($item_q);
?>

<!DOCTYPE html><html><head><meta charset='utf-8'><title>Order - FoodHub</title><link rel='stylesheet' href='css/style.css'></head>
<body>
<div class="form-box">
  <h2>Order: <?php echo htmlspecialchars($item['item_name']); ?></h2>
  <p>Price: Rs. <?php echo htmlspecialchars($item['price']); ?></p>
  <form action="backend/place_order.php" method="POST" id="orderForm">
    <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
    <label>Quantity</label>
    <input type="number" name="qty" min="1" value="1" required>
    <button type="submit" class="btn">Place Order</button>
  </form>
</div>

<script>
document.getElementById('orderForm').addEventListener('submit', function(e){
  // simple client-side feedback can be handled in backend too
});
</script>
</body></html>