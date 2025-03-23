<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Arman Malik- Moodify Beats</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #121212;
      color: #fff;
      display: flex;
      height: 100vh;
    }

    .container {
      display: flex;
      width: 100%;
    }

    .left-panel {
      width: 30%;
      padding: 40px;
      background: linear-gradient(135deg, #ff7e40, #cc2b5e);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .artist-photo {
      width: 180px;
      height: 180px;
      border-radius: 5px;
      object-fit: cover;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .artist-info {
      text-align: center;
      margin-top: 20px;
    }

    .artist-info h1 {
      font-size: 2rem;
    }

    .verified {
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 500;
      margin-top: 10px;
    }

    .verified i {
      color: #1db954;
      margin-right: 5px;
    }

    .start-btn {
      margin-top: 20px;
      padding: 12px 30px;
      border-radius: 30px;
      background-color: #1db954;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 1rem;
    }

    .right-panel {
      width: 70%;
      padding: 40px;
    }

    .track-list {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .track {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #1f1f1f;
      padding: 10px;
      border-radius: 8px;
    }

    .track button {
      background: none;
      border: none;
      color: #1db954;
      font-size: 2rem;
      cursor: pointer;
    }

    .back-home-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #1db954;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 30px;
      cursor: pointer;
      font-size: 1rem;
      display: flex;
      align-items: center;
    }
    .back-home-btn i {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <button class="back-home-btn" onclick="window.location.href='sutar.php'">
      <i class="bi bi-house-door"></i>
    </button>
    <div class="left-panel">
      <img src="Armaan-Malik.jpg" alt="arman" class="artist-photo">
      <div class="artist-info">
        <h1>Arman Malik</h1>
        <p class="verified"><i class="bi bi-patch-check-fill"></i> Verified Artist</p>
       <p>  Armaan Malik is a popular Indian playback singer and musician. </p> 
         <p><b>Born:</b>July 22, 1995<p>
        <p><b>Genre:</b> Bollywood, Romantic, Classical</p>
    
        <button class="start-btn" onclick="playAllSongs()">Start</button>
        <button class="start-btn" id="favorite-btn" onclick="toggleFavorite()">Favorite</button>
      </div>
    </div>
    <div class="right-panel">
      <h2>Popular Songs</h2>
      <div class="track-list" id="track-list">
        <!-- Songs will be added dynamically via JavaScript -->
      </div>
      <audio id="audio-player" controls autoplay style="width: 100%; margin-top: 20px;"></audio>
    </div>
  </div>

  <script>
const songs = [

      { name: "Bas_Tujhse_Pyaar_Ho ", src:  "Bas_Tujhse_Pyaar_Ho - (Raag.Fm).mp3 " },
      { name: "Chupke_Chupke  ", src:  "Chupke_Chupke  - (Raag.Fm).mp3 "},
      { name: "De_Taali ", src:   "De_Taali - (Raag.Fm).mp3"},
      { name: "Dil_Malanga ", src:  " Dil_Malanga - (Raag.Fm).mp3  "},                            
      { name: "Ghar   ", src:  "  Ghar - (Raag.Fm).mp3  "},
      { name: "Paas_Aao", src:   "   Paas_Aao - (Raag.Fm).mp3  "},
      { name: "Roke_Na_Koi  ", src:  " Roke_Na_Koi - (Raag.Fm).mp3 "},
      { name: "Saanvarey ", src:   " Saanvarey - (Raag.Fm).mp3 "},
      { name: "Seven   ", src:   "   Seven - (Raag.Fm).mp3  "},
      { name: "Sun_Maahi", src:  "Sun_Maahi - (Raag.Fm).mp3" }
    ];


    const trackList = document.getElementById('track-list');
    const audioPlayer = document.getElementById('audio-player');
    let currentIndex = 0;

    // Dynamically Add Songs to the Page
    function loadSongs() {
      trackList.innerHTML = ""; // Clear existing list
      songs.forEach((song, index) => {
        const trackDiv = document.createElement('div');
        trackDiv.classList.add('track');
        trackDiv.innerHTML = `
          <span>${song.name}</span> 
          <button onclick="playSong(${index})"><i class="bi bi-play-circle"></i></button>
        `;
        trackList.appendChild(trackDiv);
      });
    }

    // Play Specific Song
    function playSong(index) {
      currentIndex = index;
      audioPlayer.src = songs[currentIndex].src;
      audioPlayer.play().catch(error => console.log("Playback error: ", error));
      audioPlayer.onended = function() {
        currentIndex++;
        if (currentIndex < songs.length) {
          playSong(currentIndex);
        }
      };
    }

    // Play All Songs Sequentially
    function playAllSongs() {
      playSong(0);
    }

    function toggleFavorite() {
      let favoriteArtists = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
      const artistName = "Arman Malik";
      const favoriteBtn = document.getElementById('favorite-btn');
      console.log("Current favorite artists:", favoriteArtists);
      if (favoriteArtists.includes(artistName)) {
        favoriteArtists = favoriteArtists.filter(artist => artist !== artistName);
        favoriteBtn.textContent = 'Favorite';
        alert(artistName + ' removed from Favorites');
      } else {
        favoriteArtists.push(artistName);
        favoriteBtn.textContent = 'Favorited';
        alert(artistName + ' added to Favorites');
      }
      console.log("Updated favorite artists:", favoriteArtists);
      localStorage.setItem('favoriteArtists', JSON.stringify(favoriteArtists));
    }

    // Load songs when page loads
    window.onload = loadSongs;
  </script>

</body>
</html>
