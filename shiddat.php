<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shiddat - Playlist</title>
  <link rel="stylesheet" href="shiddat.css">
  <link rel="stylesheet" href="index.php">
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
  <button class="home-btn" onclick="window.location.href='sutar.php'"> <i class="fas fa-home"></i> </button>
  <div class="playlist-container">
    <h1>Shiddat - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Barbaadiyan - (Raag.Fm).mp3">
        <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
        <div class="song-info">
          <h2>Barbaadiyan</h2>
          <p>From Shiddat</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Chitta - (Raag.Fm).mp3">
        <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
        <div class="song-info">
          <h2>Chitta</h2>
          <p>From Shiddat</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Hum Dum - (Raag.Fm).mp3">
        <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
        <div class="song-info">
          <h2>Hum Dum</h2>
          <p>From Shiddat</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Jug Jug Jeeve - (Raag.Fm).mp3">
        <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
        <div class="song-info">
          <h2>Jug Jug Jeeve</h2>
          <p>From Shiddat</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Shiddat Reprise - (Raag.Fm).mp3">
        <img src="Shiddat-Movie-Manan-Bhardwaj.jpg" alt="Shiddat">
        <div class="song-info">
          <h2>Shiddat Reprise</h2>
          <p>From Shiddat</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>

  <audio id="audio-player"></audio>
  

  <script src="shiddat.js"></script>
</body>
</html>
