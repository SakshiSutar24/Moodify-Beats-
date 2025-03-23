<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Moodify Beats - Now Playing</title>
  
  <!-- Bootstrap Icons CDN for icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  <style>
    /* Body: Professional Dark Blue/Charcoal Theme */
    body {
      background: linear-gradient(135deg, #0f172a, #1e293b);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: #fff;
    }
    
    /* Player Card Container */
    .player-container {
      background: #1f2937;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.8);
      width: 350px;
      padding: 20px;
      text-align: center;
      backdrop-filter: blur(6px);
      position: relative;
    }
    
    /* Album Art */
    .album-art img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.8);
    }
    
    /* Song Info */
    .song-info {
      margin: 15px 0;
    }
    .song-info h2 {
      font-size: 1.4rem;
      margin-bottom: 5px;
    }
    .song-info p {
      font-size: 1rem;
      opacity: 0.8;
    }
    
    /* Bottom Controls Container */
    .bottom-controls {
      margin-top: 20px;
    }
    
    /* Time and Progress Bar */
    .time-container {
      display: flex;
      justify-content: space-between;
      font-size: 0.8rem;
      margin-bottom: 10px;
    }
    .time-container span {
      opacity: 0.7;
      margin: 0 10px;
    }
    .progress-bar {
      -webkit-appearance: none;
      width: 100%;
      height: 4px;
      border-radius: 2px;
      background: rgba(255, 255, 255, 0.3);
      outline: none;
      cursor: pointer;
    }
    .progress-bar::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 12px;
      height: 12px;
      background: #fff;
      border-radius: 50%;
      box-shadow: 0 0 2px rgba(0,0,0,0.4);
    }
    
    /* Hide default audio controls */
    audio {
      display: none;
    }
    
    /* Custom Controls Row */
    .controls {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      position: relative;
    }
    .controls button {
      background: linear-gradient(45deg, #3b82f6, #2563eb);
      border: none;
      color: #fff;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .controls button:hover {
      transform: scale(1.1);
      box-shadow: 0 0 8px rgba(59, 130, 246, 0.7);
    }
    
    /* Playlist Button (Pill Shape) */
    .playlist-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      background: linear-gradient(45deg, #3b82f6, #2563eb);
      border: none;
      border-radius: 20px;
      color: #fff;
      font-size: 1rem;
      padding: 8px 12px;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
      white-space: nowrap;
    }
    .playlist-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 8px rgba(59, 130, 246, 0.7);
    }
    
    /* More Options Dropdown */
    .more-options-dropdown {
      display: none;
      position: absolute;
      bottom: 60px;
      right: 0;
      background: #27303f;
      border: 1px solid #3a3a3a;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.7);
      z-index: 10;
      min-width: 110px;
    }
    .more-options-dropdown button {
      width: 100%;
      background: none;
      border: none;
      color: #fff;
      padding: 10px;
      font-size: 0.95rem;
      text-align: left;
      cursor: pointer;
      transition: background 0.2s;
    }
    .more-options-dropdown button:hover {
      background: #444;
    }
    
    /* More Options Button (Three Dots) */
    .more-btn {
      background: none;
      border: none;
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      transition: transform 0.2s;
    }
    .more-btn:hover {
      transform: scale(1.1);
    }
    .link{
      align-items: center;
    }
    .link {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    /* Navigation Bar */
    .navbar {
      width: 100%;
      background: #1f2937;
      padding: 10px 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.8);
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
    }
    .navbar a {
      color: #fff;
      text-decoration: none;
      font-size: 1.2rem;
      margin: 0 10px;
      transition: color 0.2s;
    }
    .navbar a:hover {
      color: #3b82f6;
    }
    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .content {
      padding-top: 60px; /* To avoid content being hidden behind navbar */
    }
    /* Back to Home Button */
    .home-btn {
      position: fixed;
      top: 10px;
      right: 10px;
      background: linear-gradient(45deg, #3b82f6, #2563eb);
      border: none;
      color: #fff;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .home-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 0 8px rgba(59, 130, 246, 0.7);
    }
  </style>
</head>
<body>
  <button class="home-btn" onclick="window.location.href='sutar.php'">
    <i class="bi bi-house-door-fill"></i>
  </button>
  <div class="content">
    <div> 
    <div class="player-container">
      <!-- Album Art -->
      <div class="album-art">
        <img id="albumImage" src="saina.jpg" alt="Album Art">
      </div>
      <!-- Song Info -->
      <div class="song-info">
        <h2 id="songTitle">Parinda</h2>
        <p id="artist">Amaal Mallik</p>
      </div>
      <!-- Custom Time & Progress Controls -->
      <div class="bottom-controls">
        <div class="time-container">
          <span id="currentTime">0:00</span>
          <input type="range" id="progressBar" class="progress-bar" min="0" max="100" value="0">
          <span id="totalDuration">-4:15</span>
        </div>
        <!-- Custom Control Buttons -->
        <div class="controls">
          <button onclick="toggleLike()">
            <i id="likeIcon" class="bi bi-heart"></i>
          </button>
          <button onclick="prevSong()">
            <i class="bi bi-skip-backward-fill"></i>
          </button>
          <button onclick="togglePlayPause()">
            <i id="playPause" class="bi bi-play-fill"></i>
          </button>
          <button onclick="nextSong()">
            <i class="bi bi-skip-forward-fill"></i>
          </button>
          <button onclick="addToPlaylist()" class="playlist-btn">
            <i class="bi bi-plus-circle"></i>
          </button>
          <button onclick="toggleMoreOptions()" class="more-btn">
            <i class="bi bi-three-dots"></i>
          </button>
          <div class="more-options-dropdown" id="moreOptionsDropdown">
            <button onclick="downloadSong()">Download</button>
          </div>
          
        </div>
      </div>
      
    </div>
    </div>
    <!-- Hidden Audio Element for Playback -->
    <audio id="audioPlayer" src="Parinda - (Raag.Fm).mp3"></audio>
  </div>
  <script>
    let songs = [
      { title: "Parinda", artist: "Amaal Mallik", src: "Parinda - (Raag.Fm).mp3", image: "Saina.jpg" },
      { title: "Main Hoon Na Tere Saath", artist: "Amaal Mallik", src: "Main Hoon Na Tere Saath - (Raag.Fm).mp3", image: "Saina.jpg" },
      { title: "Chal Wahin Chalein", artist: "Amaal Mallik", src: "Chal Wahin Chalein - (Raag.Fm).mp3", image: "Saina.jpg" },
      { title: "A Mothers Love", artist: "Amaal Mallik", src: "A Mothers Love - (Raag.Fm).mp3", image: "Saina.jpg" },
      { title: "The Curse of a Champion", artist: "Amaal Mallik", src: "The Curse of a Champion - (Raag.Fm).mp3", image: "Saina.jpg" },
      { title: "The Staircase of Life", artist: "Amaal Mallik", src: "The Staircase of Life - (Raag.Fm).mp3", image: "Saina.jpg" }
    ];
    
    let currentSongIndex = 0;
    let audioPlayer = document.getElementById("audioPlayer");
    let albumImage = document.getElementById("albumImage");
    let songTitle = document.getElementById("songTitle");
    let artist = document.getElementById("artist");
    let playPauseButton = document.getElementById("playPause");
    let likeIcon = document.getElementById("likeIcon");
    let progressBar = document.getElementById("progressBar");
    let currentTimeEl = document.getElementById("currentTime");
    let totalDurationEl = document.getElementById("totalDuration");
    let moreOptionsDropdown = document.getElementById("moreOptionsDropdown");

    function togglePlayPause() {
      if (audioPlayer.paused) {
        audioPlayer.play();
        playPauseButton.classList.replace("bi-play-fill", "bi-pause-fill");
      } else {
        audioPlayer.pause();
        playPauseButton.classList.replace("bi-pause-fill", "bi-play-fill");
      }
    }
    
    audioPlayer.addEventListener("timeupdate", () => {
      let currentTime = audioPlayer.currentTime;
      let duration = audioPlayer.duration;
      if (!isNaN(duration)) {
        let progressPercent = (currentTime / duration) * 100;
        progressBar.value = progressPercent;
        currentTimeEl.innerText = formatTime(currentTime);
        totalDurationEl.innerText = "-" + formatTime(duration - currentTime);
      }
    });
    
    progressBar.addEventListener("input", () => {
      let duration = audioPlayer.duration;
      if (!isNaN(duration)) {
        let seekTime = (progressBar.value / 100) * duration;
        audioPlayer.currentTime = seekTime;
      }
    });
    
    function formatTime(sec) {
      let minutes = Math.floor(sec / 60);
      let seconds = Math.floor(sec % 60);
      if (seconds < 10) {
        seconds = "0" + seconds;
      }
      return minutes + ":" + seconds;
    }
    
    function nextSong() {
      currentSongIndex = (currentSongIndex + 1) % songs.length;
      changeSong(currentSongIndex);
    }
    
    function prevSong() {
      currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
      changeSong(currentSongIndex);
    }
    
    function changeSong(index) {
      let song = songs[index];
      audioPlayer.src = song.src;
      albumImage.src = song.image;
      songTitle.innerText = song.title;
      artist.innerText = song.artist;
      audioPlayer.play();
      playPauseButton.classList.replace("bi-play-fill", "bi-pause-fill");
    }
    
    function toggleLike() {
      let currentSong = songs[currentSongIndex].title;
      let likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
      if (likedSongs.includes(currentSong)) {
        likedSongs = likedSongs.filter(song => song !== currentSong);
        likeIcon.classList.replace("bi-heart-fill", "bi-heart");
      } else {
        likedSongs.push(currentSong);
        likeIcon.classList.replace("bi-heart", "bi-heart-fill");
      }
      localStorage.setItem('likedSongs', JSON.stringify(likedSongs));
    }
    
    function addToPlaylist() {
      let currentSong = songs[currentSongIndex].title;
      let playlist = JSON.parse(localStorage.getItem('playlist')) || [];
      if (!playlist.includes(currentSong)) {
        playlist.push(currentSong);
        localStorage.setItem('playlist', JSON.stringify(playlist));
        alert(currentSong + ' added to Playlist');
        window.location.href = 'createPlaylist.php';
      }
    }
    
    function toggleMoreOptions() {
      if (moreOptionsDropdown.style.display === "block") {
        moreOptionsDropdown.style.display = "none";
      } else {
        moreOptionsDropdown.style.display = "block";
      }
    }
    
    function downloadSong() {
      let currentSong = songs[currentSongIndex];
      let a = document.createElement("a");
      a.href = currentSong.src;
      a.download = currentSong.title + ".mp3";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      moreOptionsDropdown.style.display = "none";
    }
    
    window.addEventListener("click", function(e) {
      if (!e.target.closest(".more-btn")) {
        moreOptionsDropdown.style.display = "none";
      }
    });
  </script>
</body>
</html>
