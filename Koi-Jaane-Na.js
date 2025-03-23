document.addEventListener("DOMContentLoaded", () => {
    const audioPlayer = document.getElementById("audio-player");
    const playButtons = document.querySelectorAll(".play-btn");
    const songs = document.querySelectorAll('.mp3');

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

    // Responsive adjustments
    window.addEventListener('resize', function() {
        const windowWidth = window.innerWidth;

        songs.forEach(song => {
            if (windowWidth < 768) {
                song.style.flexDirection = 'column';
                song.style.alignItems = 'center';
                song.style.textAlign = 'center';
            } else {
                song.style.flexDirection = 'row';
                song.style.alignItems = 'flex-start';
                song.style.textAlign = 'left';
            }
        });
    });

    // Initial responsive adjustments
    window.dispatchEvent(new Event('resize'));
});
document.addEventListener("DOMContentLoaded", () => {
    const songs = document.querySelectorAll('.mp3');

    songs.forEach(song => {
        song.addEventListener("click", function() {
            const title = this.querySelector("h2").innerText;
            const artist = this.querySelector("p").innerText;
            const src = this.getAttribute("data-audio");
            const image = this.querySelector("img").src;
            
            window.location.href = `Koi-jaane-Na_index.php?title=${encodeURIComponent(title)}&artist=${encodeURIComponent(artist)}&src=${encodeURIComponent(src)}&image=${encodeURIComponent(image)}`;
        });
    });
});