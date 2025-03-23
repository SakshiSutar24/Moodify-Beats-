<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Moodify Beats</title>
    <link rel="stylesheet" href="sigin.css">
    <link rel="stylesheet" href="registration.php">
    <script>
        function signIn(event) {
            event.preventDefault(); // Prevent page reload
            
            // Add validation logic (e.g., check if email and password match records)
            
            // Redirect to the main page after successful login
            window.location.href = 'mainpage.php'; 
        }
    </script>
</head>
<body>
    <form action="" class="form" onsubmit="signIn(event)">
        <h1>SIGN IN</h1>
        <input type="email" name="email" class="box" placeholder="Enter Email" required>
        <input type="password" name="password" class="box" placeholder="Enter Password" required>
        <input type="submit" id="submit" value="SIGN IN">
        <a href="sutar.php">Back to Home</a>
    </form>
</body> 
</html>

