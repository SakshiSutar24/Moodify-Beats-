<php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_dashboard.css">
    <title>Admin Dashboard</title>
</head>
<body>
<button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <header>
        <nav class="navbar">
            <h2 class="welcome-text">Welcome, Admin!</h2>
            <ul>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="manage_feedback.php">Manage Feedback</a></li>
                <li><a href="admin_logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
