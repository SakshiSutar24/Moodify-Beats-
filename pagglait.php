<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagglait - Playlist</title>
  <link rel="stylesheet" href="pagglait.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

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

    .playlist-container {
      width: 100%;
      max-width: 800px;
      background-color: #1e1e1e;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    .playlist-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .song-list {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .song {
      display: flex;
      align-items: center;
      background-color: #292929;
      padding: 10px;
      border-radius: 10px;
      transition: transform 0.2s ease-in-out, background-color 0.2s;
      cursor: pointer;
    }

    .song:hover {
      transform: scale(1.05);
      background-color: #383838;
    }

    .song img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 15px;
      border: 2px solid #fff;
    }

    .song-info {
      flex-grow: 1;
    }

    .song-info h2 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .song-info p {
      font-size: 14px;
      color: #b3b3b3;
    }

    .play-btn {
      background-color: #12034d;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 50%;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .play-btn:hover {
      background-color: #0b0f28;
    }

    .link {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .link a {
      background-color: #12034d;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .link a:hover {
      background-color: #0b0f28;
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'"> <i class="fas fa-home"></i> </button>
  <div class="playlist-container">
    <h1>Pagglait - Music Playlist</h1>
    <div class="song-list">
      <div class="song" data-audio="A Prayer - (Raag.Fm).mp3">
        <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
        <div class="song-info">
          <h2>A Prayer</h2>
          <p>From Pagglait</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
      <div class="song" data-audio="Dil Udd Ja Re Revisited - (Raag.Fm).mp3">
        <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
        <div class="song-info">
          <h2>Dil Udd Ja Re Revisited</h2>
          <p>From Pagglait</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
      <div class="song" data-audio="Loss Is All That Is Left - (Raag.Fm).mp3">
        <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
        <div class="song-info">
          <h2>Loss Is All That Is Left</h2>
          <p>From Pagglait</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
      <div class="song" data-audio="Phire Faqeera - (Raag.Fm).mp3">
        <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
        <div class="song-info">
          <h2>Phire Faqeera</h2>
          <p>From Pagglait</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
      <div class="song" data-audio="Thode Kam Ajnabi Reprise Version - (Raag.Fm).mp3">
        <img src="Pagglait-Arijit-Singh.jpg" alt="Pagglait">
        <div class="song-info">
          <h2>Thode Kam Ajnabi Reprise Version</h2>
          <p>From Pagglait</p>
        </div>
        <button class="play-btn">▶</button>
      </div>
    </div>
  </div>
  <div class="link">
    <button class="home-btn" onclick="window.location.href='sutar.php'"> <i class="bi bi-house-door-fill"></i> </button>
  </div>
  <audio id="audio-player"></audio>

  <script src="pagglait.js"></script>
</body>
</html>