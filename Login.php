<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Moodify Beats</title>
    <link rel="stylesheet" href="Login.css">
    <script>
        function login(event) {
            event.preventDefault(); // Prevents the form from reloading the page
            // Add your validation logic here (e.g., check if email and password are correct)
            
            // If login is successful, redirect to the main page
            window.location.href = 'mainpage.php'; // Replace with the actual name of the next page
        }
    </script>
</head>
<body>
    <form action="" class="form" onsubmit="login(event)">
        <h1>LOGIN</h1>
        <input type="email" name="email" class="box" placeholder="Enter Username" required>
        <input type="password" name="password" class="box" placeholder="Enter Password" required>
        <input type="submit" id="submit" value="LOGIN">
        <a href="sutar.php">Back to Home</a>
    </form>
</body>
</html>

