<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hum Bhi Akele - Playlist</title>
  <link rel="stylesheet" href="hum-bhi-akele.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .home-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #7e0a46; /* Changed color */
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 50%;
      font-size: 1.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .home-btn:hover {
      background-color: #5e0834; /* Changed color */
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='music.php'"> <i class="fas fa-home"></i> </button>
  <div class="playlist-container">
    <h1>Hum Bhi Akele - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Hai Nahin - (Raag.Fm).mp3" onclick="openSongPage('Hai Nahin - (Raag.Fm).mp3')">
        <img src="Hum-Bhi-Akele-Tum-Bhi-Akele-Adil-Rasheed.jpg" alt="Hum Bhi Akele">
        <div class="song-info">
          <h2>Hai Nahin</h2>
          <p>From Hum Bhi Akele</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Nazdeekiyan (Female) - (Raag.Fm).mp3" onclick="openSongPage('Nazdeekiyan (Female) - (Raag.Fm).mp3')">
        <img src="Hum-Bhi-Akele-Tum-Bhi-Akele-Adil-Rasheed.jpg" alt="Hum Bhi Akele">
        <div class="song-info">
          <h2>Nazdeekiyan</h2>
          <p>From Hum Bhi Akele</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>

  <audio id="audio-player"></audio>
  
  <script src="hum-bhi-akele.js"></script>
  <script>
    function openSongPage(song) {
      window.location.href = `hum-bhi-akele_index.php?song=${encodeURIComponent(song)}`;
    }
  </script>
</body>
</html>
