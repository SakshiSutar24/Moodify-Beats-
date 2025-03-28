<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shiddat - Album Page</title>
  
  <!-- Bootstrap Icons (Play, Pause, etc.) -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
  />
  <link rel="stylesheet" href="shiddat.php">

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

    .shiddat-link {
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

    .shiddat-link:hover {
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
        src="Shiddat-Movie-Manan-Bhardwaj.jpg"
        alt="Shiddat Cover"
        class="album-cover"
      />
      <div class="album-info">
        <p class="album-type">ALBUM</p>
        <h1>Shiddat </h1>
        <p>Manan Bhardwaj • 2021 • 6 songs, ~20 min</p>

        <div class="btn-group">
          <button class="play-button" onclick="playMainSong()">
            <i class="bi bi-play-fill"></i> Play
          </button>
          <!-- इथे shiddat.php ला लिंक दिली आहे -->
          <a href="shiddat.php" class="shiddat-link">
            <i class="bi bi-music-note-list"></i>
            View Shiddat Playlist
          </a>
        </div>
      </div>
    </div>

    <div class="movie-info">
      <h3>About Shiddat</h3>
      <p>
        Shiddat is a 2021 Indian Hindi-language romantic drama film directed by Kunal Deshmukh.
        It stars Sunny Kaushal, Radhika Madan, Mohit Raina and Diana Penty. The film’s music is
        composed by Manan Bhardwaj and has become a hit among music lovers for its soulful tracks.
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
    // सर्व गाणी
    const tracks = [
      { title: 'Barbaadiyan', duration: '3:07', src: 'Barbaadiyan - (Raag.Fm).mp3' },
      { title: 'Chitta', duration: '3:30', src: 'Chitta - (Raag.Fm).mp3' },
      { title: 'Hum Dum', duration: '4:05', src: 'Hum Dum - (Raag.Fm).mp3' },
      { title: 'Jug Jug Jeeve', duration: '3:50', src: 'Jug Jug Jeeve - (Raag.Fm).mp3' },
      { title: 'Shiddat Title Track', duration: '3:50', src: 'Shiddat Title Track.mp3' },
      { title: 'Shiddat Reprise', duration: '3:15', src: 'Shiddat Reprise - (Raag.Fm).mp3' }
    ];

    let currentTrack = null;
    const audioPlayer = document.getElementById('audioPlayer');
    const trackList = document.getElementById('trackList');

    // पेज लोड झाल्यावर ट्रॅक लिस्ट तयार करा
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
      // इतर आयकॉन reset
      document.querySelectorAll('.track-play').forEach(icon => {
        icon.classList.remove('bi-pause-fill');
        icon.classList.add('bi-play-fill');
      });

      const selectedTrack = tracks[index];
      // जर तेच गाणे चालू असेल, pause करायचे
      if (currentTrack === selectedTrack.src && !audioPlayer.paused) {
        audioPlayer.pause();
        currentTrack = null;
      } else {
        // नवे गाणे प्ले करा
        audioPlayer.src = selectedTrack.src;
        audioPlayer.play();
        currentTrack = selectedTrack.src;
        // आयकॉन बदल
        document.getElementById(`playIcon-${index}`).classList.remove('bi-play-fill');
        document.getElementById(`playIcon-${index}`).classList.add('bi-pause-fill');
      }
    }

    // वरच्या "Play" बटणाने मुख्य गाणे (Title Track) प्ले करायचे
    function playMainSong() {
      const mainTrack = tracks.find(t => t.title === 'Shiddat Title Track');
      if (!mainTrack) return;
      
      // आधीच चालू असेल तर pause करायचे
      if (audioPlayer.src.includes(mainTrack.src) && !audioPlayer.paused) {
        audioPlayer.pause();
      } else {
        audioPlayer.src = mainTrack.src;
        audioPlayer.play();
        currentTrack = mainTrack.src;
      }
    }

    // गाणे संपल्यावर आयकॉन reset
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
