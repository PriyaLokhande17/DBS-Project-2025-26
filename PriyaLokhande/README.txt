Restaurant Management System (PHP + MySQL + HTML/CSS/JS)
-----------------------------------------------------

How to run locally:

1. Requirements:
   - PHP (>=7.2) with mysqli support
   - MySQL / MariaDB
   - A local webserver (XAMPP, WAMP, MAMP) or built-in PHP server

2. Import database:
   - Use phpMyAdmin or mysql CLI: `mysql -u root -p < database.sql`
   - Or create database 'restaurant_db' and run SQL statements from database.sql

3. Place the 'restaurant_project' folder in your web root (e.g., htdocs for XAMPP)
   or run built-in PHP server from inside the project folder:
     php -S localhost:8000

4. Edit DB credentials if needed:
   - backend/db.php (host, user, pass, dbname)

5. Open in browser:
   - http://localhost/restaurant_project/index.php  (or port if using built-in server)

Notes & Demo flows:
 - Register a new user via Register page.
 - Login and go to Menu to place orders.
 - My Orders page shows saved orders and allows cancelling.
 - Admin pages are simple demo pages (not secured) to view/manage items and orders.

Deliverables in this ZIP:
 - Full PHP project with frontend, backend, sample images, and database SQL.
