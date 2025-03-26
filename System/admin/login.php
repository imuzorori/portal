<?php
if (isset($_POST['role'])) {
  $username = $_POST['role'];
  $password = $_POST['password'];

  // Validate login credentials
  if ($username == 'admin' && $password == 'password') {
    $_SESSION['admin'] = true;
    header('Location: index.php');
    exit;
  } else {
    echo 'Invalid login credentials.';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Back to Dashboard</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Admin Login</h1>
    <form action="login.php" method="post">
      <label>Role:</label>
      <input type="text" name="role"><br>
      <label>Password:</label>
      <input type="password" name="password"><br>
      <input type="submit" value="Login">
    </form>
  </main>
</body>
</html>
