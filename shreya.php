<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shreya Ghoshal - Moodify Beats</title>
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
      <img src="Shreya-Ghoshal.jpg" alt="shreya" class="artist-photo">
      <div class="artist-info">
        <h1>Shreya Ghoshal</h1>
        <p class="verified"><i class="bi bi-patch-check-fill"></i> Verified Artist</p>
       <p>Shreya Ghoshal is one of India's most renowned and versatile playback singer. </p> 
         <p><b>Born:</b>March 12, 1984\<p>
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

      { name: "Barso_Rege ", src:  "Barso_Re - (Raag.Fm).mp3"},
      { name: "Bahara ", src:  "g:\\PrajaktaN\\webiste music l\ist\\song3\\Bahara - (Raag.Fm).mp3"},
      { name: "Aankhon_Mein_Neendeinr", src: "Aankhon_Mein_Neendein - (Raag.Fm).mp3"},
      { name: "Saibo", src:  "Saibo  - (Raag.Fm).mp3"},                            
      { name: "Hasi ", src:  "Hasi - (Raag.Fm).mp3"},
      { name: "Mohabbat_Se ", src:   " Mohabbat_Se  - (Raag.Fm).mp3"},
      { name: "Chikni_Chameli", src:  " Chikni_Chameli - (Raag.Fm).mp3"},
      { name: "Tequila_Wakila", src:   "   Tequila_Wakila - (Raag.Fm).mp3"},
      { name: "Mashallah", src:   "Mashallah - (Raag.Fm).mp3"},
      { name: "Jhalla_Wallah", src:  "Jhalla_Wallah - (Raag.Fm).mp3" }
    ];

    /*
g:\PrajaktaN\webiste music list\song3\Barso_Re - (Raag.Fm).mp3
g:\PrajaktaN\webiste music list\song3\Bahara - (Raag.Fm).mp3 
g:\PrajaktaN\webiste music list\song3\Aankhon_Mein_Neendein - (Raag.Fm).mp3 
g:\PrajaktaN\webiste music list\song3\Saibo  - (Raag.Fm).mp3 
g:\PrajaktaN\webiste music list\song3\Hasi - (Raag.Fm).mp3
 g:\PrajaktaN\webiste music list\song3\Mohabbat_Se  - (Raag.Fm).mp3 
 g:\PrajaktaN\webiste music list\song3\Chikni_Chameli) - (Raag.Fm).mp3 
 g:\PrajaktaN\webiste music list\song3\Tequila_Wakila - (Raag.Fm).mp3

g:\PrajaktaN\webiste music list\song3\Mashallah - (Raag.Fm).mp3 

 g:\PrajaktaN\webiste music list\song3\Jhalla_Wallah - (Raag.Fm).mp3
*/

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
      const artistName = "Shreya Ghoshal";
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

    function checkFavorite() {
      let favoriteArtists = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
      const artistName = "Shreya Ghoshal";
      const favoriteBtn = document.getElementById('favorite-btn');
      if (favoriteArtists.includes(artistName)) {
        favoriteBtn.textContent = 'Favorited';
      }
    }

    // Load songs and check favorite status when page loads
    window.onload = function() {
      loadSongs();
      checkFavorite();
    };
  </script>
 
</body>
</html>
