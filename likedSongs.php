<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in first!'); window.location.href='signin.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liked Songs - Moodify Beats</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('admin.png');
            color: #c9d1d9;
        }
        nav {
            background-color: #161b22;
            color: #c9d1d9;
            padding: 1em;
            text-align: center;
            font-size: 1.2em;
        }
        .container {
            padding: 2em;
            max-width: 800px;
            margin: auto;
            position: relative;
        }
        h1 {
            text-align: center;
            color:rgb(0, 2, 4);
            margin-bottom: 1em;
            font-weight: bold;
            font-size: 40px;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease-in-out;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }
        .songlist .song {
            background-color: #161b22;
            border: 1px solid #30363d;
            margin: 1em 0;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        .btn {
            background-color:rgb(238, 5, 176);
            color: #0d1117;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color:rgb(228, 8, 170);
        }
        .btn-unlike {
            background-color:rgb(223, 10, 141);
        }
        .btn-unlike:hover {
            background-color:rgb(227, 8, 162);
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 2em;
            color:rgb(255, 8, 156);
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .container {
                padding: 1em;
            }
            .songlist .song {
                flex-direction: column;
                align-items: flex-start;
            }
            .songlist .song button {
                margin-top: 0.5em;
                width: 100%;
            }
        }
        .back-home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color:rgb(219, 5, 133); /* Changed to blue */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }
        .back-home-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <!-- ...existing code... -->
    </nav>
    <div class="container">
        <button class="back-home-btn" onclick="window.location.href='sutar.php'">
            <i class="bi bi-house-door"></i>
        </button>
        <h1>Liked Songs</h1>
        <div class="songlist" id="likedSongsList">
            <!-- List of liked songs will be populated here -->
        </div>
    </div>
    <script>
        function unlikeSong(song) {
            let likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
            likedSongs = likedSongs.filter(s => s !== song);
            localStorage.setItem('likedSongs', JSON.stringify(likedSongs));
            loadLikedSongs();
        }

        function loadLikedSongs() {
            let likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
            let likedSongsList = document.getElementById('likedSongsList');
            likedSongsList.innerHTML = '';
            likedSongs.forEach(song => {
                let songElement = document.createElement('div');
                songElement.className = 'song';
                songElement.innerHTML = `
                    <span>${song}</span>
                    <button class="btn btn-unlike" onclick="unlikeSong('${song}')">Unlike</button>
                `;
                likedSongsList.appendChild(songElement);
            });
        }

        window.onload = loadLikedSongs;
    </script>
</body>
</html>