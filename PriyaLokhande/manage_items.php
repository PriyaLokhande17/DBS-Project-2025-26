<?php include '../backend/db.php'; ?>
<!DOCTYPE html><html><head><meta charset='utf-8'><title>Manage Menu</title><link rel='stylesheet' href='../css/style.css'></head>
<body>
<div style='max-width:1100px;margin:18px auto;padding:0 18px'>
  <h2>Menu Items</h2>
  <p><a href='add_item.php' class='btn-outline'>Add Item</a></p>
  <table class='table'>
    <tr><th>ID</th><th>Item</th><th>Price</th><th>Image</th></tr>
    <?php $res = mysqli_query($conn, "SELECT * FROM menu_items"); while($row = mysqli_fetch_assoc($res)){ ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['item_name']); ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo htmlspecialchars($row['image']); ?></td>
      </tr>
    <?php } ?>
  </table>
</div>
</body></html>