<!-- filepath: c:\XAMPP\htdocs\VSCode1\signup.php -->
<?php
// ...existing code...
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $conn = new mysqli('localhost', 'root', '', 'moodify');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful!";
        
        // 🔥 रिडायरेक्शन: युजरला login.php वर ने
        header("Location: signin.php");  
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    

    $stmt->close();
    $conn->close();
}
?>
<php
include 'config.php'; // Ensure config.php is correctly included
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Moodify Beats</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <form action="signup.php" method="POST" class="form">
        <h1>Sign Up</h1>
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="Enter Username" required>
        
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Enter Email" required>
        
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
        
        <label for="confirm-password"></label>
        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
        
        <input type="submit" value="Sign Up">
        <a href="signin.php">Already have an account? Sign In</a>
    </form>
</body>
</html>
