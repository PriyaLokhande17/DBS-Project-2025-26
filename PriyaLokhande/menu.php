<?php session_start(); include 'backend/db.php'; include 'partials/navbar.php'; ?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Menu - FoodHub</title><link rel='stylesheet' href='css/style.css'></head>
<body>

<h2 style="max-width:1100px;margin:18px auto;padding:0 18px">Our Menu</h2>

<div class="menu-container">
<?php
$result = mysqli_query($conn, "SELECT * FROM menu_items");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='menu-card'>";
    echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt=''>";
    echo "<h3>" . htmlspecialchars($row['item_name']) . "</h3>";
    echo "<p>Price: Rs. " . htmlspecialchars($row['price']) . "</p>";
    echo "<div class='actions'>";
    echo "<a class='btn-outline' href='order.php?id=" . $row['id'] . "'>Order</a>";
    echo "</div></div>";
}
?>
</div>

</body></html>