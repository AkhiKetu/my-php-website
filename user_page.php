<?php
session_start();

// Redirect if not logged in or not a user
if (!isset($_SESSION['email']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Page</title>
    <link rel="stylesheet" href="./styles.css" />
</head>
<body style="background: #fff;">
    <div class="box" style="text-align:center; padding:40px;">
        <h1>Welcome, <span><?php echo htmlspecialchars($_SESSION['name']); ?></span></h1>
        <p>This is a <strong>User</strong> page.</p>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>    
</html>
