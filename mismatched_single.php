<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mismatched - Album Page</title>
  
  <!-- Bootstrap Icons (Play, Pause, etc.) -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
  />
  <link rel="stylesheet" href="mismatched.php">

  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Header / Hero Section */
    .album-header {
      display: flex;
      flex-direction: column;
      padding: 40px;
      background: rgba(0, 0, 0, 0.4);
    }

    .album-top {
      display: flex;
      align-items: flex-end;
      gap: 30px;
    }

    .album-cover {
      width: 220px;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }

    .album-info h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .album-info p {
      font-size: 0.95rem;
      opacity: 0.9;
      margin-bottom: 5px;
    }

    .album-type {
      font-weight: bold;
      margin-bottom: 8px;
      opacity: 0.8;
    }

    /* About Section (Movie Info) */
    .movie-info {
      margin-top: 20px;
      background: rgba(255, 255, 255, 0.1);
      padding: 15px;
      border-radius: 8px;
      line-height: 1.5;
    }

    /* Buttons (Play / Link) */
    .btn-group {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .play-button {
      background-color: #12034d; /* Spotify Green */
      color: #fff;
      border: none;
      padding: 12px 30px;
      border-radius: 30px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .play-button:hover {
      background-color: #0b0f28;
    }

    .mismatched-link {
      background-color: transparent;
      color: #fff;
      border: 1px solid #fff;
      padding: 12px 30px;
      border-radius: 30px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .mismatched-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    /* Tracks Section */
    .tracks-section {
      padding: 20px 40px;
      flex-grow: 1;
      background: rgba(135deg, #0f172a, #1e293b);
    }

    .tracks-section h2 {
      font-size: 1.4rem;
      margin-bottom: 15px;
    }

    .track-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #030303;
      padding: 10px 15px;
      border-radius: 8px;
      margin-bottom: 10px;
      transition: background 0.2s ease;
    }

    .track-item:hover {
      background-color: #2a2a2a;
    }

    .track-left {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .track-play {
      cursor: pointer;
    }

    .track-title {
      font-weight: 500;
    }

    .track-duration {
      opacity: 0.8;
    }

    /* Footer (Optional) */
    .footer {
      text-align: center;
      padding: 10px;
      font-size: 0.8rem;
      background: #000;
      color: #fff;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .album-top {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .album-info h1 {
        font-size: 2rem;
      }
      .tracks-section {
        padding: 20px;
      }
    }

    .link {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i>
  </button>
  <!-- Header / Hero -->
  <header class="album-header">
    <div class="album-top">
      <img
        src="Mismatched---Season-3-Taaruk-Raina.jpg"
        alt="Mismatched Cover"
        class="album-cover"
      />
      <div class="album-info">
        <p class="album-type">ALBUM</p>
        <h1>Mismatched (From "Mismatched")</h1>
        <p>Taaruk Raina • 2021 • 13 songs, ~45 min</p>

        <div class="btn-group">
          <button class="play-button" onclick="playMainSong()">
            <i class="bi bi-play-fill"></i> Play
          </button>
          <!-- Link to mismatched.php -->
          <a href="mismatched.php" class="mismatched-link">
            <i class="bi bi-music-note-list"></i>
            View Mismatched Playlist
          </a>
        </div>
      </div>
    </div>

    <div class="movie-info">
      <h3>About Mismatched</h3>
      <p>
        Mismatched is a 2021 Indian Hindi-language romantic drama series directed by Akarsh Khurana.
        It stars Prajakta Koli, Rohit Saraf, and Rannvijay Singha. The series’ music is
        composed by Taaruk Raina and has become a hit among music lovers for its soulful tracks.
      </p>
    </div>
  </header>

  <!-- Tracks Section -->
  <section class="tracks-section">
    <h2>Tracks</h2>
    <div id="trackList"></div>
  </section>

  <!-- Hidden Audio Player -->
  <audio id="audioPlayer"></audio>

  <!-- Footer (Optional) -->
  <div class="footer">
    © 2025 Moodify Beats
  </div>

  <script>
    // All tracks
    const tracks = [
      { title: 'Do Din', duration: '3:20', src: 'Do-Din.mp3' },
      { title: 'Gumshudah', duration: '3:45', src: 'Gumshudah.mp3' },
      { title: 'Ishq Hai', duration: '4:10', src: 'Ishq-Hai.mp3' },
      { title: 'Khaamiyan', duration: '3:55', src: 'Khaamiyan.mp3' },
      { title: 'Pyaar Hai', duration: '3:40', src: 'Pyaar-Hai.mp3' },
      { title: 'Rang Laago', duration: '3:25', src: 'Rang-Laago.mp3' },
      { title: 'Sab Theek Hai', duration: '3:50', src: 'Sab-Theek-Hai.mp3' }
    ];

    let currentTrack = null;
    const audioPlayer = document.getElementById('audioPlayer');
    const trackList = document.getElementById('trackList');

    // Render track list on page load
    window.onload = () => {
      renderTracks();
    };

    function renderTracks() {
      tracks.forEach((track, index) => {
        const trackItem = document.createElement('div');
        trackItem.classList.add('track-item');

        trackItem.innerHTML = `
          <div class="track-left">
            <i class="bi bi-play-fill track-play" id="playIcon-${index}" onclick="playTrack(${index})"></i>
            <span class="track-title">${track.title}</span>
          </div>
          <div class="track-duration">${track.duration}</div>
        `;
        trackList.appendChild(trackItem);
      });
    }

    function playTrack(index) {
      // Reset other icons
      document.querySelectorAll('.track-play').forEach(icon => {
        icon.classList.remove('bi-pause-fill');
        icon.classList.add('bi-play-fill');
      });

      const selectedTrack = tracks[index];
      // If the same song is playing, pause it
      if (currentTrack === selectedTrack.src && !audioPlayer.paused) {
        audioPlayer.pause();
        currentTrack = null;
      } else {
        // Play new song
        audioPlayer.src = selectedTrack.src;
        audioPlayer.play();
        currentTrack = selectedTrack.src;
        // Change icon
        document.getElementById(`playIcon-${index}`).classList.remove('bi-play-fill');
        document.getElementById(`playIcon-${index}`).classList.add('bi-pause-fill');
      }
    }

    // Play main song (Title Track) with the "Play" button
    function playMainSong() {
      const mainTrack = tracks.find(t => t.title === 'Do Din');
      if (!mainTrack) return;
      
      // If already playing, pause it
      if (audioPlayer.src.includes(mainTrack.src) && !audioPlayer.paused) {
        audioPlayer.pause();
      } else {
        audioPlayer.src = mainTrack.src;
        audioPlayer.play();
        currentTrack = mainTrack.src;
      }
    }

    // Reset icon when song ends
    audioPlayer.addEventListener('ended', () => {
      document.querySelectorAll('.track-play').forEach(icon => {
        icon.classList.remove('bi-pause-fill');
        icon.classList.add('bi-play-fill');
      });
      currentTrack = null;
    });
  </script>
</body>
</html>
