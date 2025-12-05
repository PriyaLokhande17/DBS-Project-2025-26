<?php session_start(); include 'partials/navbar.php'; ?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Register - FoodHub</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="form-box">
  <h2>Create Account</h2>
  <form action="backend/register_user.php" method="POST">
    <input type="text" name="name" placeholder="Full name" required>
    <input type="email" name="email" placeholder="Email address" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn">Register</button>
  </form>
  <p style="margin-top:8px">Already have account? <a href="login.php">Login</a></p>
</div>
</body>
</html>