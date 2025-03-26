<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Back to Admin Page</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Dashboard</h1>
    <p>This is the dashboard page.</p>
    <section>
      <h2>Statistics</h2>
      <ul>
        <li>Total Users: 100</li>
        <li>Total Posts: 500</li>
      </ul>
    </section>
  </main>
</body>
</html>

