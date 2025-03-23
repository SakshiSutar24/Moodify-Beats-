// सर्व गाणी
const tracks = [
  { title: 'Jab Saiyaan', duration: '4:10', src: 'Jab Saiyaan - (Raag.Fm).mp3' },
  { title: 'Jhume Re Gori', duration: '3:55', src: 'Jhume Re Gori - (Raag.Fm).mp3' },
  { title: 'Meri Jaan', duration: '3:55', src: 'Meri Jaan - (Raag.Fm).mp3' },
  { title: 'Muskurahat', duration: '3:40', src: 'Muskurahat - (Raag.Fm).mp3' },
  { title: 'Shikayat', duration: '3:30', src: 'Shikayat - (Raag.Fm).mp3' }
];

document.addEventListener('DOMContentLoaded', () => {
  const audioPlayer = document.getElementById('audio-player');
  const playButtons = document.querySelectorAll('.play-btn');

  playButtons.forEach(button => {
    button.addEventListener('click', () => {
      const songElement = button.parentElement;
      const audioSrc = songElement.getAttribute('data-audio');

      if (audioPlayer.src.includes(audioSrc) && !audioPlayer.paused) {
        audioPlayer.pause();
        button.textContent = '▶';
      } else {
        audioPlayer.src = audioSrc;
        audioPlayer.play();
        playButtons.forEach(btn => btn.textContent = '▶');
        button.textContent = '⏸';
      }
    });
  });

  audioPlayer.addEventListener('ended', () => {
    playButtons.forEach(button => button.textContent = '▶');
  });
});

document.querySelectorAll(".mp3").forEach(song => {
  song.addEventListener("click", function() {
      let title = this.querySelector("h2").innerText;
      let artist = this.querySelector("p").innerText;
      let src = this.getAttribute("data-audio");
      let image = this.querySelector("img").src;
      
      window.location.href = `gangubai-kathiawadi.php?title=${encodeURIComponent(title)}&artist=${encodeURIComponent(artist)}&src=${encodeURIComponent(src)}&image=${encodeURIComponent(image)}`;
  });
});
