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
    <title>Add Playlist - Moodify Beats</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('admin.png');
            color: #c9d1d9;
            transition: background-color 0.3s, color 0.3s;
        }
        nav {
            background-color: #161b22;
            color: #c9d1d9;
            padding: 1em;
            text-align: center;
            font-size: 1.2em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        .container {
            padding: 2em;
            max-width: 800px;
            margin: auto;
            animation: fadeIn 1s ease-in-out;
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
        }
        .playlist .song {
            background-color: #161b22;
            border: 1px solid #30363d;
            margin: 1em 0;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .playlist .song:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }
        .btn {
            background-color:rgb(193, 7, 100);
            color: #0d1117;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn:hover {
            background-color:rgb(236, 25, 155);
            transform: scale(1.05);
        }
        .btn-remove {
            background-color:rgb(217, 14, 119);
        }
        .btn-remove:hover {
            background-color:rgb(210, 6, 101);
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 2em;
            color:rgb(221, 12, 137);
            text-decoration: none;
            transition: color 0.3s;
        }
        .back-link:hover {
            text-decoration: underline;
            color:rgb(242, 25, 133);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @media (max-width: 600px) {
            .container {
                padding: 1em;
            }
            .playlist .song {
                flex-direction: column;
                align-items: flex-start;
            }
            .playlist .song button {
                margin-top: 0.5em;
                width: 100%;
            }
        }
        .back-home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color:rgb(230, 7, 122); /* Changed to blue */
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
        <h1>Add Playlist</h1>
        <div class="playlist" id="playlist">
            <!-- List of playlist songs will be populated here -->
        </div>
    </div>
    <script>
        function removeSong(song) {
            console.log('Removing song:', song); // Debugging statement
            let playlist = JSON.parse(localStorage.getItem('playlist')) || [];
            playlist = playlist.filter(s => s !== song);
            localStorage.setItem('playlist', JSON.stringify(playlist));
            loadPlaylist();
        }

        function loadPlaylist() {
            console.log('Loading playlist'); // Debugging statement
            let playlist = JSON.parse(localStorage.getItem('playlist')) || [];
            let playlistElement = document.getElementById('playlist');
            playlistElement.innerHTML = '';
            playlist.forEach(song => {
                console.log('Adding song to playlist:', song); // Debugging statement
                let songElement = document.createElement('div');
                songElement.className = 'song';
                songElement.innerHTML = `
                    <span>${song}</span>
                    <button class="btn btn-remove" onclick="removeSong('${song}')">Remove</button>
                `;
                playlistElement.appendChild(songElement);
            });
        }

        window.onload = loadPlaylist;
    </script>
</body>
</html>