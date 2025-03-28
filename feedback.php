<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Moodify Beats</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body {
            font-family: Arial, sans-serif;
            background: url('feedback.png') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
            border: 1px solid #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(26, 25, 25, 0.4);
            text-align: center;
            max-width: 500px;
            font-weight: bold;
            color: #fff;
            height: 50%;
            width: 350px;
            word-spacing: 2px;
            letter-spacing: 1px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            transition: color 0.3s ease;
            transition: text-shadow 0.3s ease;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            background-color: rgba(5, 5, 5, 0.45);
            color: #fff;
            font-size: 15px;
            resize: vertical;
            transition: background 0.3s ease;
            outline: none;
            font-family: Arial, sans-serif;
            letter-spacing: 1px;
        }
        .btn {
            background:rgb(220, 9, 122);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background:rgb(227, 27, 140);
        }
        
        /* Back to Home Button */
        .home-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            background: linear-gradient(45deg, #3b82f6, #2563eb);
            border: none;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .home-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.7);
        }
    </style>
</head>
<body>
<button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="feedback.php" method="POST">
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <textarea name="feedback" placeholder="Enter Your Feedback" rows="4" required></textarea>
            <button type="submit" class="btn">Submit Feedback</button>
        </form>
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moodify";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedbacks (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully!'); window.location.href='thankyou.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>