<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saina - Playlist</title>
  <link rel="stylesheet" href="saina.css">
  <link rel="stylesheet" href="saina_index.php">
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
    <h1>Saina - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Parinda - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>Parinda</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Main Hoon Na Tere Saath - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>Main Hoon Na Tere Saath</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Chal Wahin Chalein - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>Chal Wahin Chalein</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="A Mothers Love - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>A Mothers Love</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="The Curse of a Champion - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>The Curse of a Champion</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="The Staircase of Life - (Raag.Fm).mp3">
        <img src="Saina.jpg" alt="Saina">
        <div class="song-info">
          <h2>The Staircase of Life</h2>
          <p>From Saina</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>

  <audio id="audio-player"></audio>
  

  <script src="saina.js"></script>
</body>
</html>
