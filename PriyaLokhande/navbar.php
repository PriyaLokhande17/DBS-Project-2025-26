<?php
$logged_in = isset($_SESSION['user_id']);
?>
<nav class="navbar">
  <div class="brand"><a href="index.php">FoodHub</a></div>
  <div class="nav-links">
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <?php if(!$logged_in): ?>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
    <?php else: ?>
      <a href="my_orders.php">My Orders</a>
      <a href="logout.php">Logout</a>
    <?php endif; ?>
  </div>
</nav>