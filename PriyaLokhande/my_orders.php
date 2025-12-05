<?php
// my_orders.php - debug-ready / defensive version
session_start();
include 'backend/db.php';
include 'partials/navbar.php';

// ensure logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$uid = intval($_SESSION['user_id']);

// run the query and check for errors
$sql = "
    SELECT orders.id, menu_items.item_name, orders.quantity, orders.order_time
    FROM orders
    JOIN menu_items ON menu_items.id = orders.item_id
    WHERE orders.user_id = $uid
    ORDER BY orders.order_time DESC
";
$q = mysqli_query($conn, $sql);

if ($q === false) {
    // show DB error for debugging (remove / hide in production)
    echo "<div style='max-width:1100px;margin:18px auto;padding:0 18px;color:red;'><strong>Database error:</strong> " . mysqli_error($conn) . "</div>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Orders</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      /* quick safety so cells don't stack vertically */
      .table { width:100%; border-collapse:collapse; }
      .table th, .table td { padding:12px; border-bottom:1px solid #eef3fb; text-align:left; vertical-align:middle; }
      /* prevent narrow cells from forcing wrap into new rows */
      .table td { white-space:nowrap; }
      /* responsive fallback */
      @media (max-width:700px) {
        .table td { white-space:normal; }
      }
      .btn-cancel{ display:inline-block; padding:8px 10px; border-radius:8px; text-decoration:none; border:1px solid #e2e8f0; color:#102A43; }
    </style>
</head>
<body>
<div style="max-width:1100px;margin:18px auto;padding:0 18px">
  <h2>My Orders</h2>

  <table class="table" role="table" aria-label="My Orders">
    <thead>
      <tr>
        <th>Food</th>
        <th>Qty</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // If you want to inspect row structure temporarily, uncomment the debug block below:
      // if(isset($_GET['debug'])) { echo '<pre>'; print_r(mysqli_fetch_all($q, MYSQLI_ASSOC)); echo '</pre>'; exit; }

      // Loop and print rows
      while ($row = mysqli_fetch_assoc($q)) {
          // defensive checks: ensure keys exist
          $food = isset($row['item_name']) ? $row['item_name'] : '(unknown)';
          $qty  = isset($row['quantity']) ? $row['quantity'] : '(0)';
          $time = isset($row['order_time']) ? $row['order_time'] : '(n/a)';
          $id   = isset($row['id']) ? intval($row['id']) : 0;

          echo "<tr>";
          echo "<td>" . htmlspecialchars($food) . "</td>";
          echo "<td>" . htmlspecialchars($qty) . "</td>";
          echo "<td>" . htmlspecialchars($time) . "</td>";

          // note: cancel endpoint in provided project is backend/cancel_order.php
          echo "<td><a class='btn-cancel' href='backend/cancel_order.php?id={$id}' onclick=\"return confirm('Cancel this order?');\">Cancel</a></td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <?php
  // If there were zero rows, show message
  if (mysqli_num_rows($q) === 0) {
      echo "<p style='margin-top:12px;color:#64748b'>You have not placed any orders yet.</p>";
  }
  ?>
</div>
</body>
</html>
