<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>FoodHub Restaurant</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'partials/navbar.php'; ?>

<header class="hero">
  <div class="hero-content">
    <h1>Welcome to FoodHub</h1>
    <p>Delicious food. Fast delivery. Order now!</p>
    <a class="btn" href="menu.php">Explore Menu</a>
  </div>
  <div class="hero-images">
    <img src="images/mancurian.jpg" alt="mancurian">
    <img src="images/momos.jpg" alt="momos">
    <img src="images/paneer.jpg" alt="paneer">
  </div>
</header>

<section class="features">
  <div class="card">
    <h3>Fresh Ingredients</h3>
    <p>Quality you can taste.</p>
  </div>
  <div class="card">
    <h3>Fast Delivery</h3>
    <p>Hot food in minutes.</p>
  </div>
  <div class="card">
    <h3>Easy Ordering</h3>
    <p>Simple UI for quick orders.</p>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
</body>
</html>