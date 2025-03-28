<?php
session_start();
$conn = new mysqli("localhost", "root", "", "moodify");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_user = $_POST['username'];
    $admin_pass = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $admin_user, $admin_pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $admin_user;
        header("Location: admin_dashboard.php");
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Login</title>
</head>
<body>
<button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <form action="admin_login.php" method="POST">
        <h1>Admin</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
