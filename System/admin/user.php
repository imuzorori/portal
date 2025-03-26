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
  <title>Admin Users</title>
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
    <h1>Users</h1>
    <table>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
      <tr>
        <td>JohnDoe</td>
        <td>johndoe@example.com</td>
        <td>Admin</td>
      </tr>
      <tr>
      <td>JaneDoe</td>
        <td>janedoe@example.com</td>
        <td>User</td>
      </tr>
    </table>
  </main>
</body>
</html>
