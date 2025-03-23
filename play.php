<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Song - Moodify Beats</title>
    <link rel="stylesheet" href="search.css">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const urlParams = new URLSearchParams(window.location.search);
            const title = urlParams.get("title");
            const artist = urlParams.get("artist");
            const src = urlParams.get("src");
            const image = urlParams.get("image");

            document.getElementById("song-title").textContent = title;
            document.getElementById("song-artist").textContent = artist;
            document.getElementById("album-image").src = decodeURIComponent(image);
            const audio = document.getElementById("audio-player");
            audio.src = decodeURIComponent(src);
            audio.play();
        });
    </script>
    <style>
        body {
            background-color: #0a192f;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            box-sizing: border-box;
        }
        .song-info-container {
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        }
        .song-info-container img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }
        .song-info-container h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .song-info-container p {
            font-size: 1.2rem;
            opacity: 0.8;
        }
        .audio-player {
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
        }
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            .song-info-container img {
                max-width: 200px;
            }
            .audio-player {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="song-info-container">
        <img id="album-image" src="" alt="Album Art">
        <h1 id="song-title"></h1>
        <p id="song-artist"></p>
    </div>
    <div class="audio-player">
        <audio id="audio-player" controls>
            <source src="" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</body>
</html>
