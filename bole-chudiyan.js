document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer = document.getElementById('audio-player');
  const playButtons = document.querySelectorAll('.play-btn');
  let currentTrack = null;

  playButtons.forEach(button => {
    button.addEventListener('click', () => {
      const songElement = button.closest('.song');
      const audioSrc = songElement.getAttribute('data-audio');

      if (currentTrack === audioSrc && !audioPlayer.paused) {
        audioPlayer.pause();
        button.textContent = '▶';
      } else {
        audioPlayer.src = audioSrc;
        audioPlayer.play();
        currentTrack = audioSrc;
        playButtons.forEach(btn => btn.textContent = '▶');
        button.textContent = '⏸';
      }
    });
  });

  audioPlayer.addEventListener('ended', () => {
    playButtons.forEach(button => button.textContent = '▶');
    currentTrack = null;
  });
});

let songs = [
  { title: 'Nahi Bolna', duration: '3:40', src: 'Nahi Bolna - (Raag.Fm).mp3', image: 'Bole-Chudiyan-Nawazuddin-Siddiqui.jpg', artist: 'K3G' },
  { title: 'Rehguzar', duration: '3:55', src: 'Rehguzar - (Raag.Fm).mp3', image: 'Bole-Chudiyan-Nawazuddin-Siddiqui.jpg', artist: 'K3G' },
  { title: 'Swaggy Chudiyan', duration: '3:35', src: 'Swaggy Chudiyan - (Raag.Fm).mp3', image: 'Bole-Chudiyan-Nawazuddin-Siddiqui.jpg', artist: 'K3G' },
  { title: 'Tumpe Hum Toh', duration: '4:05', src: 'Tum Pe Hum Toh (Female) - (Raag.Fm).mp3', image: 'Bole-Chudiyan-Nawazuddin-Siddiqui.jpg', artist: 'K3G' },
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

// Initialize the first song when the page loads
window.onload = function() {
  changeSong(currentSongIndex);
};