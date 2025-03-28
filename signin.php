<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "moodify";

// 🔥 डेटाबेस कनेक्शन
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 🔥 लॉगिन लॉजिक
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: signin.php");
        exit();
    }

    // ✅ ईमेल चेक करण्यासाठी क्वेरी
    $sql = "SELECT id, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // ✅ पासवर्ड हॅश चेक करणे
        if (password_verify($password, $user['password'])) {  
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: sutar.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
        }
    } else {
        $_SESSION['error'] = "No account found with this email.";
    }
    
    $stmt->close();
    header("Location: signin.php");
    exit();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In - Moodify Beats</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <form action="signin.php" method="POST" class="form">
        <h1>Log In</h1>
        
        <?php if (isset($_SESSION['error'])): ?>
            <p class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
        <?php endif; ?>
        
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Enter Email" required>
        
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
        
        <input type="submit" id="submit" value="Log In">
        <div class="signup-link">
            <a href="signup.php">Don't have an account? Sign Up</a>
        </div>
    </form>
</body>
</html>
