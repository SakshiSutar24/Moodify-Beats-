<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Moodify Beats</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(45deg, #101011, #223352, #0b0b0b);
            background-size: 300% 300%;
            animation: backgroundAnimation 10s infinite alternate;
            color: #ffffff;
            text-align: center;
            padding: 40px;
        }

        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            background: rgba(13, 27, 42, 0.9);
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.1);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        @keyframes fadeIn {
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 36px;
            color: #0750d7;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #e0e0e0;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            font-size: 20px;
            font-weight: bold;
            color: #121212;
            background:linear-gradient(45deg, #15235c, #416099, #0b233c);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background: #7da0e8;
            transform: scale(1.1);
        }

        .footer {
            margin-top: 30px;
            font-size: 16px;
            color: #b0b0b0;
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
    <!-- Bootstrap Icons CDN for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <button class="home-btn" onclick="window.location.href='sutar.php'">
        <i class="bi bi-house-door-fill"></i>
    </button>
    <div class="container">
        <h1>About Moodify Beats</h1>
        <p>
            Moodify Beats is an innovative platform that curates music based on your emotions.
            Whether you're feeling happy, sad, or relaxed, we personalize the perfect playlist 
            to match your mood. Our AI-driven technology ensures an immersive and uplifting 
            experience tailored just for you.
        </p>
        <p>
            Let Moodify Beats take you on a journey where sound meets emotion. 
            Tune in, feel the vibe, and let the music move you!
        </p>
        
        <a href="#" class="btn">Explore Moodify Beats</a>

        <div class="footer">
            <p>© 2025 Moodify Beats | Designed for Music Lovers</p>
        </div>
        
    </div>

</body>
</html>