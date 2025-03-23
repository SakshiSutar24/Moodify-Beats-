document.addEventListener("DOMContentLoaded", () => {
    const audioPlayer = document.getElementById("audio-player");
    const playButtons = document.querySelectorAll(".play-btn");

    let currentSong = null; 

    playButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const songDiv = this.parentElement;
            const songSrc = songDiv.getAttribute("data-audio");

            // Check if the same song is playing, if yes - pause it
            if (currentSong === songSrc && !audioPlayer.paused) {
                audioPlayer.pause();
                this.textContent = "▶"; // Play icon
                currentSong = null;
            } else {
                // Stop any other playing song
                document.querySelectorAll(".play-btn").forEach((btn) => {
                    btn.textContent = "▶";
                });

                audioPlayer.src = songSrc;
                audioPlayer.play();
                this.textContent = "⏸"; // Pause icon
                currentSong = songSrc;
            }
        });
    });

    // Update button when song ends
    audioPlayer.addEventListener("ended", () => {
        document.querySelectorAll(".play-btn").forEach((btn) => {
            btn.textContent = "▶";
        });
        currentSong = null;
    });
});
document.querySelectorAll(".song").forEach(song => {
    song.addEventListener("click", function() {
        let title = this.querySelector("h2").innerText;
        let artist = this.querySelector("p").innerText;
        let src = this.getAttribute("data-audio");
        let image = this.querySelector("img").src;
        
        window.location.href = `mismatched_index.php?title=${encodeURIComponent(title)}&artist=${encodeURIComponent(artist)}&src=${encodeURIComponent(src)}&image=${encodeURIComponent(image)}`;
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const songs = document.querySelectorAll('.song');
  
    songs.forEach(song => {
      song.addEventListener('click', function() {
        window.location.href = 'mismatched_index.php';
      });
    });
  });