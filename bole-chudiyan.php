<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bole Chudiyan - Playlist</title>
  <link rel="stylesheet" href="bole-chudiyan.css">
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
    <h1>Bole Chudiyan - Music Playlist</h1>
    <div class="song-list">

      <div class="song" data-audio="Nahi Bolna - (Raag.Fm).mp3" data-index="0">
        <img src="Bole-Chudiyan-Nawazuddin-Siddiqui.jpg" alt="Bole Chudiyan">
        <div class="song-info">
          <h2>Nahi Bolna</h2>
          <p>From Bole Chudiyan</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Rehguzar - (Raag.Fm).mp3" data-index="1">
        <img src="Bole-Chudiyan-Nawazuddin-Siddiqui.jpg" alt="Bole Chudiyan">
        <div class="song-info">
          <h2>Rehguzar</h2>
          <p>From Bole Chudiyan</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Swaggy Chudiyan - (Raag.Fm).mp3" data-index="2">
        <img src="Bole-Chudiyan-Nawazuddin-Siddiqui.jpg" alt="Bole Chudiyan">
        <div class="song-info">
          <h2>Swaggy Chudiyan</h2>
          <p>From Bole Chudiyan</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Tum Pe Hum Toh (Female) - (Raag.Fm).mp3" data-index="3">
        <img src="Bole-Chudiyan-Nawazuddin-Siddiqui.jpg" alt="Bole Chudiyan">
        <div class="song-info">
          <h2>Tumpe Hum Toh</h2>
          <p>From Bole Chudiyan</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>

  <audio id="audio-player"></audio>
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const songs = document.querySelectorAll('.song');
      songs.forEach(song => {
        song.addEventListener('click', () => {
          const index = song.getAttribute('data-index');
          window.location.href = `bole-chudiyan_index.php?songIndex=${index}`;
        });
      });
    });
  </script>
  <script src="bole-chudiyan.js"></script>
</body>
</html>