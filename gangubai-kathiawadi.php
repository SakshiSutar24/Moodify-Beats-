<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gangubai Kathiawadi - Playlist</title>
  <link rel="stylesheet" href="gangubai-kathiawadi.css">
  <link rel="stylesheet" href="gangubai-kathiawadi_index.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'"> <i class="fas fa-home"></i> </button>
  <div class="playlist-container">
    <h1>Gangubai Kathiawadi - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="Jab Saiyaan - (Raag.Fm).mp3">
        <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
        <div class="song-info">
          <h2>Jab Saiyaan</h2>
          <p>From Gangubai Kathiawadi</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Jhume Re Gori - (Raag.Fm).mp3">
        <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
        <div class="song-info">
          <h2>Jhume Re Gori</h2>
          <p>From Gangubai Kathiawadi</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Meri Jaan - (Raag.Fm).mp3">
        <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
        <div class="song-info">
          <h2>Meri Jaan</h2>
          <p>From Gangubai Kathiawadi</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Muskurahat - (Raag.Fm).mp3">
        <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
        <div class="song-info">
          <h2>Muskurahat</h2>
          <p>From Gangubai Kathiawadi</p>
        </div>
        <button class="play-btn">▶</button>
      </div>

      <div class="song" data-audio="Shikayat - (Raag.Fm).mp3">
        <img src="Gangubai-Kathiawadi.jpg" alt="Gangubai Kathiawadi">
        <div class="song-info">
          <h2>Shikayat</h2>
          <p>From Gangubai Kathiawadi</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>

  <audio id="audio-player"></audio>
  
  <script>
    document.querySelectorAll('.play-btn').forEach(button => {
      button.addEventListener('click', function() {
        const audioSrc = this.parentElement.getAttribute('data-audio');
        localStorage.setItem('currentSong', audioSrc);
        window.location.href = 'gangubai-kathiawadi_index.php';
      });
    });
  </script>
</body>
</html>
