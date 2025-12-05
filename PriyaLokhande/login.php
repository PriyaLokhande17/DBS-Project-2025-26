<?php session_start(); include 'partials/navbar.php'; ?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Login - FoodHub</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="form-box">
  <h2>Login</h2>
  <form action="backend/login_user.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn">Login</button>
  </form>
  <p style="margin-top:8px">New user? <a href="register.php">Register</a></p>
</div>
</body>
</html>