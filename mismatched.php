<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mismatched - Playlist</title>
  <link rel="stylesheet" href="mismatched.css">
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
  <div>
  <div class="playlist-container">
    <h1>Mismatched - Music Playlist</h1>
    <div class="song-list">

      <div class="song" data-audio="Do Din Ke Baad - (Raag.Fm).mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Do Din</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Gumshudah.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Gumshudah</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Ishq-Hai.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Ishq Hai</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Khaamiyan.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Khaamiyan</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Pyaar-Hai.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Pyaar Hai</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Rang-Laago.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Rang Laago</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Sab-Theek-Hai.mp3">
        <img src="Mismatched---Season-3-Taaruk-Raina.jpg" alt="Mismatched">
        <div class="song-info">
          <h2>Sab Theek Hai</h2>
          <p>From Mismatched</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

    </div>
  </div>
  </div>
  <audio id="audio-player"></audio>

  <script src="mismatched.js"></script>
</body>
</html>