<?php include '../backend/db.php'; ?>
<!DOCTYPE html><html><head><meta charset='utf-8'><title>Add Item</title><link rel='stylesheet' href='../css/style.css'></head>
<body>
<div class='form-box'>
  <h2>Add Menu Item</h2>
  <form action='../backend/insert_item.php' method='POST' enctype='multipart/form-data'>
    <input type='text' name='item_name' placeholder='Item name' required>
    <input type='number' step='0.01' name='price' placeholder='Price' required>
    <input type='text' name='image' placeholder='Image filename (e.g. pizza.jpg)' required>
    <button class='btn' type='submit'>Add</button>
  </form>
  <p>Note: upload images to /images folder manually.</p>
</div>
</body></html>