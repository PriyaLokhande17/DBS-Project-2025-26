<?php include '../backend/db.php'; ?>
<!DOCTYPE html><html><head><meta charset='utf-8'><meta charset='utf-8'><title>All Orders</title><link rel='stylesheet' href='../css/style.css'></head>
<body>
<div style='max-width:1100px;margin:18px auto;padding:0 18px'>
  <h2>All Orders</h2>
  <table class='table'>
    <tr><th>ID</th><th>User</th><th>Food</th><th>Qty</th><th>Time</th></tr>
    <?php
      $q = mysqli_query($conn, "SELECT orders.id, users.name, menu_items.item_name, orders.quantity, orders.order_time FROM orders JOIN users ON users.id=orders.user_id JOIN menu_items ON menu_items.id=orders.item_id ORDER BY orders.order_time DESC");
      while($r = mysqli_fetch_assoc($q)){
        echo "<tr><td>{$r['id']}</td><td>".htmlspecialchars($r['name'])."</td><td>".htmlspecialchars($r['item_name'])."</td><td>{$r['quantity']}</td><td>{$r['order_time']}</td></tr>";
      }
    ?>
  </table>
</div>
</body></html>