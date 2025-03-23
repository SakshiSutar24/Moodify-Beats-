<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haseen Dillruba - Playlist</title>
  <link rel="stylesheet" href="haseen-dillruba.css">
  <link rel="stylesheet" href="haseen-dillruba_index.php">
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
    <h1>Haseen Dillruba - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Dil Melt Karda - (Raag.Fm).mp3">
        <img src="haseen-dillruba.jpg" alt="haeen-dillruba">
        <div class="song-info">
          <h2>Dil Melt Karda</h2>
          <p>From Haseen Dillruba</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Lakeeran - (Raag.Fm).mp3">
        <img src="haseen-dillruba.jpg" alt="hasen-dillruba">
        <div class="song-info">
          <h2>Lakeeran</h2>
          <p>From Haseen Dillruba</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Milaa Yun - (Raag.Fm).mp3">
        <img src="haseen-dillruba.jpg" alt="haseen-dillruba">
        <div class="song-info">
          <h2>Milaa Yun</h2>
          <p>From Haseen Dillruba</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Phisal Jaa Tu - (Raag.Fm).mp3">
        <img src="haseen-dillruba.jpg" alt="haseen-dillruba">
        <div class="song-info">
          <h2>Phisal Jaa Tu</h2>
          <p>From Haseen Dillruba</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>
  <audio id="audio-player"></audio>
  

  <script src="haseen-dillruba.js"></script>
</body>
</html>
