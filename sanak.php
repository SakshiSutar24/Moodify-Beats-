<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sanak - Playlist</title>
  <link rel="stylesheet" href="sanak.css">
  <link rel="stylesheet" href="sanak_index.php">
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
    <h1>sanak - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Ankhein Mili - (Raag.Fm).mp3">
        <img src="Sanak.jpg" alt="sanak">
        <div class="song-info">
          <h2>Ankhein Mili</h2>
          <p>From sanak</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="O Yaara Dil Lagana - (Raag.Fm).mp3">
        <img src="Sanak.jpg" alt="sanak">
        <div class="song-info">
          <h2>O Yaara Dil Lagana</h2>
          <p>From sanak</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Suna Hai - (Raag.Fm).mp3">
        <img src="Sanak.jpg" alt="sanak">
        <div class="song-info">
          <h2>Suna Hai</h2>
          <p>From sanak</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Suna Hai Female Version - (Raag.Fm).mp3">
        <img src="Sanak.jpg" alt="sanak">
        <div class="song-info">
          <h2>Suna Hai Female Version</h2>
          <p>From sanak</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

    </div>
  </div>

  <audio id="audio-player"></audio>
  

  <script src="sanak.js"></script>
</body>
</html>
